<?php

namespace App\Http\Controllers;

use App\Models\Annuncio;
use App\Models\Dettagli;
use Illuminate\Http\Request;

class DettagliController extends Controller
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
        return view('inserisci_dettagli', ['annuncio' => $annuncio]);
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
            'proprietari' => 'required',
            'cambio' => 'required',
            'vernice' => 'required',
            'rivestimenti' => 'required',
            'posti' => 'required',
            'porte' => 'required',
            'consumi' => 'required',
            'emissioni' => 'required',
            'equipaggiamento' => 'required'
        ]);

        $dettagli = new Dettagli;
        $dettagli->id = $request->id;
        $dettagli->proprietari = $request->proprietari;
        $dettagli->cambio = $request->cambio;
        $dettagli->vernice = $request->vernice;
        $dettagli->rivestimenti = $request->rivestimenti;
        $dettagli->posti = $request->posti;
        $dettagli->porte = $request->porte;
        $dettagli->consumi = $request->consumi;
        $dettagli->emissioni = $request->emissioni;
        $dettagli->equipaggiamento = $request->equipaggiamento;


        $dettagli->save();

        return redirect()->route('create.immagini', [$dettagli->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dettagli = Dettagli::findorfail($id);
        return view('mostra_annuncio', [$dettagli->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dettagli = Dettagli::find($id);
        return view('edit_dettagli', compact('dettagli'));
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
            'proprietari' => 'required',
            'cambio' => 'required',
            'vernice' => 'required',
            'rivestimenti' => 'required',
            'posti' => 'required',
            'porte' => 'required',
            'consumi' => 'required',
            'emissioni' => 'required',
            'equipaggiamento' => 'required'
        ]);
        
        $dettagli = Dettagli::find($id);
        $dettagli->proprietari = $request->proprietari;
        $dettagli->cambio = $request->cambio;
        $dettagli->vernice = $request->vernice;
        $dettagli->rivestimenti = $request->rivestimenti;
        $dettagli->posti = $request->posti;
        $dettagli->porte = $request->porte;
        $dettagli->consumi = $request->consumi;
        $dettagli->emissioni = $request->emissioni;
        $dettagli->equipaggiamento = $request->equipaggiamento;
        $dettagli->save();
        return redirect()->route('edit.immagine', [$dettagli->id]);
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
