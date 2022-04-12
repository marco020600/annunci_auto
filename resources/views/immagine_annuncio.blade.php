@extends('template/template')

@section('content')
    <div class="container col-5 mt-3 mb-3">
        <h1>Inserisci le immagini: </h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{Route('store.immagini', [$annuncio->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
            <input type="file" name="nomefile">
            <br><br>
            <input type="submit" name="aggiungi" class="btn btn-primary"/>
        </form>
    </div>
@endsection