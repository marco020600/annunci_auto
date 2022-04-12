@extends('template/template')

@section('content')
    <div class="container col-5 text-center">
    <h1>Modifica dettagli</h1>
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
        <form method="POST" action="{{Route('update.dettagli', [$dettagli->id])}}">
            @csrf
            <label for="proprietari">Inserisci il numero di proprietari</label>
            <input type="number" class="form-control" value="{{$dettagli->proprietari}}" name="proprietari">
            <br>
            <label for="proprietari">Inserisci il cambio</label>
            <input type="text" class="form-control" value="{{$dettagli->cambio}}" name="cambio" placeholder="Inserisci il cambio">
            <br>
            <label for="proprietari">Inserisci la vernice</label>
            <input type="text" class="form-control" value="{{$dettagli->vernice}}" name="vernice" placeholder="Inserisci la vernice">
            <br>
            <label for="proprietari">Inserisci i rivestimenti</label>
            <input type="text" class="form-control" value="{{$dettagli->rivestimenti}}" name="rivestimenti" placeholder="Inserisci i rivestimenti">
            <br>
            <label for="post">Inserisci il numero di posti</label>
            <input type="number" class="form-control" value="{{$dettagli->posti}}" name="posti">
            <br>
            <label for="porte">Inserisci il numero di porte</label>
            <input type="number" class="form-control" value="{{$dettagli->porte}}" name="porte">
            <br>
            <label for="proprietari">Inserisci i consumi</label>
            <input type="text" class="form-control" value="{{$dettagli->consumi}}" name="consumi" placeholder="Inserisci i consumi">
            <br>
            <label for="proprietari">Inserisci le emissioni</label>
            <input type="text" class="form-control" value="{{$dettagli->emissioni}}" name="emissioni" placeholder="Inserisci le emissioni">
            <br>
            <label for="equipaggiamento" class="fw-normal fs-5 me-2">Aggiungi equipaggiamento:</label>
            <br><br>
            <input type="checkbox" name="equipaggiamento" value="Alzacristalli elettrici"> Alzacristalli elettrici
            <input type="checkbox" name="equipaggiamento" value="Climatizzatore"/> Climatizzatore
            <input type="checkbox" name="equipaggiamento" value="Controllo automatico clima"/> Controllo automatico clima
            <input type="checkbox" name="equipaggiamento" value="Specchietti laterali elettrici"/> Specchietti laterali elettrici
            <input type="checkbox" name="equipaggiamento" value="Autoradio"/> Autoradio
            <input type="checkbox" name="equipaggiamento" value="Computer di bordo"/> Computer di bordo

            <br><br>
            <button class="btn btn-primary">Modifica</button>


        </form>
    </div>

@endsection