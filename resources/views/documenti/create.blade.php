@include('App')
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Caricamento Documento</h1>

        <form action="{{ route('documenti.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="formato_file">Formato di File:</label>
            <select name="formato_file" id="formato_file">
                <option value="PDF">PDF</option>
                <option value="Word">Word</option>
                <option value="XML">XML</option>
                <option value="TXT">TXT</option>
            </select>

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">

            <label for="validato">Validato:</label>
            <input type="checkbox" name="validato" id="validato">

            <label for="tipologia">Tipologia:</label>
            <input type="text" name="tipologia" id="tipologia">

            <label for="documento">Documento:</label>
            <input type="file" name="documento" id="documento">

            <button type="submit">Carica Documento</button>
        </form>
    </div>
    <div>
        <a href="/docuemnti/show">vidi docuemnti</a>
    </div>
@endsection
