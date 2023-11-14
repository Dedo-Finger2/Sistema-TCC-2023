<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
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
