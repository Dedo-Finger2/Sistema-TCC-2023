<?php

namespace App\Http\Controllers;

// Models importadas

use App\Models\UserOrigin;
use Illuminate\Http\Request;
use App\Charts\TopOrigensChart;

// Charts importados

use App\Charts\TopDestinosChart;
use App\Models\RequestedLocation;
use Illuminate\Support\Facades\DB;


use App\Models\Request as Requests;
use function Laravel\Prompts\select;
use App\Charts\TopRequisicoesPorTurno;
use PhpParser\Node\Expr\AssignOp\Coalesce;
use App\Charts\TopDestinosOrigemRequisicoes;

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
        $graficoUm = new TopDestinosChart;

        $graficoDois = new TopOrigensChart;

        $graficoTreis = new TopDestinosOrigemRequisicoes;

        $graficoQuatro = new TopRequisicoesPorTurno;

        return view("Company.dashboard2",
        compact('tabelaUm', 'tabelaDois', 'tabelaTreis', 'tabelaQuatro', 'graficoUm', 'graficoDois', 'graficoTreis', 'graficoQuatro'));
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

    public static function getTop5Destinos()
    {
        $top5Destinos = RequestedLocation::select(
            'requested_locations.nome as nome_destino',
            DB::raw('COUNT(requested_locations.nome) as total_requisicoes'),
        )
        ->orderBy(DB::raw('COUNT(requested_locations.nome)'), 'desc', 'limit', '=', 5)
        ->groupBy('requested_locations.nome')
        ->take(5)
        ->get()
        ->toArray();

        return $top5Destinos;
    }

    public static function getTop5Origens()
    {
        $top5Origens = UserOrigin::select(
            'user_origins.nome as nome_origem',
            DB::raw('COUNT(user_origins.nome) as total_requisicoes'),
        )
        ->orderBy( DB::raw('COUNT(user_origins.nome)'), 'desc', 'limit', '=', 5) // Ordena pela data mais recente
        ->groupBy('user_origins.nome')
        ->take(5)
        ->get()
        ->toArray();

        return $top5Origens;
    }
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
        ->get()
        ->toArray();

        return $destinosOrigemRequisicoes;
    }

    public static function getRequisicoesPorTurno()
    {
        $requisicoesPorTurno = Requests::select(
        DB::raw('COUNT(id) as total_requisicoes'))
        ->selectRaw("CASE
                        WHEN EXTRACT(HOUR FROM data_hora) < 12 THEN 'manhã'
                        WHEN EXTRACT(HOUR FROM data_hora) < 18 THEN 'tarde'
                        ELSE 'noite'
                    END as periodo_do_dia")
        ->groupBy('periodo_do_dia')
        ->take(3)
        ->get()
        ->toArray();

        return $requisicoesPorTurno;
    }
}

