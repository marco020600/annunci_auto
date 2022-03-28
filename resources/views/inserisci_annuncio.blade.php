@extends('template/template')

@section('content')
    <div class="container col-5">
    <h1 class="fw-normal">Inserisci un annuncio</h1>
    </div>

    <div class="container col-5">
        <label for="stato" class="fw-normal fs-5 me-2">Stato:</label>
        <input type="checkbox" name="stato" value="nuovo">Nuovo
        <input type="checkbox" name="stato" value="usato"/> Usato
        <br><br>
        <input type="text" class="form-control" name="titolo" placeholder="Inserisci il titolo">
        <br>
        <input type="number" class="form-control" name="prezzo" placeholder="Inserisci il prezzo">
        <br>
        <input type="number" class="form-control" name="chilometraggio" placeholder="Inserisci il chilometraggio">
        <br>
        <label for="data" class="fw-normal fs-5">Inserisci la data di immatricolazione:</label>
        <input type="date" class="form-control" name="data">
        <br>
        <input type="number" class="form-control" name="potenza" placeholder="Inserisci la potenza">
        <br>
        <input type="text" class="form-control" name="cilindrata" placeholder="Inserisci la cilindrata">
        <br>
        <input type="text" class="form-control" name="colore" placeholder="Inserisci il colore">
        <br>
        <input type="text" class="form-control" name="alimentazione" placeholder="Inserisci l'alimentazione">
        <br>
        <input type="text" class="form-control" name="carrozzeria" placeholder="Inserisci la carrozzeria">
        <br>
        <input type="text" class="form-control" name="descrizione" placeholder="Inserisci la descrizione">
        <br>
        <input type="text" class="form-control" name="indirizzo" placeholder="Inserisci l'indirizzo">
        <br>
        <label for="modello" class="fw-normal fs-5">Scegli il modello:</label>
        <select name="modello"></select>
        <br><br>
        <label for="comune" class="fw-normal fs-5">Scegli il comune:</label>
        <select name="comune"></select>
        <br><br>
        <button type="submit" class="btn btn-primary">Inserisci</button>

    </div>
@endsection