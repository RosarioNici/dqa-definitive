<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;
use App\Models\nonconformita;
use App\Models\prodotto;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = [
            'prodotti' => Prodotto::all(),
            'nonConformita' => NonConformita::all(),
        ];
        return view('welcome', $data);
    }
}
