@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Inserisci una nuova non conformità</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('nonconformita.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="Data">Data</label>
                                <input type="date" class="form-control" id="Data" name="Data" required>
                            </div>
                            <div class="form-group">
                                <label for="Impianto">Impianto</label>
                                <select class="form-control" id="Impianto" name="Impianto" required>
                                    <option value="1">Impianto A</option>
                                    <option value="2">Impianto B</option>
                                    <!-- Aggiungi altre opzioni in base alle tue esigenze -->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Tipologia">Tipologia</label>
                                <select class="form-control" id="Tipologia" name="Tipologia" required>
                                    <option value="prodotto">Prodotto</option>
                                    <option value="processo">Processo</option>
                                </select>
                            </div>
                            <!-- Aggiungi altri campi del form in base alle tue esigenze -->
                            <button type="submit" class="btn btn-primary">Inserisci</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
