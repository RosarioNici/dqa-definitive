@include('App')
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dettagli Documento</h1>

        <p><strong>ID:</strong> {{ $documento->id }}</p>
        <p><strong>Formato di File:</strong> {{ $documento->formato_file }}</p>
        <p><strong>Nome:</strong> {{ $documento->nome }}</p>
        <p><strong>Validato:</strong> {{ $documento->validato ? 'Si' : 'No' }}</p>
        <p><strong>Tipologia:</strong> {{ $documento->tipologia }}</p>
        <p><strong>Documento:</strong> <a href="{{ asset('storage/' . $documento->documento) }}" target="_blank">Visualizza Documento</a></p>
    </div>
@endsection
