<?php

namespace App\Http\Controllers;

// Models importadas
use App\Models\UserOrigin;
use App\Models\RequestedLocation;

// Charts importados
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

        // Gráficos
        $chart = new TopDestinosChart;
        $chart->labels([
            'Um', 'Dois', 'Tres',
        ]);
        $chart->dataset('graficoUm', 'pie', [1,2,3]);

        $chartDois = new TopOrigensChart;
        $chartDois->labels([
            'Um', 'Dois', 'Tres',
        ]);
        $chartDois->dataset('graficoDois', 'pie', [1,2,3]);

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

        return view("Company.dashboard2", //Retorna a view
        compact('tabelaUm', 'tabelaDois', 'tabelaTreis', 'tabelaQuatro',  //Retorna os dados das tabelas
        'chart', 'chartDois', 'chartTreis', 'chartQuatro')); //Retorna os graficos
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

    public function getDestinoPorOrigem()
    {
        # código...
    }
}
