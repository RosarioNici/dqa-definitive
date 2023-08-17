<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prodotto extends Model
{
    protected $table = 'Prodotto_table2';
    protected $fillable = [
        'Denominazione', 'CodiceArticolo', 'Lotto', 'Quantita',
        'UnitaMisura', 'Scadenza', 'DataArrivo', 'NumeroDDT', 'Tipologia', 'TemperaturaScarico',

    ];
}
