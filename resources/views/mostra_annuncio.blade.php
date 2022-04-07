@extends('template/template')

@section('content')
    <div class="container col-5 text-center mt-3 mb-3">
    <h1>{{$annuncio->titolo}}</h1>
    </div>

    <div class="container col-5">
        <div class="card text-center">
            <div class="card-body">
              <p class="card-text">{{$annuncio->descrizione}}</p>
              <p class="card-text">Prezzo: {{$annuncio->prezzo}}€</p>
              <p class="card-text">Stato: {{$annuncio->stato}}</p>
              <p class="card-text">Chilometraggio: {{$annuncio->chilometraggio}}</p>
              <p class="card-text">immatricolazione: {{$annuncio->immatricolazione}}</p>
              <p class="card-text">Potenza: {{$annuncio->potenza}}</p>
              <p class="card-text">Cilindrata: {{$annuncio->cilindrata}}</p>
              <p class="card-text">Colore: {{$annuncio->colore}}</p>
              <p class="card-text">Alimentazione: {{$annuncio->alimentazione}}</p>
              <p class="card-text">Carrozzeria: {{$annuncio->carrozzeria}}</p>
              <p class="card-text">Indirizzo: {{$annuncio->indirizzo}}</p>
              <p class="card-text">Numero di proprietari: {{$dettagli->proprietari}} </p>
              <p class="card-text">Cambio: {{$dettagli->cambio}} </p>
              <p class="card-text">Vernice: {{$dettagli->vernice}} </p>
              <p class="card-text">Rivestimenti: {{$dettagli->rivestimenti}} </p>
              <p class="card-text">Numero di posti: {{$dettagli->posti}} </p>
              <p class="card-text">Numero di porte: {{$dettagli->porte}} </p>
              <p class="card-text">Consumi: {{$dettagli->consumi}} </p>
              <p class="card-text">Emissioni: {{$dettagli->emissioni}} </p>
              <p class="card-text">Equipaggiamento: {{$dettagli->equipaggiamento}} </p>
            </div>
            <div class="card-footer">
                <p>Inserito da {{$annuncio->user->name}}</p>
                <p>Inserito il {{$annuncio->immatricolazione}}</p>
            </div>
    </div>
@endsection