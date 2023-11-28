<?php

namespace App\Http\Controllers;

use App\Charts\TesteChart;
use Illuminate\Http\Request;
use App\Models\RequestedLocation;
use App\Models\UserOrigin;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Coalesce;

use function Laravel\Prompts\select;

class GraphHandlerController extends Controller
{

    /**
     * Método responsável por retornar a tela de Dashboard das empresas.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        $tabelaUm = $this->getDestinosComRetorno(); // completo
        $tabelaDois = $this->getDestinosSemRetorno(); // completo
        $tabelaTreis = $this->getOrigensSemRetorno(); // completo
        $tabelaQuatro = $this->getRequisicoesRecentes(); // completo

<<<<<<< HEAD
        return view("Company.dashboard2", compact('tabelaUm', 'tabelaDois', 'tabelaTreis'));
=======
        // Gráfico de teste
        $chart = new TesteChart;
        $chart->labels([
            'Um', 'Dois', 'Tres',
        ]);
        $chart->dataset('Dataset1', 'pie', [1,2,3]);

        return view("Company.dashboard2", compact('tabelaUm', 'tabelaDois', 'tabelaTreis', 'tabelaQuatro', 'chart'));
>>>>>>> b04ad7e5890f4a46cad52263c4b81828ba7ca553
    }

    public function getDestinosComRetorno()
    {
        $destinosRequisitados = RequestedLocation::select(
            'requested_locations.nome as nome',
            DB::raw('COUNT(requested_locations.nome) as total_requisicoes'),
<<<<<<< HEAD
            DB::raw('MAX(requested_locations.created_at) as horario_mais_requisitado')
=======
            DB::raw('MAX(requested_locations.created_at) as horario_mais_recente')
>>>>>>> b04ad7e5890f4a46cad52263c4b81828ba7ca553
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
<<<<<<< HEAD
            DB::raw('MAX(requested_locations.created_at) as horario_mais_requisitado')
=======
            DB::raw('MAX(requested_locations.created_at) as horario_mais_recente')
>>>>>>> b04ad7e5890f4a46cad52263c4b81828ba7ca553
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
<<<<<<< HEAD
            DB::raw('MAX(user_origins.created_at) as horario_mais_requisitado')
        )
            ->join('requests', 'user_origins.request_id', '=', 'requests.id')
            ->groupBy('user_origins.nome')
            ->where('requests.retorno_requisicao', 0)
            ->get();
=======
            DB::raw('MAX(requests.data_hora) horario_mais_recente')
        )
        ->join('requests', 'user_origins.request_id', '=', 'requests.id')
        ->where('requests.retorno_requisicao', true)
        ->groupBy('user_origins.nome' )
        ->get();

>>>>>>> b04ad7e5890f4a46cad52263c4b81828ba7ca553

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
