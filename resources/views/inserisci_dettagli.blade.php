@extends('template/template')

@section('content')

    <div class="container col-5">
    <h1>Inserisci dettagli</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{Route('store.dettagli', [$annuncio->id])}}">
            @csrf
            <label for="proprietari">Inserisci il numero di proprietari</label>
            <input type="number" class="form-control" name="proprietari">
            <br>
            <input type="text" class="form-control" name="cambio" placeholder="Inserisci il cambio">
            <br>
            <input type="text" class="form-control" name="vernice" placeholder="Inserisci la vernice">
            <br>
            <input type="text" class="form-control" name="rivestimenti" placeholder="Inserisci i rivestimenti">
            <br>
            <label for="post">Inserisci il numero di posti</label>
            <input type="number" class="form-control" name="posti">
            <br>
            <label for="porte">Inserisci il numero di porte</label>
            <input type="number" class="form-control" name="porte">
            <br>
            <input type="text" class="form-control" name="consumi" placeholder="Inserisci i consumi">
            <br>
            <input type="text" class="form-control" name="emissioni" placeholder="Inserisci le emissioni">
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
            <button class="btn btn-primary">Inserisci</button>


        </form>
    </div>

@endsection