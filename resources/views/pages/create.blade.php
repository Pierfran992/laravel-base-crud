@extends('layouts.main-layout')

@section('content')

    <h1 class="text-danger">Create Saint</h1>

    {{-- do la possibilità all'utente di tornare alla lista senza creare un nuovo elemento --}}
    <a class="btn btn-danger ms_button m-3" href="/">Return to list</a>

    {{-- creo il form con cui andar a creare il nuovo elemento da inviare al database --}}
    <form method="POST" action="{{route('saint.store')}}">
        
        @csrf

        <div class="input-group my-2">
            <label for="name" class="input-group-text" id="basic-addon1">Nome</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="input-group my-2">
            <label for="luogo_di_nascita" class="input-group-text" id="basic-addon1">Luogo Di Nascita</label>
            <input type="text" class="form-control" name="luogo_di_nascita">
        </div>

        <div class="input-group my-2">
            <label for="data_denedizione" class="input-group-text" id="basic-addon1">Data Della Benedizione</label>
            <input type="date" class="form-control" name="data_denedizione">
        </div>

        <div class="input-group my-2">
            <label for="numero_miracoli" class="input-group-text" id="basic-addon1">Numero di benedizioni</label>
            <input type="number" class="form-control" name="numero_miracoli">
        </div>

        <button class="btn btn-danger my-2" type="submit">CREATE</button>
        
    </form>

@endsection