<?php

namespace App\Http\Controllers;

// Models importadas

use App\Charts\TopDestinosOrigemRequisicoes;
use App\Charts\TopRequisicoesRecentes;
use App\Models\UserOrigin;
use App\Models\RequestedLocation;

// Charts importados

use App\Charts\TopOrigensChart;
use App\Charts\TopDestinosChart;
use App\Charts\TopOrigensChart;
use App\Charts\TopRequisicoesPorBairro;
use App\Charts\TopRequisicoesRecentes;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;
use PhpParser\Node\Expr\AssignOp\Coalesce;

class GraphHandlerController extends Controller
{
    /**
     * Método responsável por retornar a tela de Dashboard das empresas.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        // DADOS DAS TABELAS

        $tabelaUm = $this->getDestinosComRetorno(); // completo
        $tabelaDois = $this->getDestinosSemRetorno(); // completo
        $tabelaTreis = $this->getOrigensSemRetorno(); // completo
        $tabelaQuatro = $this->getRequisicoesRecentes(); // completo

        // DADOS DOS  GRÁFICOS 1
        $graficoUm = $this->getTop5Destinos();
        $destinosProcurados = [];
        $totalBuscas = [];

        foreach ($graficoUm as $dadosGraficos1) {
            // Adicionando cada nome de destino ao array $destinosProcurados
            $destinosProcurados[] = $dadosGraficos1->nome_destino;

            // Adicionando cada total de buscas ao array $totalBuscas
            $totalBuscas[] = $dadosGraficos1->total_requisicoes;
        }

        // Gráfico 1
        $chart = new TopDestinosChart;
        $chart->labels($destinosProcurados);
        $chart->dataset('Buscas: ', 'pie', $totalBuscas);


        // DADOS DO GRAFICO 2
        $graficoDois = $this->getTop5Origens();
        $origensBuscadas = [];
        $totalBuscas = [];

        foreach ($graficoDois as $dadosGraficos2) {
            // Adicionando cada nome de destino ao array $destinosProcurados
            $origensBuscadas[] = $dadosGraficos2->nome_origem;

            // Adicionando cada total de buscas ao array $totalBuscas
            $totalBuscas[] = $dadosGraficos2->total_requisicoes;
        }

        // Grafico 2
        $chartDois = new TopOrigensChart;
        $chartDois->labels($origensBuscadas);
        $chartDois->dataset('Origem da busca: ', 'pie', $totalBuscas);


        $chartTreis = new TopRequisicoesRecentes;
        $chartTreis->labels([
            'Um', 'Dois', 'Tres',
        ]);
        $chartTreis->dataset('graficoTreis', 'line', [1,2,3]);

        $chartQuatro = new TopRequisicoesRecentes;
        $chartQuatro->labels([
            'Um', 'Dois', 'Tres',
        ]);
        $chartQuatro->dataset('graficoQuatro', 'bar', [1,2,3]);

        // Destinos -> Origem | Total requisições
        $destinoOrigemRequisicoes = new TopDestinosOrigemRequisicoes;

        return view("Company.dashboard2",
        compact('tabelaUm', 'tabelaDois', 'tabelaTreis', 'tabelaQuatro', 'chart', 'chartDois', 'chartTreis', 'chartQuatro', 'destinoOrigemRequisicoes'));
    }

    public function getDestinosComRetorno()
    {
        $destinosRequisitados = RequestedLocation::select(
            'requested_locations.nome as nome',
            DB::raw('COUNT(requested_locations.nome) as total_requisicoes'),
            DB::raw('MAX(requested_locations.created_at) as horario_mais_recente')
        )
            ->join('user_origins', 'requested_locations.id', '=', 'user_origins.requested_location_id')
            ->join('requests', 'user_origins.request_id', '=', 'requests.id')
            ->where('requests.retorno_requisicao', true)
            ->groupBy('requested_locations.nome')
            ->get();

        return $destinosRequisitados;
    }

    public function getDestinosSemRetorno()
    {
        $destinosRequisitados = RequestedLocation::select(
            'requested_locations.nome as nome',
            DB::raw('COUNT(requested_locations.nome) as total_requisicoes'),
            DB::raw('MAX(requested_locations.created_at) as horario_mais_recente')
        )
            ->join('user_origins', 'requested_locations.id', '=', 'user_origins.requested_location_id')
            ->join('requests', 'user_origins.request_id', '=', 'requests.id')
            ->where('requests.retorno_requisicao', false)
            ->groupBy('requested_locations.nome')
            ->get();

        return $destinosRequisitados;
    }

    public function getOrigensSemRetorno()
    {
        $origensRequisitadas = UserOrigin::select(
            'user_origins.nome as nome',
            DB::raw('COUNT(user_origins.nome) as total_requisicoes'),
            DB::raw('MAX(requests.data_hora) horario_mais_recente')
        )
        ->join('requests', 'user_origins.request_id', '=', 'requests.id')
        ->where('requests.retorno_requisicao', true)
        ->groupBy('user_origins.nome' )
        ->get();


            return $origensRequisitadas;
    }

    public function getRequisicoesRecentes()
    {
        $requisicoesRecentes = RequestedLocation::select(
            'requested_locations.nome as nomeDestino',
            'user_origins.nome as nomeOrigem',
            'requests.retorno_requisicao as status',
            DB::raw('MAX(requests.data_hora) as horario_mais_recente')
        )
        ->join('user_origins', 'requested_locations.id', '=', 'user_origins.requested_location_id')
        ->join('requests', 'user_origins.request_id', '=', 'requests.id')
        ->orderBy(DB::raw('MAX(requests.data_hora)'), 'desc') // Ordena pela data mais recente
        ->groupBy('requested_locations.nome', 'user_origins.nome', 'requests.retorno_requisicao')
        ->get();

        return $requisicoesRecentes;
    }

    public function getTop5Destinos()
    {
        $top5Destinos = RequestedLocation::select(
            'requested_locations.nome as nome_destino',
            DB::raw('COUNT(requested_locations.nome) as total_requisicoes'),
        )
        ->orderBy(DB::raw('COUNT(requested_locations.nome)'), 'desc', 'limit', '=', 5)
        ->groupBy('requested_locations.nome')
        ->take(5)
        ->get();

        return $top5Destinos;
    }

    public function getTop5Origens()
    {
        $top5Origens = UserOrigin::select(
            'user_origins.nome as nome_origem',
            DB::raw('COUNT(user_origins.nome) as total_requisicoes'),
        )
        ->orderBy( DB::raw('COUNT(user_origins.nome)'), 'desc', 'limit', '=', 5) // Ordena pela data mais recente
        ->groupBy('user_origins.nome')
        ->take(5)
        ->get();

        return $top5Origens;

    // Gráficos

    public static function getDestinoPorOrigem()
    {
        $destinosOrigemRequisicoes = UserOrigin::select(
            'user_origins.nome as nome_origem', 'requested_locations.nome as nome_destino',
            DB::raw('COUNT(requested_locations.nome) as total_requisicoes'),
        )
        ->join('requested_locations', 'user_origins.requested_location_id', '=', 'requested_locations.id')
        ->orderBy(DB::raw('COUNT(requested_locations.nome)'), 'desc')
        ->groupBy('user_origins.nome', 'requested_locations.nome' )
        ->take(5)
        ->get();

        $data = [];

        foreach ($destinosOrigemRequisicoes as $item) {
           $data[] = [
                'nome_origem' => $item->getAttributes()['nome_origem'],
                'nome_destino' => $item->getAttributes()['nome_destino'],
                'total_requisicoes' => $item->getAttributes()['total_requisicoes'],
           ];
        }

        return $data;
    }
}
