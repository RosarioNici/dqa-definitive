
    <h1>Elenco Prodotti</h1>

    <a href="{{ route('prodotto.create') }}" class="btn btn-primary">Nuovo Prodotto</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Denominazione</th>
                <th>Codice Articolo</th>
                <th>Lotto</th>
                <th>Quantità</th>
                <th>Unità di Misura</th>
                <th>Scadenza</th>
                <th>Data di Arrivo</th>
                <th>Numero DDT</th>
                <th>Tipologia</th>
                <th>Temperatura allo Scarico</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prodotti as $prodotto)
                <tr>
                    <td>{{ $prodotto->id }}</td>
                    <td>{{ $prodotto->Denominazione }}</td>
                    <td>{{ $prodotto->CodiceArticolo }}</td>
                    <td>{{ $prodotto->Lotto }}</td>
                    <td>{{ $prodotto->Quantita }}</td>
                    <td>{{ $prodotto->UnitaMisura }}</td>
                    <td>{{ $prodotto->Scadenza }}</td>
                    <td>{{ $prodotto->DataArrivo }}</td>
                    <td>{{ $prodotto->NumeroDDT }}</td>
                    <td>{{ $prodotto->Tipologia }}</td>
                    <td>{{ $prodotto->TemperaturaScarico }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

