@include('navbar.nav')
<h1>Hello word</h1>
    <div class="container">
        <h1>Inserisci Nuova Non Conformità</h1>
        <form action="{{ route('ncprova.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Data">Data</label>
                <input type="date" name="Data" class="form-control" value="{{ old('Data') }}">
            </div>
            <div class="form-group">
                <label for="Tipologia">Tipologia</label>
                <select name="Tipologia" class="form-control">
                    <option value="prodotto">Prodotto</option>
                    <option value="processo">Processo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="FaseIdentificazione">Fase Identificazione</label>
                <select name="FaseIdentificazione" class="form-control">
                    <option value="ricevimento merci">Ricevimento Merci</option>
                    <option value="produzione">Produzione</option>
                    <option value="distribuzione">Distribuzione</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Quantita">Quantità</label>
                <input type="text" name="Quantita" class="form-control" value="{{ old('Quantita') }}">
            </div>
            <div class="form-group">
                <label for="Lotto">Lotto</label>
                <input type="text" name="Lotto" class="form-control" value="{{ old('Lotto') }}">
            </div>
            <div class="form-group">
                <label for="Scadenza">Scadenza</label>
                <input type="date" name="Scadenza" class="form-control" value="{{ old('Scadenza') }}">
            </div>
            <div class="form-group">
                <label for="NumeroDDT">Numero DDT</label>
                <input type="text" name="NumeroDDT" class="form-control" value="{{ old('NumeroDDT') }}">
            </div>
            <div class="form-group">
                <label for="Interna">Interna</label>
                <select name="Interna" class="form-control">
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Stato">Stato</label>
                <select name="Stato" class="form-control">
                    <option value="Lavorazione">Lavorazione</option>
                    <option value="Analizzata">Analizzata</option>
                    <option value="Chiusa">Chiusa</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Ugenza">Ugenza</label>
                <select name="Ugenza" class="form-control">
                    <option value="1 NC Grave">1 NC Grave</option>
                    <option value="2 NC semplice">2 NC Semplice</option>
                    <option value="3 Osservazione">3 Osservazione</option>
                </select>
            </div>
            <div class="form-group">
                <label for="AnalisiCause">Analisi Cause</label>
                <textarea name="AnalisiCause" class="form-control">{{ old('AnalisiCause') }}</textarea>
            </div>
            <div class="form-group">
                <label for="CorrezioneEffettuata">Correzione Effettuata</label>
                <textarea name="CorrezioneEffettuata" class="form-control">{{ old('CorrezioneEffettuata') }}</textarea>
            </div>
            <div class="form-group">
                <label for="AzioneCorrettiva">Azione Correttiva</label>
                <textarea name="AzioneCorrettiva" class="form-control">{{ old('AzioneCorrettiva') }}</textarea>
            </div>
            <div class="form-group">
                <label for="VerificaSuccesso">Verifica Successo</label>
                <select name="VerificaSuccesso" class="form-control">
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Inserisci</button>
        </form>
    </div>
