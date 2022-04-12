@extends('template/template')

@section('content')
    <div class="container col-5 text-center">
        <h1>Modifica l'immagine</h1>
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
        <form action="{{Route('update.immagini', $dettagli->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
                <input type="file" name="nomefile">
                <br><br>
                <input type="submit" name="aggiungi" class="btn btn-primary"/>
            </form>
    </div>
    
@endsection