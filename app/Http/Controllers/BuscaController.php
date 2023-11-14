<?php

namespace App\Http\Controllers;

use App\Models\IdaOnibus;
use App\Models\VoltaOnibus;
use Illuminate\Http\Request;

class BuscaController extends Controller
{
    public function index()
    {
        $origensOnibus = VoltaOnibus::all();
        $destinosOnibus = IdaOnibus::all();
        return view('Usuario.busca', compact('origensOnibus', 'destinosOnibus'));
    }
}
