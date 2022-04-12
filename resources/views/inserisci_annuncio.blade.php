@extends('template/template')

@section('content')
    <div class="container col-5">
    <h1 class="fw-normal">Inserisci un annuncio</h1>
    </div>

    <div class="container col-5">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form method="POST" action={{Route('store.annunci')}}>
        @csrf
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
        <label for="immatricolazione" class="fw-normal fs-5">Inserisci la data di immatricolazione:</label>
        <input type="date" class="form-control" name="immatricolazione">
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
        <button type="submit" class="btn btn-primary">Inserisci</button>
        </form>
    </div>
@endsection

