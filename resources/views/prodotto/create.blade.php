<h1>Nuovo Prodotto</h1>

     <form action="{{ route('prodotto.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Denominazione">Denominazione</label>
            <input type="text" name="Denominazione" class="form-control" required value="{{ old('Denominazione')}}">
        </div>
        <div class="form-group">
            <label for="CodiceArticolo">Codice Articolo</label>
            <input type="text" name="CodiceArticolo" class="form-control"  value="{{old('CodiceArticolo')}}">
        </div>
        <div class="form-group">
            <label for="Lotto">Lotto</label>
            <input type="text" name="Lotto" class="form-control" required value="{{old('Lotto')}}">
        </div>
        <div class="form-group">
            <label for="Quantita">Quantità</label>
            <input type="number" name="Quantita" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="UnitaMisura">Unità di Misura</label>
            <select name="UnitaMisura" class="form-control" required>
                <option value="Pezzi">Pezzi</option>
                <option value="KG">KG</option>
                <option value="Cartoni">Cartoni</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Scadenza">Scadenza</label>
            <input type="date" name="Scadenza" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="DataArrivo">Data di Arrivo</label>
            <input type="date" name="DataArrivo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="NumeroDDT">Numero DDT</label>
            <input type="text" name="NumeroDDT" class="form-control" required value="{{old('NumeroDDT')}}">
        </div>
        <div class="form-group">
            <label for="Tipologia">Tipologia</label>
            <select name="Tipologia" class="form-control" required >
                <option value="gelo">Gelo</option>
                <option value="fresco">Fresco</option>
                <option value="secco">Secco</option>
            </select>
        </div>
        <div class="form-group">
            <label for="TemperaturaScarico">Temperatura allo Scarico</label>
            <input type="text" name="TemperaturaScarico" class="form-control" value="{{old('TemperaturaScarico')}}">
        </div>
        <button type="submit" class="btn btn-primary">Inserisci Prodotto</button>
    </form>
