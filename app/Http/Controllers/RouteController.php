<?php

namespace App\Http\Controllers;

use App\Models\BusInbound;
use App\Models\BusOutbound;
use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    public function showSearchForm()
    {
        $busOutbounds = BusOutbound::with('address')->get();
        $busInbounds = BusInbound::with('address')->get();

        return view('User.search', compact('busOutbounds', 'busInbounds'));
    }

    public function searchRoutes(Request $request)
    {
        # Coletar o ID da origem requisitada pelo usuário
        $requestedBusOutbound = intval($request->busOutbound);
        # Coletar o ID do destino requisitado pelo usuário
        $requestedBusInbound = intval($request->busInbound);

        # Ativar permissão de usar o group by em colunas que não usam funções como SUM e COUNT
        DB::statement("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))");

        # Coletar os IDs das voltasOnibus que possuem o endereço de origem requisitado pelo usuário
        $busInbounds = BusInbound::where('address_id', $requestedBusInbound)
            ->get()
            ->pluck('id');

        # Coletar os IDs das idasOnibus que possuem o endereço de destino requisitado pelo usuário
        $busOutbounds = BusOutbound::where('address_id', $requestedBusOutbound)
            ->get()
            ->pluck('id');

        # Coletar as rotas que possuem algum ID de volta e ida Onibus coletada acima
        # Agrupar a query pela volta e ida onibus para eliminar duplicadas
        $routesFound = Route::whereIn('bus_inbound_id', $busInbounds)
            ->whereIn('bus_outbound_id', $busOutbounds)
            ->groupBy('bus_inbound_id')
            ->groupBy('bus_outbound_id')
            ->get();

        // echo "Origem: $requestedBusInbound";
        // var_dump($busInbounds);
        // echo "<br>Destino: $requestedBusOutbound";
        // var_dump($busOutbounds);

        // foreach ($routesFound as $route) {
        //     echo $route->id . "<br>";
        // }
        // exit();
        return redirect()->route('routes.showRoutes')->with('routesFound', $routesFound);
    }

    public function showRoutes(Request $request)
    {
        $routesFound = $request->session()->get('routesFound');

        # Retornar a view das rotas com as rotas recebidas no parâmetro
        return view('User.routes', compact('routesFound'));
    }

    public function viewRouteDetails(Request $request)
    {
        # ...
    }
}
