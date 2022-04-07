@extends('template/template')

@section('content')
    <div class="container col-5 mt-3 mb-3">
        <h1>Inserisci le immagini: </h1>
        <form action="{{Route('store.immagini', [$annuncio->id])}}" method="POST">
        @csrf
            <input type="file" name="nomefile">
            <br><br>
        <button class="btn btn-primary">Inserisci</button>
        </form>
    </div>
@endsection