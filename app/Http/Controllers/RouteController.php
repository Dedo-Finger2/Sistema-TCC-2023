<?php

namespace App\Http\Controllers;

use App\Models\BusInbound;
use App\Models\BusOutbound;
use App\Models\RequestedLocation;
use App\Models\Route;
use App\Models\UserOrigin;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Address;
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
        // * DADOS DO FORMULÁRIO * \\

        # Coletar o ID do endereço da origem requisitada pelo usuário
        $requestedBusOutbound = $this->returnIntOrString($request->busOutbound);
        # Coletar o ID do endereço do destino requisitado pelo usuário
        $requestedBusInbound  = $this->returnIntOrString($request->busInbound);

        // * IDA_ONIBUS & VOLTA_ONIBUS * \\

        # Coletar os IDs das idasOnibus (destino) que possuem o endereço de destino requisitado pelo usuário
        $busOutbounds = $this->getOutbounds($requestedBusOutbound);
        # Coletar os IDs das voltasOnibus (origem) que possuem o endereço de origem requisitado pelo usuário
        $busInbounds  = $this->getInbounds($requestedBusInbound);

        // * CENÁRIOS * \\

        # Cenário 01: Usuário digitou uma origem e destino que não constam no banco de dados
        if (!$busInbounds && !$busOutbounds) {
            $this->registerNoOriginAndDestinyRequest($requestedBusOutbound, $requestedBusInbound);

            return redirect()
                ->back()
                ->with('error', 'Nenhuma rota foi encontrada com o destino requisitado. Sua requisição foi registrada para futuras melhorias no transporte público.');
        }

        # Cenário 02: Usuário digitou um destino que não existe, mas digitou uma origem que existe
        if (!$busOutbounds) {
            $this->registerNoDestinyRequest($requestedBusOutbound, $requestedBusInbound);

            return redirect()
                ->back()
                ->with('error', 'Nenhuma rota foi encontrada com o destino requisitado. Sua requisição foi registrada para futuras melhorias no transporte público.');
        }

        # Cenário 03: Usuário digitou uma origem que não existe, mas digitou um destino que existe
        if (!$busInbounds && count($this->serachWithoutOrigin($busOutbounds)) > 0) {
            # Faça uma busca sem levar a origem em consideração
            $routesFound = $this->serachWithoutOrigin($busOutbounds);
            # Registra toda uma nova requisição (Requisição, Origem_Requisitada[null] e Local_Requisitado)
            $this->registerNoOriginRequest($requestedBusOutbound, $requestedBusInbound);

            return redirect()
                ->route('routes.showRoutes')
                ->with('routesFound', $routesFound)
                ->with('warn', 'Não foi encontrado rotas que partem da sua origem.');
        }

        // * BUSCA DE ROTAS * \\

        # Faz uma busca com todos os dados coerentes
        $routesFound = $this->serachWithOrigin($busInbounds, $busOutbounds);

        # Se ao menos uma rota for encontrada, então retorne ela para a tela de resultados. Senão, retorne um erro na tela de busca para o usuário
        if ($routesFound) {
            # Registra toda uma nova requisição (Requisição, Origem_Requisitada e Local_Requisitado)
            $this->registerFullRequest($requestedBusOutbound, $requestedBusInbound);

            return redirect()
                ->route('routes.showRoutes')
                ->with('routesFound', $routesFound);
        }else {
            # Registra toda uma nova requisição (Requisição[0], Origem_Requisitada[null] e Local_Requisitado[null])
            $this->registerNoRouteRequest($requestedBusOutbound, $requestedBusInbound);

            return redirect()
                ->back()
                ->with('error', 'Não foram encontradas rotas. Sua requisição foi armazenada para futuras melhoras na gestão de transporte público.');
        }
    }


    /**
     * Realizar uma busca com origem e destino (endereços) transformadas em ID das tabelas
     * ida_onibus e volta_onibus
     *
     * @param Collection $busInbounds - ID volta onibus
     * @param Collection $busOutbounds - ID ida onibus
     * @return mixed - Rotas ou false
     */
    private function serachWithOrigin(Collection $busInbounds, Collection $busOutbounds)
    {
        # Ativar permissão de usar o group by em colunas que não usam funções como SUM e COUNT
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))");

        $routesFound = Route::whereIn('bus_inbound_id', $busInbounds)
        ->whereIn('bus_outbound_id', $busOutbounds)
        ->groupBy('bus_inbound_id')
        ->groupBy('bus_outbound_id')
        ->get();

        if (count($routesFound) > 0) return $routesFound;
        else                         return false;
    }


    /**
     * Realizar uma busca sem origem, mas com destino (endereços) transformado em ID da tabela
     * ida_onibus
     *
     * @param Collection $busOutbounds - ID ida onibus
     * @return mixed - Rotas ou false
     */
    private function serachWithoutOrigin(Collection $busOutbounds)
    {
        # Ativar permissão de usar o group by em colunas que não usam funções como SUM e COUNT
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))");

        $routesFound = Route::whereIn('bus_outbound_id', $busOutbounds)
        ->groupBy('bus_outbound_id')
        ->get();

        if (count($routesFound) > 0) return $routesFound;
        else                         return false;
    }


    /**
     * Retorna IDs da tabela ida onibus com base num ID de endereço fornecido pelo usuário
     *
     * @param integer|string $requested_address_id - ID de destino que o usuário requisitou ou o nome que o usuário digitou no campo
     * @return mixed - False ou ID de ida onibus
     */
    private function getOutbounds(int|string $requested_address_id)
    {
        if (!is_numeric($requested_address_id)) return null;

        $foundOutbounds = BusOutbound::where('address_id', $requested_address_id)
        ->get()
        ->pluck('id');

        if (count($foundOutbounds) > 0) return $foundOutbounds;
        else return false;
    }


    /**
     * Retorna IDs da tabela volta onibus com base num ID de endereço fornecido pelo usuário
     *
     * @param integer|string $requested_address_id - ID de origem que o usuário requisitou ou o nome que o usuário digitou no campo
     * @return mixed - False ou ID de volta onibus
     */
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
     * Registra uma request completa, registrando um novo registro nas tabelas:
     * Requisição (Requests),
     * Local Requisitado (Requested_Locations),
     * Origem Usuário (User_Origins)
     *
     * @param integer $outbound_id - ID da ida onibus
     * @param integer $inbound_id - ID da volta onibus
     * @return void
     */
    private function registerFullRequest(int $outbound_id, int $inbound_id)
    {
        date_default_timezone_set('America/Sao_Paulo');

        # Registrar uma nova requisição com base no cenário atual
        $newRequest = RequestController::parallelStore(
            [
                'user_id'     => auth()->id(),
                'feedback_id' => null,
                'data_hora'   => date('Y-m-d H:i:s'),
                'retorno'     => true,
            ]
        );

        # Salva o ID da nova requisição numa sessão para que possa ser acessada na rota (store) de feedback
        session()->put('request_id', $newRequest->getAttributeValue('id'));

        # Pega o nome do local requisitado
        $requestedLocationName = Address::where('id', "=", $outbound_id)->first()->getAttributeValue('bairro');
        # Registrar um novo local requisitado
        $newRequestedLocation = RequestedLocationController::parallelStore(
            [
                'nome' => $requestedLocationName,
                'address_id' => $outbound_id,
            ]
        );

        # Pega o nome da origem usuario
        $userOriginName = Address::where('id', "=", $inbound_id)->first()->getAttributeValue('bairro');
        # Registrar uma nova origem requistiada
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


    /**
     * Registra uma request completa, registrando um novo registro nas tabelas:
     * Requisição (Requests),
     * Local Requisitado (Requested_Locations),
     * Origem Usuário (User_Origins)
     *
     * @param integer $outbound_id - ID da ida onibus
     * @param integer|string $inbound_id - ID da volta onibus ou nome que o usuário digitou no campo
     * @return void
     */
    private function registerNoOriginRequest(int $outbound_id, int|string $inbound_id)
    {
        date_default_timezone_set('America/Sao_Paulo');

        # Registrar uma nova requisição com base no cenário atual
        $newRequest = RequestController::parallelStore(
            [
                'user_id'     => auth()->id(),
                'feedback_id' => null,
                'data_hora'   => date('Y-m-d H:i:s'),
                'retorno'     => true,
            ]
        );

        # Salva o ID da nova requisição numa sessão para que possa ser acessada na rota (store) de feedback
        session()->put('request_id', $newRequest->getAttributeValue('id'));

        # Pega o nome do local requisitado
        $requestedLocationName = Address::where('id', "=", $outbound_id)->first()->getAttributeValue('bairro');
        # Registrar um novo local requisitado
        $newRequestedLocation = RequestedLocationController::parallelStore(
            [
                'nome' => $requestedLocationName,
                'address_id' => $outbound_id,
            ]
        );

        # Registrar uma nova origem requistiada
        UserOriginController::parallelStore(
            [
                'nome' => $inbound_id,
                'address_id' => null,
                'requested_location_id' => $newRequestedLocation->getAttributeValue('id'),
                'user_id' => auth()->id(),
                'request_id' => $newRequest->getAttributeValue('id'),
            ]
        );
    }


    /**
     * Registra uma request completa, registrando um novo registro nas tabelas:
     * Requisição (Requests),
     * Local Requisitado (Requested_Locations),
     * Origem Usuário (User_Origins)
     *
     * @param integer|string $outbound_id - ID da ida onibus ou nome que o usuário digitou no campo
     * @param integer $inbound_id - ID da volta onibus
     * @return void
     */
    private function registerNoDestinyRequest(int|string $outbound_id, int $inbound_id)
    {
        date_default_timezone_set('America/Sao_Paulo');

        # Registrar uma nova requisição com base no cenário atual
        $newRequest = RequestController::parallelStore(
            [
                'user_id'     => auth()->id(),
                'feedback_id' => null,
                'data_hora'   => date('Y-m-d H:i:s'),
                'retorno'     => false,
            ]
        );

        # Salva o ID da nova requisição numa sessão para que possa ser acessada na rota (store) de feedback
        session()->put('request_id', $newRequest->getAttributeValue('id'));

        # Registrar um novo local requisitado
        $newRequestedLocation = RequestedLocationController::parallelStore(
            [
                'nome' => $outbound_id,
                'address_id' => null,
            ]
        );

        # Pega o nome da origem requisitada
        $userOriginName = Address::where('id', "=", $inbound_id)->first()->getAttributeValue('bairro');
        # Registrar uma nova origem requistiada
        UserOriginController::parallelStore(
            [
                'nome' => $userOriginName,
                'address_id' => $inbound_id,
                'requested_location_id' => $newRequestedLocation->getAttributeValue('id'),
                'user_id' => auth()->id(),
                'request_id' => $newRequest->getAttributeValue('id'),
            ]
        );
    }


    /**
     * Registra uma request completa, registrando um novo registro nas tabelas:
     * Requisição (Requests),
     * Local Requisitado (Requested_Locations),
     * Origem Usuário (User_Origins)
     *
     * @param integer $outbound_id - ID da ida onibus
     * @param integer $inbound_id - ID da volta onibus
     * @return void
     */
    private function registerNoRouteRequest(int $outbound_id, int $inbound_id)
    {
        date_default_timezone_set('America/Sao_Paulo');

        # Registrar uma nova requisição com base no cenário atual
        $newRequest = RequestController::parallelStore(
            [
                'user_id'     => auth()->id(),
                'feedback_id' => null,
                'data_hora'   => date('Y-m-d H:i:s'),
                'retorno'     => false,
            ]
        );

        # Salva o ID da nova requisição numa sessão para que possa ser acessada na rota (store) de feedback
        session()->put('request_id', $newRequest->getAttributeValue('id'));

        # Pega o nome do local requisitado
        $requestedLocationName = Address::where('id', "=", $outbound_id)->first()->getAttributeValue('bairro');
        # Registrar um novo local requisitado
        $newRequestedLocation = RequestedLocationController::parallelStore(
            [
                'nome' => $requestedLocationName,
                'address_id' => $outbound_id,
            ]
        );

        # Pega o nome do origem requisitada
        $userOriginName = Address::where('id', "=", $inbound_id)->first()->getAttributeValue('bairro');
        # Registrar uma nova origem requistiada
        UserOriginController::parallelStore(
            [
                'nome' => $userOriginName,
                'address_id' => $inbound_id,
                'requested_location_id' => $newRequestedLocation->getAttributeValue('id'),
                'user_id' => auth()->id(),
                'request_id' => $newRequest->getAttributeValue('id'),
            ]
        );
    }


    /**
     * Registra uma request completa, registrando um novo registro nas tabelas:
     * Requisição (Requests),
     * Local Requisitado (Requested_Locations),
     * Origem Usuário (User_Origins)
     *
     * @param string $outbound_id - nome que o usuário digitou no campo de ida onibus
     * @param string $inbound_id - nome que o usuário digitou no campo de volta onibus
     * @return void
     */
    private function registerNoOriginAndDestinyRequest(string $outbound_id, string $inbound_id)
    {
        date_default_timezone_set('America/Sao_Paulo');

        # Registrar uma nova requisição com base no cenário atual
        $newRequest = RequestController::parallelStore(
            [
                'user_id'     => auth()->id(),
                'feedback_id' => null,
                'data_hora'   => date('Y-m-d H:i:s'),
                'retorno'     => false,
            ]
        );

        # Salva o ID da nova requisição numa sessão para que possa ser acessada na rota (store) de feedback
        session()->put('request_id', $newRequest->getAttributeValue('id'));

        # Registrar um novo local requisitado
        $newRequestedLocation = RequestedLocationController::parallelStore(
            [
                'nome' => $outbound_id,
                'address_id' => null,
            ]
        );

        # Registrar uma nova origem requistiada
        UserOriginController::parallelStore(
            [
                'nome' => $inbound_id,
                'address_id' => null,
                'requested_location_id' => $newRequestedLocation->getAttributeValue('id'),
                'user_id' => auth()->id(),
                'request_id' => $newRequest->getAttributeValue('id'),
            ]
        );
    }


    /**
     * Método auxiliar para alterar o tipo de uma variável
     * se for uma string numérica ("123"), converte pra inteiro
     * caso contrário retorna a string mesmo
     *
     * @param mixed $data - Valor da variável que será alterada
     * @return int|string|null
     */
    private function returnIntOrString(mixed $data)
    {
        if ( is_null   ($data)) return null         ;
        if ( is_numeric($data)) return intval($data);
        if (!is_numeric($data)) return $data        ;
    }


    /**
     * Método responsável por mostrar as rotas que foram encontradas com os método acima.
     *
     * @param Request $request - Objeto do tipo Request que contém todas as informações que você precisa.
     * @return \Illuminate\Contracts\View\View
     */
    public function showRoutes(Request $request): \Illuminate\Contracts\View\View
    {
        # Pegando as rotas da sessão que foram enviadas pelos métodos acima
        $routesFound = $request->session()->get('routesFound');


        # Retornar a view das rotas com as rotas recebidas no parâmetro
        return view('User.routes', compact('routesFound'));
    }


    /**
     * Método responsável por mostrar os detalhes das rotas ao clicar nelas. Mostrando assim o itinerário
     * que aquela rota compoem.
     * TODO: Falta fazer
     * @param Request $request - Objeto do tipo Request que contém todas as informações que você precisa.
     */
    public function viewRouteDetails(int $id)
    {
        $route = Route::find($id);

        return response()->json([
            'status' => 200,
            'route' => $route,
        ]);
    }
}
