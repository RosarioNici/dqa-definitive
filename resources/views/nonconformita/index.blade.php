@include('app')

<h1>Elenco Prodotti</h1>

<a href="{{ route('nonconformita.create') }}" class="btn btn-primary">Nuova nonconformita</a>
<div class="container">
    @foreach ($nonconformitas as $nonconformita)
    <div class="card" style="border: 2px solid balck">
         <a href="nonconformita/{{$nonconformita->id}}"><h1>{{ $nonconformita['Tipologia'] }}</h1></a>
        <p>{{ $nonconformita['id']}}</p>
        <p>{{ $nonconformita['Data'] }}</p>
        <h5>{{ $nonconformita['Descrizione'] }}</h5> <span>{{ $nonconformita['Ugenza']}}</span>
        <h2> {{$nonconformita['prodotto_id']}}</h2>
        <h3>{{ $nonconformita['VerificaSuccesso']}}</h3>
        <p>{{$nonconformita['AzioneCorrettiva']}}</p>
    </div>
    @endforeach
</div>
