<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class documenti extends Model
{
    protected $table = 'documenti';

    protected $fillable = [
        'formato_file',
        'nome',
        'tipologia',
        'validato',
    ];
}
