<?php

namespace App\Http\Controllers;

use App\Models\IdaOnibus;
use App\Models\VoltaOnibus;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $origensOnibus = VoltaOnibus::all();
        $destinosOnibus = IdaOnibus::all();

        return view('Usuario.busca', compact('origensOnibus', 'destinosOnibus'));
    }

    public function search(Request $request) // array
    {
        var_dump($request->all());
    }

    public function rotas(array $rotas = []): \Illuminate\Contracts\View\View
    {
        return view ('Usuario.rotas');
    }

    public function getItinerario(Request $request)
    {
        # código...
    }

    public function feedback(): \Illuminate\Contracts\View\View
    {
        return view('Usuario.feedback');
    }

    public function storeFeedback(Request $request)
    {
        var_dump($request->all());
    }
}
