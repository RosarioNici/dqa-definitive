
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Riepilogo Documenti</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Formato di File</th>
                    <th>Tipologia</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($documenti as $documenti)
                    <tr>
                        <td>{{ $documenti->id }}</td>
                        <td><a href="{{ route('documenti.show', $documenti->id) }}">{{ $documenti->nome }}</a></td>
                        <td>{{ $documenti->formato_file }}</td>
                        <td>{{ $documenti->tipologia }}</td>
                        <td>
                            <a href="{{ route('documenti.show', $documenti->id) }}" class="btn btn-primary">Dettagli</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
