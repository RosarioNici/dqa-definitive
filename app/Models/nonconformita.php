<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nonconformita extends Model
{
    //
    protected $table = 'nonconformita';
    protected $fillable = [
        'Data', 'Impianto', 'Tipologia', 'FaseIdentificazione', 'Prodotto', 'Quantita',
        'Lotto', 'Scadenza', 'Fornitore', 'NumeroDDT', 'Interna', 'Stato', 'Ugenza',
        'AnalisiCause', 'CorrezioneEffettuata', 'AzioneCorrettiva', 'VerificaSuccesso',
        'VerificatoDa', 'Utente',
    ];
}
