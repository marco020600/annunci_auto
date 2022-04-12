@extends('template/template')

@section('content')
    <div class="container col-5 text-center">
        <h1>I miei annunci</h1>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titolo:</th>
            <th scope="col">Descrizione:</th>
            <th scope="col">Data di immatricolazione:</th>
            <th scope="col">Azioni:</th>
          </tr>
        </thead>
        @foreach ($annunci as $annuncio)
        <tbody>
          <tr>
            <th scope="row">{{$annuncio->titolo}}</th>
            <td>{{$annuncio->descrizione}}</td>
            <td>{{$annuncio->immatricolazione}}</td>
            <td><a href="{{Route('edit.annuncio', $annuncio->id)}}">Modifica</a>/<a href="{{Route('destroy.annuncio', $annuncio->id)}}">Elimina</a></td>
          </tr>
        </tbody>
        @endforeach
      </table>
        
@endsection