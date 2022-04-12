<?php

namespace App\Http\Controllers;

use App\Models\Annuncio;
use App\Models\Immagine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImmaginiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $annuncio = Annuncio::find($id);
        return view('immagine_annuncio', ['annuncio' => $annuncio]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomefile' => 'required',
        ]);

        $path = $request->file('nomefile')->store('public/immagini');
        $nome = explode("/", $path);

        $immagine = new Immagine;
        $immagine->nomefile = $nome[2];
        $immagine->annuncio_id = $request->id;
        $immagine->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dettagli = Annuncio::find($id);
        $immagine = Immagine::find($id);
        return view('edit_immagine', compact('immagine'), compact('dettagli') );
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
        $validated = $request->validate([
            'nomefile' => 'required',
        ]);
        
        $immagine = Immagine::find($id);

        $path = $request->file('nomefile')->store('public/immagini');
        $nome = explode("/", $path);
        
        $immagine->nomefile = $nome[2];
        $immagine->save();

        return redirect()->route('index');
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
