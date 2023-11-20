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

    public function create(Request $request)
    {
        $addresses = Address::all();

        return view("User.create", compact('addresses'));
    }

    public function store(Request $request)
    {
        $user = $request->all();
        $user['password'] = bcrypt($request->password);
        $user = User::create($user);

        Auth::login($user);

        return redirect()->route('routes.showSearchForm');
    }

    public function alert()
    {
        return view('User.alert');
    }

}
