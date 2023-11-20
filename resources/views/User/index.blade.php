{{-- @include('navbar') --}}
<h1>Users</h1>

@foreach ($users as $user)
    <li>{{ $user->email }}</li>
@endforeach

<h1>Feedabck</h1>

@foreach ($feedbacks as $feedback)
    <li>{{ $feedback->id }} - {{ $feedback->user->id }} - {{ $feedback->user->nome }}</li>
    <ul>
        <li>{{ $feedback->request->id }} - {{ $feedback->request->data_hora }}</li>
    </ul>
@endforeach

<h1>Address</h1>

@foreach ($addresses as $address)
    <li>{{ $address->bairro }}</li>
    <ul>
        @foreach ($address->users as $user)
            <li> {{ $user->nome }} </li>
        @endforeach
    </ul>
@endforeach

<h1>Company</h1>

@foreach ($companies as $company)
    <li>{{ $company->cnpj }}</li>
    <ul>
        @foreach ($company->buses as $bus)
            <li>{{ $bus->id }}</li>
        @endforeach
    </ul>
@endforeach

<h1>Itinerary</h1>

@foreach ($itineraries as $itinerary)
    <li>{{ $itinerary->codigo }} </li>
    <ul>
        @foreach ($itinerary->routes as $route)
            <li>{{ $route->bus_inbound_id }}</li>
        @endforeach
        @foreach ($itinerary->buses as $bus)
            <li>{{ $bus->numeracao }}</li>
        @endforeach
    </ul>
@endforeach

<h1>Route</h1>

@foreach ($routes as $route)
    <li>{{ $route->id }}</li>
@endforeach

<h1>BusOutbound</h1>

@foreach ($busOutbounds as $busoutbound)
    <li> {{ $busoutbound->id }} - {{ $busoutbound->address->bairro }}</li>
@endforeach

<h1>BusInbound</h1>

@foreach ($busInbounds as $businbound)
    <li> {{ $businbound->id }} - {{ $businbound->address->bairro }}</li>
@endforeach

<h1>RequestedLocations</h1>

@foreach ($requestedLocations as $requestedLocation)
    <li> {{ $requestedLocation->id }}</li>
    <ul>
        @foreach ($requestedLocation->addresses as $address)
            <li> {{ $address->id }}</li>
        @endforeach
        @foreach ($requestedLocation->requests as $request)
            <li> {{ $request->retorno_requisicao }}</li>
        @endforeach
    </ul>
@endforeach

<h1>Requests</h1>

@foreach ($requests as $request)
    <li> {{ $request->id }} - {{ $request->data_hora }}</li>
    <li> {{ $request->feedback->id }} - {{ $request->feedback->comentario }}</li>
    <ul>
        <li> {{ $request->feedback->user->id }} - {{ $request->feedback->user->nome }}</li>
    </ul>
@endforeach

<h1>Bus</h1>
<p>NÃO FUNCIONA</p>
{{-- @foreach ($buses as $bus)
    <li> {{ $bus->id }} - {{ $bus->company->cnpj }} </li>
    <ul>
        @foreach ($bus->routes as $route)
            <li> {{ $route->id }} </li>
        @endforeach
    </ul>
@endforeach --}}

<a href="{{ route('logout') }}">Logout</a>
