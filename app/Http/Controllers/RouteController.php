<?php

namespace App\Http\Controllers;

use App\Models\BusInbound;
use App\Models\BusOutbound;
use App\Models\RequestedLocation;
use App\Models\Route;
use App\Models\UserOrigin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{

    /**
     * Método responsável por mostrar a tela de busca de rotas.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showSearchForm(): \Illuminate\Contracts\View\View
    {
        $busOutbounds = BusOutbound::with('address')->get();
        $busInbounds = BusInbound::with('address')->get();

        return view('User.search', compact('busOutbounds', 'busInbounds'));
    }


    /**
     * Método responsável por buscar as rotas no banco com base nos dados da requisição
     * do usuário.
     *
     * @param Request $request - Objeto do tipo Request que contém todas as informações que você precisa.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function searchRoutes(Request $request): \Illuminate\Http\RedirectResponse
    {
        # Coletar o ID do endereço da origem requisitada pelo usuário
        $requestedBusOutbound = $this->returnIntOrString($request->busOutbound);
        # Coletar o ID do endereço do destino requisitado pelo usuário
        $requestedBusInbound = $this->returnIntOrString($request->busInbound);

        // Coletar os IDs das idasOnibus (destino) que possuem o endereço de destino requisitado pelo usuário
        $busOutbounds = $this->getOutbounds($requestedBusOutbound);

        # Se não achar um destino, então nem precisa fazer a busca
        if (!$busOutbounds) {
            $this->registerNoDestinyRequest();

            return redirect()
                ->back()
                ->with('error', 'Nenhuma rota foi encontrada com o destino requisitado. Sua requisição foi registrada para futuras melhorias no transporte público.');
        }

        # Coletar os IDs das voltasOnibus (origem) que possuem o endereço de origem requisitado pelo usuário
        $busInbounds = $this->getInbounds($requestedBusInbound);

        # Se não há origem, buscar sem usar origem e retornar um aviso na tela de resultados
        if (!$busInbounds && count($this->serachWithoutOrigin($busOutbounds)) > 0) {
            $routesFound = $this->serachWithoutOrigin($busOutbounds);

            $this->registerNoOriginRequest($requestedBusOutbound, $requestedBusInbound);

            return redirect()
                ->route('routes.showRoutes')
                ->with('routesFound', $routesFound)
                ->with('warn', 'Não foi encontrado rotas que partem da sua origem.');
        }

        # Coletar as rotas que possuem algum ID de volta e ida Onibus coletada acima
        # Agrupar a query pela volta e ida onibus para eliminar duplicadas
        $routesFound = $this->serachWithOrigin($busInbounds, $busOutbounds);

        # Se ao menos uma rota, então retorne ela para a tela de resultados. Senão, retorne um erro na tela de busca para o usuário
        if ($routesFound) {
            $this->registerFullRequest($requestedBusOutbound, $requestedBusInbound);

            return redirect()
                ->route('routes.showRoutes')
                ->with('routesFound', $routesFound);
        }
        else {
            $this->registerNoRouteRequest();

            return redirect()
                ->back()
                ->with('error', 'Não foram encontradas rotas. Sua requisição foi armazenada para futuras melhoras na gestão de transporte público.');
        }
    }


    private function serachWithOrigin($busInbounds, $busOutbounds)
    {
        # Ativar permissão de usar o group by em colunas que não usam funções como SUM e COUNT
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))");

        $routesFound = Route::whereIn('bus_inbound_id', $busInbounds)
        ->whereIn('bus_outbound_id', $busOutbounds)
        ->groupBy('bus_inbound_id')
        ->groupBy('bus_outbound_id')
        ->get();

        if (count($routesFound) > 0) return $routesFound;
        else return false;
    }

    private function serachWithoutOrigin($busOutbounds)
    {
        # Ativar permissão de usar o group by em colunas que não usam funções como SUM e COUNT
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))");

        $routesFound = Route::whereIn('bus_outbound_id', $busOutbounds)
        ->groupBy('bus_outbound_id')
        ->get();

        if (count($routesFound) > 0) return $routesFound;
        else return false;
    }


    private function getOutbounds(int|string $requested_address_id)
    {
        if (!is_numeric($requested_address_id)) return null;

        $foundOutbounds = BusOutbound::where('address_id', $requested_address_id)
        ->get()
        ->pluck('id');

        if (count($foundOutbounds) > 0) return $foundOutbounds;
        else return false;
    }


    private function getInbounds(int|string $requested_address_id)
    {
        if (!is_numeric($requested_address_id)) return null;

        $foundInbounds = BusInbound::where('address_id', $requested_address_id)
        ->get()
        ->pluck('id');

        if (count($foundInbounds) > 0) return $foundInbounds;
        else return false;
    }

    /**
     *
     * @return void
     */
    private function registerFullRequest(int $outbound_id, int $inbound_id)
    {
        date_default_timezone_set('America/Sao_Paulo');

        # Registrar uma nova requisição
        $newRequest = RequestController::parallelStore(
            [
                'user_id'     => auth()->id(),
                'feedback_id' => null,
                'data_hora'   => date('Y-m-d H:i:s'),
                'retorno'     => true,
            ]
        );

        session()->put('request_id', $newRequest->getAttributeValue('id'));

        # Registrar um novo local requisitado
        $requestedLocationName = RequestedLocation::where('id', $outbound_id)->first()->getAttributeValue('nome');
        $newRequestedLocation = RequestedLocationController::parallelStore(
            [
                'nome' => $requestedLocationName,
                'address_id' => $outbound_id,
            ]
        );

        # Registrar uma nova origem requistiada
        $userOriginName = UserOrigin::where('id', $inbound_id)->first()->getAttributeValue('nome');
        UserOriginController::parallelStore(
            [
                'nome' => $userOriginName,
                'address_id' => $inbound_id,
                'requested_location_id' => $newRequestedLocation->getAttributeValue('id'),
                'user_id' => auth()->id(),
                'request_id' => $newRequest->id,
            ]
        );

    }

    // TODO: NÃO ESTÁ CADASTRANDO A ORIGEM, O NOME DO DESTINO ESTÁ VINDO ERRADO MAS ESTÁ CADASTRANDO
    private function registerNoOriginRequest(int|string $outbound_id, int|string $inbound_id)
    {
        # Registrar uma nova requisição
        $newRequest = RequestController::parallelStore(
            [
                'user_id'     => auth()->id(),
                'feedback_id' => null,
                'data_hora'   => date('Y-m-d H:i:s'),
                'retorno'     => true,
            ]
        );

        session()->put('request_id', $newRequest->getAttributeValue('id'));

        # Registrar um novo local requisitado
        $requestedLocationName = RequestedLocation::where('id', $outbound_id)->first()->getAttributeValue('nome');
        $newRequestedLocation = RequestedLocationController::parallelStore(
            [
                'nome' => $requestedLocationName,
                'address_id' => $outbound_id,
            ]
        );

        # Registrar uma nova origem requistiada
        $newUserOrigin = UserOriginController::parallelStore(
            [
                'nome' => $inbound_id,
                'address_id' => null,
                'requested_location_id' => $newRequestedLocation->getAttributeValue('id'),
                'user_id' => auth()->id(),
                'request_id' => $newRequest->getAttributeValue('id'),
            ]
        );
    }

    private function registerNoDestinyRequest()
    {
        # Registrar uma nova requisição
        $newRequest = RequestController::parallelStore(
            [
                'user_id'     => auth()->id(),
                'feedback_id' => null,
                'data_hora'   => date('Y-m-d H:i:s'),
                'retorno'     => false,
            ]
        );

        session()->put('request_id', $newRequest->getAttributeValue('id'));

        # Registrar um novo local requisitado
        # Registrar uma nova origem requistiada
    }

    private function registerNoRouteRequest()
    {
        # Registrar uma nova requisição
        $newRequest = RequestController::parallelStore(
            [
                'user_id'     => auth()->id(),
                'feedback_id' => null,
                'data_hora'   => date('Y-m-d H:i:s'),
                'retorno'     => false,
            ]
        );
        # Registrar um novo local requisitado
        # Registrar uma nova origem requistiada
    }


    private function returnIntOrString(mixed $data)
    {
        if ( is_null   ($data)) return null         ;
        if ( is_numeric($data)) return intval($data);
        if (!is_numeric($data)) return $data        ;
    }

    /**
     * Método responsável por mostrar as rotas que foram encontradas com o método acima.
     *
     * @param Request $request - Objeto do tipo Request que contém todas as informações que você precisa.
     * @return \Illuminate\Contracts\View\View
     */
    public function showRoutes(Request $request): \Illuminate\Contracts\View\View
    {
        $routesFound = $request->session()->get('routesFound');

        # Retornar a view das rotas com as rotas recebidas no parâmetro
        return view('User.routes', compact('routesFound'));
    }


    /**
     * Método responsável por mostrar os detalhes das rotas ao clicar nelas. Mostrando assim o itinerário
     * que aquela rota compoem.
     *
     * @param Request $request - Objeto do tipo Request que contém todas as informações que você precisa.
     * @return void
     */
    public function viewRouteDetails(Request $request)
    {
        # ...
    }
}
