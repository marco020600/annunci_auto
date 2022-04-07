@extends('template.template')

@section('content')
    <div class="container col-5 mt-3 mb-3 text-center">
    <h2>Qui puoi vedere tutti gli annunci</h2>
    </div>

    <div class="container col-5">
    @foreach ($annunci as $annuncio)
    <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">{{$annuncio->titolo}}</h5>
          <p class="card-text">{{$annuncio->descrizione}}</p>
          <p class="card-text">{{$annuncio->prezzo}}€</p>
          <a href="{{Route('show.annuncio', [$annuncio->id])}}" class="btn btn-primary">Scopri di più</a>
        </div>
        <div class="card-footer">
            <p>Inserito da {{$annuncio->user->name}}</p>
            <p>Inserito il {{$annuncio->immatricolazione}}</p>
        </div>
      </div>
        
    @endforeach
    </div>

@endsection