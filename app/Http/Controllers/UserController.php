<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Bus;
use App\Models\BusInbound;
use App\Models\BusOutbound;
use App\Models\Company;
use App\Models\Feedback;
use App\Models\Itinerary;
use App\Models\Request as UserRequest;
use App\Models\RequestedLocation;
use App\Models\Route;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $feedbacks = Feedback::all();
        $addresses = Address::all();
        $companies = Company::all();
        $itineraries = Itinerary::all();
        $busOutbounds = BusOutbound::all();
        $busInbounds = BusInbound::all();
        $routes = Route::all();
        $requestedLocations = RequestedLocation::all();
        $buses = Bus::all();
        $requests = UserRequest::all();

        return view("User.index", compact("users", "feedbacks", "addresses", "companies", "itineraries", "busOutbounds", "routes", "requestedLocations", "buses", "busInbounds", "requests"));
    }


    /**
     * Método responsável por mostrar a tela de cadastro de novos usuários.
     *
     * @param Request $request - Objeto do tipo Request que contém todas as informações que você precisa.
     * @return \Illuminate\Contracts\View\View
     */
    public function create(Request $request): \Illuminate\Contracts\View\View
    {
        $addresses = Address::all();

        return view("User.create", compact('addresses'));
    }


    /**
     * Método responsável por persistir os dados do formulário de cadastro do banco de dados.
     *
     * @param Request $request - Objeto do tipo Request que contém todas as informações que você precisa.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = $request->all();
        $user['password'] = bcrypt($request->password);
        $user = User::create($user);

        Auth::login($user);

        return redirect()->route('routes.showSearchForm');
    }


    /**
     * Método responsável por mostrar a tela de alerta para o usuário antes
     * dele poder ir para a tela de busca de rotas.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function alert(): \Illuminate\Contracts\View\View
    {
        return view('User.alert');
    }

}
