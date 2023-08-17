<?php

namespace App\Http\Controllers;

use App\Models\prodotto;

use Illuminate\Http\Request;

class ProdottoController extends Controller
{
    public function index()
    {
        $prodotti = Prodotto::all();
        return view('prodotto.index', compact('prodotti'));
    }

    public function create()
    {
        return view('prodotto.create');
    }

    public function store(Request $request)
    {
        // Validazione dei dati
        $validatedData = $request->validate([
            'Denominazione' => 'required',
            'CodiceArticolo' => 'nullable',
            'Lotto' => 'required',
            'Quantita' => 'required|numeric',
            'UnitaMisura' => 'required|in:Pezzi,KG,Cartoni',
            'Scadenza' => 'required|date',
            'DataArrivo' => 'required|date',
            'NumeroDDT' => 'required',
            'Tipologia' => 'required|in:gelo,fresco,secco',
            'TemperaturaScarico' => 'nullable',
            'Fornitore' => 'nullable',
        ]);

        Prodotto::create($validatedData);

        return redirect()->route('prodotto.index')->with('success', 'Prodotto inserito con successo.');
    }

    public function show($id)
    {
        $prodotto = Prodotto::findOrFail($id);
        return view('prodotto.show', compact('prodotto'));
    }

    public function edit($id)
    {
        $prodotto = Prodotto::findOrFail($id);
        return view('prodotto.edit', compact('prodotto'));
    }

    public function update(Request $request, $id)
    {
        // Validazione dei dati
        $validatedData = $request->validate([
            // Includi tutte le regole di validazione per i campi
        ]);

        $prodotto = Prodotto::findOrFail($id);
        $prodotto->update($validatedData);

        return redirect()->route('prodotto.index')->with('success', 'Prodotto aggiornato con successo.');
    }

    public function destroy($id)
    {
        $prodotto = Prodotto::findOrFail($id);
        $prodotto->delete();

        return redirect()->route('prodotto.index')->with('success', 'Prodotto eliminato con successo.');
    }
}
