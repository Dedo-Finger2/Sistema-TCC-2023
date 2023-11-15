<?php

namespace App\Http\Controllers;

use App\Models\IdaOnibus;
use App\Models\VoltaOnibus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        # Pegar os dados vindos da tela de busca (2 ID endereço, um pra origem e outro pra destino)
        $origemRequisitada = $request->all()['origemRequisitado'];
        $destinoRequisitado = $request->all()['destinoRequisitado'];
        # Fazer uma busca no banco de dados usando os IDs recebidos
        $rotasEncontradas = DB::table('rotas')
            ->where('id_volta_onibus', $origemRequisitada)
            ->where('id_ida_onibus', $destinoRequisitado)
            ->get();
        # Se retornou alguma rota
        if (count($rotasEncontradas) != 0) {
            # Cadastrar uma nova requisição com "retorno_requisicao" sendo true

            # Cadastrar um novo registro em OrigemUsuario cadastrando o ID da origem
            # Cadastrar um novo registro em LocalRequisitado cadastrando o ID do destino
            # Retornar a view de rotas com o array de rotas que foram retornadas
        }
        # Se não retornou nada
            # Cadastrar uma nova requisição com "retorno_requisicao" sendo false
            # Cadastrar um novo registro em OrigemUsuario
                # Cadastrar o nome da origem digitada pelo usuário caso ela não exista no banco
                # Cadastrar o ID da origem selecionada caso ela exista no banco
            # Cadastrar um novo registro em LocalRequisitado cadastrando o ID do destino
                # Cadastrar o nome do destino digitado pelo usuário caso ele não exista no banco
                # Cadastrar o ID do destino selecionado caso ele exista no banco
            # Redirecionar o usuário para tela de busca com uma mensagem de feedback
        var_dump([$origemRequisitada, $destinoRequisitado]);
        var_dump($rotasEncontradas);
    }

    public function rotas(array $rotas = []): \Illuminate\Contracts\View\View
    {
        # Retornar a view das rotas com as rotas recebidas no parâmetro
        return view ('Usuario.rotas');
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
