<?php

namespace App\Http\Controllers;

use App\Models\Rota;
use App\Models\IdaOnibus;
use App\Models\Requisicao;
use App\Models\VoltaOnibus;
use Illuminate\Http\Request;
use App\Models\OrigemUsuario;
use App\Models\LocalRequisitado;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class SearchController extends Controller
{
    public function index()
    {
        # Pegar as origens dos ônibus
        $origensOnibus = VoltaOnibus::all();
        # Pegar os destinos dos ônibus
        $destinosOnibus = IdaOnibus::all();

        # Retornar a tela de busca com as origens e destions dos ônibus
        return view('Usuario.busca', compact('origensOnibus', 'destinosOnibus'));
    }

    public function search(Request $request)
    {

    }

    public function rotas(Request $request): \Illuminate\Contracts\View\View
    {
        $rotasEncontradas = $request->session()->get('rotasEncontradas');

        # Retornar a view das rotas com as rotas recebidas no parâmetro
        return view ('Usuario.rotas', compact('rotasEncontradas'));
    }

    public function getItinerario(Request $request)
    {
        # Fazer uma busca do itinerário que contém a rota que o usuário requisitou
        # Abrir o popup de itinerário listando as rotas seguindo o layout no figma
    }

    public function feedback(): \Illuminate\Contracts\View\View
    {
        # Retornar a view de feedback
        return view('Usuario.feedback');
    }

    public function storeFeedback(Request $request)
    {
        # Pegar os dados vindos do formulário de feedback
        # Validar os dados
        # Se não forem válidos
            # Retornar para o feedback com uma mensagem de "feedback" kk
        # Se forem válidos
            # Cadastrar um novo feedback
            # Enviar usuário para a tela de busca de rotas com uma mensagem de "feedback" kk
        var_dump($request->all());
    }
}
