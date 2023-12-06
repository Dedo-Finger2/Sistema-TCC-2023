<?php

namespace App\Http\Controllers;

// Models importadas

use App\Models\Feedback;
use App\Models\User;
use App\Models\UserOrigin;
use App\Charts\TopOrigensChart;

// Charts importados

use App\Charts\TopDestinosChart;
use App\Models\RequestedLocation;
use App\Charts\TopRequisicoesPorTurno;
use App\Charts\TopDestinosOrigemRequisicoes;
use App\Charts\TopRequisicoesPorAno;


use function Laravel\Prompts\select;
use App\Models\Request as Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Coalesce;

class DashboardController extends Controller
{
    /**
     * Método responsável por retornar a tela de Dashboard das empresas.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function tabelas(): \Illuminate\Contracts\View\View
    {
        // DADOS DAS TABELAS

        $tabelaUm = $this->getDestinosComRetorno(); // completo
        $tabelaDois = $this->getDestinosSemRetorno(); // completo
        $tabelaTreis = $this->getOrigensSemRetorno(); // completo
        $tabelaQuatro = $this->getRequisicoesRecentes(); // completo
        $tabelaFeedbacks = $this->getFeedbacks();


        return view("Company.dashboardTabelas", compact('tabelaUm', 'tabelaDois', 'tabelaTreis', 'tabelaQuatro', 'tabelaFeedbacks'));
    }

    public function graficos(): \Illuminate\Contracts\View\View
    {
        // Gráficos
        $graficoUm = new TopDestinosChart;
        $graficoDois = new TopOrigensChart;
        $graficoTreis = new TopDestinosOrigemRequisicoes;
        $graficoQuatro = new TopRequisicoesPorTurno;
        $graficoCinco = new TopRequisicoesPorAno;

        // Outros dados
        $totalRequisicoes = $this->getAllRequests();
        $porcentagemFeedbackPositivo = $this->getPercentPositiveFeedbacks();
        $porcentagemLocaisSemRetorno = $this->getPercentNoReturnRequestedLocations();
        $usuariosRegistrados = $this->getTotalUsersRegistered();

        return view("Company/dashboardGraficos", compact(
            'graficoUm',
            'graficoDois',
            'graficoTreis',
            'graficoQuatro',
            'graficoCinco',
            'totalRequisicoes',
            'porcentagemFeedbackPositivo',
            'porcentagemLocaisSemRetorno',
            'usuariosRegistrados',
        ));
    }

    // Info extra
    private function getAllRequests()
    {
        $requestes = Requests::all();

        return count($requestes);
    }


    private function getPercentPositiveFeedbacks()
    {
        $positiveFeedbacks = Feedback::where('feedback', 1)->get();
        $negativeFeedbacks = Feedback::where('feedback', 0)->get();

        (float)$total = (float)count($positiveFeedbacks) + (float)count($negativeFeedbacks);

        (float)$percentPositive = ((float)count($positiveFeedbacks) / (float)$total) * 100;
        (float)$percentNegative = ((float)count($negativeFeedbacks) / (float)$total) * 100;

        return number_format($percentPositive,2);
    }


    private function getPercentNoReturnRequestedLocations()
    {
        $returnRequestedLocationsWithoutReturn = RequestedLocation::where('address_id', null)->get();
        $returnRequestedLocationsWithReturn = RequestedLocation::where('address_id', "!=",null)->get();

        (float)$total = (float)count($returnRequestedLocationsWithoutReturn) + (float)count($returnRequestedLocationsWithReturn);

        (float)$percentNoReturnRequested = ((float)count($returnRequestedLocationsWithoutReturn) / (float)$total) * 100;
        (float)$percentWithReturnRequested = ((float)count($returnRequestedLocationsWithReturn) / (float)$total) * 100;

        return number_format($percentNoReturnRequested, 2);
    }


    private function getTotalUsersRegistered()
    {
        $users = User::all();

        return count($users);
    }
    // Fim info etra


    // Gráficos

    public static function getRequisicoesPorAno()
    {
        $requisicoesPorAno = Requests::select(
            DB::raw('COUNT(id) as total_requisicoes, YEAR(data_hora) as ano_requisicao')
        )
            ->groupBy('ano_requisicao')
            ->orderBy('ano_requisicao', 'desc')
            ->take(3)
            ->get()
            ->toArray();

        return $requisicoesPorAno;
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
            ->groupBy('user_origins.nome')
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

    public function getFeedbacks()
    {
        $feedbacks = Feedback::select(
            'comentario',
            'data',
            'feedback'
        )
            ->orderBy('data', 'desc')
            ->get();

        return $feedbacks;
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
            ->orderBy(DB::raw('COUNT(user_origins.nome)'), 'desc', 'limit', '=', 5) // Ordena pela data mais recente
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
            'user_origins.nome as nome_origem',
            'requested_locations.nome as nome_destino',
            DB::raw('COUNT(requested_locations.nome) as total_requisicoes'),
        )
            ->join('requested_locations', 'user_origins.requested_location_id', '=', 'requested_locations.id')
            ->orderBy(DB::raw('COUNT(requested_locations.nome)'), 'desc')
            ->groupBy('user_origins.nome', 'requested_locations.nome')
            ->take(5)
            ->get()
            ->toArray();

        return $destinosOrigemRequisicoes;
    }

    public static function getRequisicoesPorTurno()
    {
        $requisicoesPorTurno = Requests::select(
            DB::raw('COUNT(id) as total_requisicoes')
        )
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

