<ul>
    <h1>Enderecos</h1>
    @foreach ($enderecos as $endereco)
        <li>{{ $endereco->bairro }} - {{ $endereco->usuario->email }}</li>
    @endforeach
    <h1>Onibus</h1>
    @foreach ($onibuses as $onibus)
        <li>Numeração: {{ $onibus->numeracao }}</li>
    @endforeach
    <h1>Itinerario</h1>
    @foreach ($itinerarios as $itinerario)
        <li>{{ $itinerario->onibus->numeracao }}</li>
    @endforeach
</ul>
