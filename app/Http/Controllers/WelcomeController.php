<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;
use App\Models\nonconformita;

class WelcomeController extends Controller
{
    //

    public function index()
    {
        $nonconformitas = nonconformita::all();
        $data = [
            'nonconformitas' => $nonconformitas,
        ];
        return view('welcome', $data);
    }
}
