<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphHandlerController extends Controller
{

    /**
     * Método responsável por retornar a tela de Dashboard das empresas.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        return view("Empresa.painelControle");
    }

    public function getDestinos(
        bool $retorno = false,
        int $limite = 0,
        bool $asc = false,
        string $turno = "all"
    )
    {
        # código...
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
