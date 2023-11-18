<?php

namespace App\Http\Controllers;

use App\Models\Rota;
use App\Models\IdaOnibus;
use App\Models\VoltaOnibus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RotaController extends Controller
{
    public function showSearchForm()
    {
        # Pegar as origens dos ônibus
        $origensOnibus = VoltaOnibus::all();
        # Pegar os destinos dos ônibus
        $destinosOnibus = IdaOnibus::all();

        # Retornar a tela de busca com as origens e destions dos ônibus
        return view('Usuario.busca', compact('origensOnibus', 'destinosOnibus'));
    }

    public function searchRoutes(Request $request)
    {
        # Coletar o ID da origem requisitada pelo usuário
        $origemRequisitada = $request->origemRequisitado;
        # Coletar o ID do destino requisitado pelo usuário
        $destinoRequisitado = $request->destinoRequisitado;

        # Ativar permissão de usar o group by em colunas que não usam funções como SUM e COUNT
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))");

        # Coletar os IDs das voltasOnibus que possuem o endereço de origem requisitado pelo usuário
        $voltasOnibus = VoltaOnibus::where('id_endereco', $origemRequisitada)
        ->get()
        ->pluck('id_volta_onibus');

        # Coletar os IDs das idasOnibus que possuem o endereço de destino requisitado pelo usuário
        $idasOnibus = IdaOnibus::where('id_endereco', $destinoRequisitado)
            ->get()
            ->pluck('id_ida_onibus');

        # Coletar as rotas que possuem algum ID de volta e ida Onibus coletada acima
        # Agrupar a query pela volta e ida onibus para eliminar duplicadas
        $rotasEncontradas = Rota::whereIn('id_volta_onibus', $voltasOnibus)
            ->whereIn('id_ida_onibus', $idasOnibus)
            ->groupBy('id_volta_onibus')
            ->groupBy('id_ida_onibus')
            ->get();

        # Cadastrar nova requisição
        
        # Cadastrar nova origem usuario
        # Cadastrar novo local requisitado

        // echo "Origem: $origemRequisitada";
        // var_dump($voltasOnibus);
        // echo "<br>Destino: $destinoRequisitado";
        // var_dump($idasOnibus);

        // foreach ($rotasEncontradas as $rota) {
        //     echo $rota->id_rota . "<br>";
        // }
        // exit();
        return redirect()->route('route.rotas')->with('rotasEncontradas', $rotasEncontradas);
    }

    public function showRoutes(Request $request)
    {
        $rotasEncontradas = $request->session()->get('rotasEncontradas');

        # Retornar a view das rotas com as rotas recebidas no parâmetro
        return view ('Usuario.rotas', compact('rotasEncontradas'));
    }

    public function viewRouteDetails(Request $request)
    {
        # code...
    }
}
