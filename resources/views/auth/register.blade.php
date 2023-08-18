@extends('layouts.app')
@include('App')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipologia" class="col-md-4 col-form-label text-md-right">{{ __('Tipologia') }}</label>

                            <div class="col-md-6">
                                <select id="tipologia" class="form-control @error('tipologia') is-invalid @enderror" name="tipologia" required>
                                    <option value="Quartier Generale">Quartier Generale</option>
                                    <option value="Secondario">Secondario</option>
                                    <option value="Terziario">Terziario</option>
                                </select>

                                @error('tipologia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="RagioneSociale" class="col-md-4 col-form-label text-md-right">Ragione Sociale</label>
                            <input type="text" name="RagioneSociale" id="RagioneSociale" required>
                        </div>
                        <div class="form-group row">
                            <label for="Piva" class="col-md-4 col-form-label text-md-right">Partita IVA</label>
                            <input type="text" name="Piva" id="Piva" required maxlength="12">
                        </div>
                        <div class="form-group row">
                            <label for="Paese" class="col-md-4 col-form-label text-md-right">Paese</label>
                            <select name="Paese" id="Paese">
                                <option value="Italia">Italia</option>
                                <option value="Altra nazione">Altra nazione</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="Via" class="col-md-4 col-form-label text-md-right">Via</label>
                            <input type="text" name="Via" id="Via" required>
                        </div>
                        <div class="form-group row">
                            <label for="Citta">Città</label>
                            <input type="text" name="Citta" id="Citta" required>
                        </div>
                        <div class="form-group row">
                            <label for="Provincia">Provincia</label>
                            <input type="text" name="Provincia" id="Provincia" required>
                        </div>
                        <div class="form-group row">
                            <label for="CAP">CAP</label>
                            <input type="text" name="CAP" id="CAP">
                        </div>
                        <div class="form-group row">
                            <label for="RappresentanteLegale">Rappresentante Legale</label>
                            <input type="text" name="RappresentanteLegale" id="RappresentanteLegale" required>
                        </div>
                        <div class="form-group row">
                            <label for="Telefono">Telefono</label>
                            <input type="tel" name="Telefono" id="Telefono" required>
                        </div>
                        <div class="form-group row">
                            <label for="Settore">Settore</label>
                            <select name="Settore" id="Settore">
                                <option value="Horeca">Horeca</option>
                                <option value="Distribuzione">Distribuzione</option>
                                <option value="Logistica">Logistica</option>
                                <option value="Produzione">Produzione</option>
                                <option value="Agricoltura">Agricoltura</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="Descrizione">Descrizione</label>
                            <textarea name="Descrizione" id="Descrizione" rows="4"></textarea>
                        </div>
                        <div class="form-group row">
                            <label for="ResponsabileQualita">Responsabile Qualità</label>
                            <input type="text" name="ResponsabileQualita" id="ResponsabileQualita" required>
                        </div>
                        <div class="form-group row">
                            <label for="SitoWeb">Sito Web</label>
                            <input type="url" name="SitoWeb" id="SitoWeb">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
