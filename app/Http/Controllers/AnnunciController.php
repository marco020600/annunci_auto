<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annuncio;
use App\Models\Comune;
use App\Models\Dettagli;
use App\Models\Immagine;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Marca;
use App\Models\Modello;
use Illuminate\Support\Facades\DB;
use function Ramsey\Uuid\v1;

class AnnunciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annunci = User::find(Auth::id())->annunci;
        return view('miei_annunci', ['annunci' => $annunci]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marche = Marca::all();
        $modelli = Modello::all();
        $comuni = Comune::all();
        return view('inserisci_annuncio', ['marche' => $marche, 'modelli' => $modelli, 'comuni' => $comuni]);
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
            'stato' => 'required',
            'titolo' => 'required',
            'prezzo' => 'required',
            'chilometraggio' => 'required',
            'immatricolazione' => 'required',
            'potenza' => 'required',
            'cilindrata' => 'required',
            'colore' => 'required',
            'alimentazione' => 'required',
            'carrozzeria' => 'required',
            'descrizione' => 'required',
            'indirizzo' => 'required'
        ]);

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
        return redirect()->route('create.dettagli', [$annuncio->id]);
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
        $annuncio = Annuncio::findOrFail($id);
        return view('mostra_annuncio', compact('annuncio'), compact('dettagli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annuncio = Annuncio::find($id);
        $marche = Marca::all();
        $modelli = Modello::all();
        $comuni = Comune::all();
        return view('edit_annuncio', compact('annuncio'), ['marche' => $marche, 'modelli' => $modelli, 'comuni' => $comuni]);
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
            'stato' => 'required',
            'titolo' => 'required',
            'prezzo' => 'required',
            'chilometraggio' => 'required',
            'immatricolazione' => 'required',
            'potenza' => 'required',
            'cilindrata' => 'required',
            'colore' => 'required',
            'alimentazione' => 'required',
            'carrozzeria' => 'required',
            'descrizione' => 'required',
            'indirizzo' => 'required'
        ]);
        
        $annuncio = Annuncio::find($id);
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
        return redirect()->route('edit.dettagli', [$annuncio->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annuncio = Annuncio::find($id);
        $annuncio->delete();
        return redirect()->route('index', [$annuncio->id]);
    }
}
