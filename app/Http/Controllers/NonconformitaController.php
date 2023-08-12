<?php

namespace App\Http\Controllers;

use App\Models\nonconformita;
use Illuminate\Http\Request;

class NonconformitaController extends Controller
{
    // Altri metodi del controller ...

    public function store(Request $request)
    {
        // Validazione dei dati inviati dal form
        $validatedData = $request->validate([
            'Data' => 'required|date',
            //'Impianto' => 'required|exists:altra_tabella,id', // Assicurarsi che esista nella tabella corretta
            'Tipologia' => 'required|in:prodotto,processo',
            // Aggiungi qui le regole di validazione per le altre colonne
        ]);

        // Creazione di una nuova istanza di NonConformita con i dati validati
        $nonConformita = NonConformita::create($validatedData);

        // Puoi aggiungere ulteriori operazioni qui, ad esempio un messaggio di conferma

        // Reindirizzamento a una pagina dopo l'inserimento
        return redirect()->route('ncprova.index');
    }
}
