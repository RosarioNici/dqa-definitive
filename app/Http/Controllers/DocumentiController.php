<?php

namespace App\Http\Controllers;

use App\Models\documenti;

use Illuminate\Http\Request;

class DocumentiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documenti = documenti::all();
        return view('documenti.index', compact('documenti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documenti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'formato_file' => 'required|in:PDF,Word,XML,TXT',
            'nome' => 'required|string',
            'validato' => 'boolean',
            'tipologia' => 'required|string',
            'documento' => 'required|file|max:8000', // Max 8 MB
        ]);

        $documento = new documenti();
        $documento->formato_file = $validatedData['formato_file'];
        $documento->nome = $validatedData['nome'];
        $documento->validato = isset($validatedData['validato']);
        $documento->tipologia = $validatedData['tipologia'];

        // Esegui l'upload del documento
        if ($request->hasFile('documento')) {
            $documentoPath = $request->file('documento')->store('documenti', 'public');
            $documento->documento = $documentoPath;
        }

        $documento->save();

        return redirect()->route('documenti.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $documento = documenti::findOrFail($id);
        return view('documenti.show', compact('documento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
