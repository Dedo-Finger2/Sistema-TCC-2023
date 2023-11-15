<?php

namespace App\Http\Controllers;

use App\Models\Rota;
use App\Models\IdaOnibus;
use App\Models\Requisicao;
use App\Models\VoltaOnibus;
use Illuminate\Http\Request;
use App\Models\OrigemUsuario;
use App\Models\LocalRequisitado;
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
        $rotasEncontradas = Rota::where('id_volta_onibus', $origemRequisitada)
            ->where('id_ida_onibus', $destinoRequisitado)
            ->with('idaOnibus')
            ->get();
        # Se retornou alguma rota
        if (count($rotasEncontradas) != 0) {
            # Cadastrar uma nova requisição com "retorno_requisicao" sendo true
            $requisicao = new Requisicao;
            $requisicao->id_usuario = 1;
            $requisicao->data_hora = date('Y-m-d H:i');
            $requisicao->retorno_requisicao = true;
            $requisicao->save();

            # Cadastrar um novo registro em OrigemUsuario cadastrando o ID da origem
            $origemUsuario = new OrigemUsuario;
            $origemUsuario->id_usuario = 1;
            $origemUsuario->id_local_requisitado = $destinoRequisitado;
            $origemUsuario->id_requisicao = $requisicao->id_requisicao;
            $origemUsuario->id_endereco = $origemRequisitada;
            $origemUsuario->nome = null;
            $origemUsuario->save();

            # Cadastrar um novo registro em LocalRequisitado cadastrando o ID do destino
            $localRequisitado = new LocalRequisitado;
            $localRequisitado->id_endereco = $destinoRequisitado;
            $localRequisitado->nome = null;
            $localRequisitado->save();

            # Retornar a view de rotas com o array de rotas que foram retornadas
            return redirect()->route('search.rotas')->with('rotasEncontradas', $rotasEncontradas);
        }
        else {
            var_dump([$origemRequisitada, $destinoRequisitado]);
            var_dump($rotasEncontradas);
            # Se não retornou nada
                # Cadastrar uma nova requisição com "retorno_requisicao" sendo false
                # Cadastrar um novo registro em OrigemUsuario
                    # Cadastrar o nome da origem digitada pelo usuário caso ela não exista no banco
                    # Cadastrar o ID da origem selecionada caso ela exista no banco
                # Cadastrar um novo registro em LocalRequisitado cadastrando o ID do destino
                    # Cadastrar o nome do destino digitado pelo usuário caso ele não exista no banco
                    # Cadastrar o ID do destino selecionado caso ele exista no banco
                # Redirecionar o usuário para tela de busca com uma mensagem de feedback
        }
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
