<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Endereco;
use App\Models\Itinerario;
use App\Models\Onibus;
use App\Models\Usuario;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function getUsers()
    {
        $enderecos = Endereco::all();
        $onibus = Onibus::all();
        $itinerarios = Itinerario::all();

        return view('user', [
            'enderecos' => $enderecos,
            'onibuses' => $onibus,
            'itinerarios' => $itinerarios,
        ]);
    }
}
