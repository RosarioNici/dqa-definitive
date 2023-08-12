@include('navbar.nav')
<h1>Hello word</h1>


<div class="container">
    @foreach ($nonconformitas as $nonconformita)
    <div class="card" style="border: 2px solid balck">
        <h1>{{ $nonconformita['ID'] }}</h1>
        <p>{{ $nonconformita['Data'] }}</p>
        <h5>{{ $nonconformita['Descrizione'] }}</h5>
    </div>
    @endforeach

</div>

