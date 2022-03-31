<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annuncio;
use Illuminate\Support\Facades\Auth;

class AnnunciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inserisci_annuncio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $annuncio = new Annuncio;
        $annuncio->stato = $request->stato;
        $annuncio->titolo = $request->titolo;
        $annuncio->prezzo = $request->prezzo;
        $annuncio->chilometraggio = $request->chilometraggio;
        $annuncio->immatricolazione = $request->immatricolazione;
        $annuncio->potenza = $request->potenza;
        $annuncio->cilindrata = $request->cilindrata;
        $annuncio->colore = $request->colore;
        $annuncio->alimentazione = $request->alimentazione;
        $annuncio->carrozzeria = $request->carrozzeria;
        $annuncio->descrizione = $request->descrizione;
        $annuncio->indirizzo = $request->indirizzo; 
        $annuncio->user_id = Auth::id();
        $annuncio->modello_id = $request->modello_id;
        $annuncio->comune_id = $request->comune_id;
        $annuncio->save();
        return redirect()->route('annunci.store');
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
