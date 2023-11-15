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

        # Cadastrar uma nova requisição com "retorno_requisicao" sendo true
        $requisicao = new Requisicao;
        $requisicao->id_usuario = 1; // TODO: Mudar isso depois para o id do usuário que está logado no sistema
        $requisicao->data_hora = date('Y-m-d H:i');

        # Cadastrar um novo registro em OrigemUsuario cadastrando o ID da origem
        $origemUsuario = new OrigemUsuario;
        $origemUsuario->id_usuario = 1; // TODO: Mudar isso depois para o id do usuário que está logado no sistema

        # Cadastrar um novo registro em LocalRequisitado cadastrando o ID do destino
        $localRequisitado = new LocalRequisitado;

        # Se retornou alguma rota
        if (count($rotasEncontradas) != 0) {

            $requisicao->retorno_requisicao = true;
            $requisicao->save();

            $origemUsuario->id_endereco = $origemRequisitada;
            $origemUsuario->id_requisicao = $requisicao->id_requisicao;
            $origemUsuario->id_local_requisitado = $destinoRequisitado;
            $origemUsuario->nome = null;
            $origemUsuario->save();

            $localRequisitado->id_endereco = $destinoRequisitado;
            $localRequisitado->nome = null;
            $localRequisitado->save();

            # Retornar a view de rotas com o array de rotas que foram retornadas
            return redirect()->route('search.rotas')->with('rotasEncontradas', $rotasEncontradas);
        }
        else {
            # Se não retornou nada
                # Cadastrar uma nova requisição com "retorno_requisicao" sendo false
                $requisicao->retorno_requisicao = false;
                $requisicao->save();

                if (!ctype_digit($destinoRequisitado) && !ctype_digit($origemRequisitada)) {
                    $localRequisitado->nome = $destinoRequisitado;
                    $localRequisitado->id_endereco = null;
                    $localRequisitado->save();

                    $origemUsuario->nome = $origemRequisitada;
                    $origemUsuario->id_requisicao = $requisicao->id_requisicao;
                    $origemUsuario->id_endereco = null;
                    $origemUsuario->id_local_requisitado = $localRequisitado->id_local_requisitado;
                    $origemUsuario->save();
                }

                # Cadastrar um novo registro em OrigemUsuario
                else if (!ctype_digit($origemRequisitada)) {
                    $localRequisitado->id_endereco = $destinoRequisitado;
                    $localRequisitado->nome = null;
                    $localRequisitado->save();

                    $origemUsuario->nome = $origemRequisitada;
                    $origemUsuario->id_requisicao = $requisicao->id_requisicao;
                    $origemUsuario->id_endereco = null;
                    $origemUsuario->id_local_requisitado = $localRequisitado->id_local_requisitado;
                    $origemUsuario->save();

                }

                else if (!ctype_digit($destinoRequisitado)) {
                    $localRequisitado->nome = $destinoRequisitado;
                    $localRequisitado->id_endereco = null;
                    $localRequisitado->save();

                    $origemUsuario->nome = null;
                    $origemUsuario->id_requisicao = $requisicao->id_requisicao;
                    $origemUsuario->id_endereco = $origemRequisitada;
                    $origemUsuario->id_local_requisitado = $localRequisitado->id_local_requisitado;
                    $origemUsuario->save();
                }

                else if (count($rotasEncontradas) <= 0) {
                    $localRequisitado->nome = null;
                    $localRequisitado->id_endereco = $destinoRequisitado;
                    $localRequisitado->save();

                    $origemUsuario->nome = null;
                    $origemUsuario->id_requisicao = $requisicao->id_requisicao;
                    $origemUsuario->id_endereco = $origemRequisitada;
                    $origemUsuario->id_local_requisitado = $localRequisitado->id_local_requisitado;
                    $origemUsuario->save();

                }

                return redirect()->route('search.index')->with('error', 'Nenhuma rota foi encontrada, sentimos muito.');
        }
    }

    public function rotas(Request $request): \Illuminate\Contracts\View\View
    {
        $rotasEncontradas = $request->session()->get('rotasEncontradas');
        $rotasEncontradas = Rota::paginate(10, $rotasEncontradas);

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
