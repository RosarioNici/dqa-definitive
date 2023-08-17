@include('app')
<div class="container">
    @foreach ($nonconformitas as $nonconformita)
    <div class="card" style="border: 2px solid balck">
        <h1>{{ $nonconformita['Tipologia'] }}</h1>
        <p>{{ $nonconformita['Data'] }}</p>
        <h5>{{ $nonconformita['Descrizione'] }}</h5>
        <h3>{{ $nonconformita['VerificaSuccesso']}}</h3>
        <p>{{$nonconformita['AzioneCorrettiva']}}</p>

    </div>
    @endforeach
</div>
