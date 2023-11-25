<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestedLocation;
use Illuminate\Support\Facades\DB;

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
        $tabelaUm = $this->getDestinos();


        return view("Company.dashboard2", compact('tabelaUm'));
    }

    public function getDestinos(
        /*bool $retorno = false,
        int $limite = 0,
        bool $asc = false,
        string $turno = "all"
        */
    )
    {
        $destinosRequisitados = RequestedLocation::select('nome',
            DB::raw('SUM(id) as total_requisicoes'),
            DB::raw('MAX(created_at) as horario_mais_requisitado'))
            ->groupBy('nome')
            ->get();

        return $destinosRequisitados;

    }


    public function getOrigens(
        bool $retorno = false,
        int $limite = 0,
        bool $asc = false,
        string $turno = "all"
    )
    {
        # código...
    }

    public function getOrigensRequisicoes(
        bool $retorno = false,
        int $limite = 0,
        bool $asc = false,
        string $turno = "all"
    )
    {
        # código...
    }

    public function getDestinoPorOrigem(
        bool $retorno = false,
        int $limite = 0,
        bool $asc = false,
        string $turno = "all"
    )
    {
        # código...
    }

    public function getRequisicoesRecentes(
        bool $retorno = false,
        int $limite = 0,
        bool $asc = false,
        string $turno = "all"
    )
    {
        # código...
    }
}
