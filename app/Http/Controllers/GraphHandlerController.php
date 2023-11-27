<?php

namespace App\Http\Controllers;

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
        $tabelaUm = $this->getDestinosComRetorno(); // correto
        $tabelaDois = $this->getDestinosSemRetorno(); // correto
        $tabelaTreis = $this->getOrigensSemRetorno(); // incompleto
        $tabelaQuatro = $this->getRequisicoesRecentes(); // incompleto

        return view("Company.dashboard2", compact('tabelaUm', 'tabelaDois', 'tabelaTreis'));
    }

    public function getDestinosComRetorno(
        /*bool $retorno = false,
        int $limite = 0,
        bool $asc = false,
        string $turno = "all"
        */)
    {
        $destinosRequisitados = RequestedLocation::select(
            'requested_locations.nome as nome',
            DB::raw('COUNT(requested_locations.nome) as total_requisicoes'),
            DB::raw('MAX(requested_locations.created_at) as horario_mais_requisitado')
        )
            ->join('user_origins', 'requested_locations.id', '=', 'user_origins.requested_location_id')
            ->join('requests', 'user_origins.request_id', '=', 'requests.id')
            ->groupBy('requested_locations.nome')
            ->where('requests.retorno_requisicao', 1)
            ->get();

        return $destinosRequisitados;
    }

    public function getDestinosSemRetorno()
    {
        $destinosRequisitados = RequestedLocation::select(
            'requested_locations.nome as nome',
            DB::raw('COUNT(requested_locations.nome) as total_requisicoes'),
            DB::raw('MAX(requested_locations.created_at) as horario_mais_requisitado')
        )
            ->join('user_origins', 'requested_locations.id', '=', 'user_origins.requested_location_id')
            ->join('requests', 'user_origins.request_id', '=', 'requests.id')
            ->groupBy('requested_locations.nome')
            ->where('requests.retorno_requisicao', 0)
            ->get();

        return $destinosRequisitados;
    }


    public function getOrigensSemRetorno(
        /*bool $retorno = false,
        int $limite = 0,
        bool $asc = false,
        string $turno = "all"
        */)
    {
        $origensRequisitadas = UserOrigin::select(
            'user_origins.nome as nome',
            DB::raw('COUNT(user_origins.nome) as total_requisicoes'),
            DB::raw('MAX(user_origins.created_at) as horario_mais_requisitado')
        )
            ->join('requests', 'user_origins.request_id', '=', 'requests.id')
            ->groupBy('user_origins.nome')
            ->where('requests.retorno_requisicao', 0)
            ->get();

            return $origensRequisitadas;
    }

    public function getRequisicoesRecentes(
        bool $retorno = false,
        int $limite = 0,
        bool $asc = false,
        string $turno = "all"
    ) {
        $destinosRequisitados = RequestedLocation::select(
            'requested_locations.nome as nomeDestino',
            'user_origins.nome as nomeOrigem',
            'requests.retorno_requisicao as status',
            DB::raw('MAX(requests.data_hora) as requisicaoRecente')
        )
        ->join('user_origins', 'requested_locations.id', '=', 'user_origins.requested_location_id')
        ->join('requests', 'user_origins.request_id', '=', 'requests.id')
        ->groupBy('requested_locations.nome', 'user_origins.nome', 'requests.retorno_requisicao')
        ->orderBy('requisicaoRecente', 'desc') // Ordena pela data mais recente
        ->get();

    }

    public function getOrigensRequisicoes(
        bool $retorno = false,
        int $limite = 0,
        bool $asc = false,
        string $turno = "all"
    ) {
        # código...
    }

    public function getDestinoPorOrigem(
        bool $retorno = false,
        int $limite = 0,
        bool $asc = false,
        string $turno = "all"
    ) {
        # código...
    }
}
