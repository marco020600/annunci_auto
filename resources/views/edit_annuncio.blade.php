@extends('template/template')

@section('content')
    <div class="container col-5 text-center">
        <h1>Modifica annuncio</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>

    <div class="container col-5">
        <form method="POST" action="{{Route('update.annuncio', $annuncio->id)}}">
            @csrf
            <label for="stato" class="fw-normal fs-5 me-2">Stato:</label>
            <input type="checkbox" name="stato" value="nuovo"> Nuovo
            <input type="checkbox" name="stato" value="usato"> Usato
            <br><br>
            <label for="titolo" class="fw-normal fs-5">Inserisci il titolo:</label>
            <input type="text" class="form-control" value="{{$annuncio->titolo}}" name="titolo" placeholder="Inserisci il titolo">
            <br>
            <label for="prezzo" class="fw-normal fs-5">Inserisci il prezzo:</label>
            <input type="number" class="form-control" value="{{$annuncio->prezzo}}" name="prezzo" placeholder="Inserisci il prezzo">
            <br>
            <label for="chilometraggio" class="fw-normal fs-5">Inserisci il chilometraggio:</label>
            <input type="number" class="form-control" value="{{$annuncio->chilometraggio}}" name="chilometraggio" placeholder="Inserisci il chilometraggio">
            <br>
            <label for="immatricolazione" value="{{$annuncio->immatricolazione}}" class="fw-normal fs-5">Inserisci la data di immatricolazione:</label>
            <input type="date" class="form-control" name="immatricolazione">
            <br>
            <label for="potenza" class="fw-normal fs-5">Inserisci la potenza:</label>
            <input type="number" class="form-control" value="{{$annuncio->potenza}}" name="potenza" placeholder="Inserisci la potenza">
            <br>
            <label for="cilindrata" class="fw-normal fs-5">Inserisci la cilindrata:</label>
            <input type="text" class="form-control" value="{{$annuncio->cilindrata}}" name="cilindrata" placeholder="Inserisci la cilindrata">
            <br>
            <label for="colore" class="fw-normal fs-5">Inserisci il colore:</label>
            <input type="text" class="form-control" value="{{$annuncio->colore}}" name="colore" placeholder="Inserisci il colore">
            <br>
            <label for="alimentazione" class="fw-normal fs-5">Inserisci l'alimentazione:</label>
            <input type="text" class="form-control" value="{{$annuncio->alimentazione}}" name="alimentazione" placeholder="Inserisci l'alimentazione">
            <br>
            <label for="carrozzeria" class="fw-normal fs-5">Inserisci la carrozzeria:</label>
            <input type="text" class="form-control" value="{{$annuncio->carrozzeria}}" name="carrozzeria" placeholder="Inserisci la carrozzeria">
            <br>
            <label for="descrizione" class="fw-normal fs-5">Inserisci la descrizione:</label>
            <input type="text" class="form-control" value="{{$annuncio->descrizione}}" name="descrizione" placeholder="Inserisci la descrizione">
            <br>
            <label for="indirizzo" class="fw-normal fs-5">Inserisci l'indirizzo:</label>
            <input type="text" class="form-control" value="{{$annuncio->indirizzo}}" name="indirizzo" placeholder="Inserisci l'indirizzo">
            <br>
            <label for="marca" class="fw-normal fs-5">Seleziona la marca</label>
            <select name="marca" id="marca">
                @foreach ($marche as $marca)
                    <option value="{{$marca->id}}" name="marca">{{$marca->nome}}</option>
                @endforeach
            </select>
            <br><br>
            <label for="modello_id" class="fw-normal fs-5">Seleziona il modello:</label>
            <select name="modello_id" id="modello">
                @foreach ($modelli as $modello)
                    <option value="{{$modello->id}}" name="modello">{{$modello->nome}}</option>
                @endforeach
            </select>
            <br><br>
            <label for="regione" class="fw-normal fs-5 dynamic">Seleziona la regione:</label>
            <select name="regione" id="regione">
              
            </select>
            <br><br>
            <label for="comune_id" class="fw-normal fs-5">Seleziona il comune:</label>
            <select name="comune_id" id="comune">
                @foreach ($comuni as $comune)
                    <option value="{{$comune->id}}" name="comune">{{$comune->comune}}</option>
                @endforeach
            </select>
            <br><br>
            <button type="submit" class="btn btn-primary">Modifica</button>
            </form>

    </div>
@endsection