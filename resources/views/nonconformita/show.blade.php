@include('app')

        <div class="card" style="border: 2px solid balck">
            <h1>Dettagli Non Conformità</h1>

            <p>ID: {{ $nonconformita->id }}</p>
            <p>Data: {{ $nonconformita->Data }}</p>
            <p>Impianto: {{ $nonconformita->Impianto }}</p>
            <p>Tipologia: {{ $nonconformita->Tipologia }}</p>
            <p>Fase di Identificazione: {{ $nonconformita->FaseIdentificazione }}</p>
            <p>Prodotto: {{ $nonconformita->prodotto ? $nonconformita->prodotto->Denominazione : 'Nessun prodotto associato' }}</p>
        </div>
