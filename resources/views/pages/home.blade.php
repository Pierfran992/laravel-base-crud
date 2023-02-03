@extends('layouts.main-layout')

@section('content')
    <h1 class="text-danger">My Saints List</h1>

    {{-- link che indirizza l'utente alla pagina per creare un nuovo elemento da inserire nel database --}}
    <a class="btn btn-danger m-3" href="{{route('saint.create')}}">CREATE NEW SAINT</a>

    {{-- table in cui stampare i dati del database con un foreach --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Luogo Di Nascita</th>
                <th scope="col">Data Della Benedizione</th>
                <th scope="col">Numero Di Miracoli</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
                @foreach ($saints as $saint)
                    <tr>
                        <th scope="row" class="align-middle">
                            <a href="{{route('saint.show' , ['id' => $saint -> id])}}" class="text-danger">{{ $saint -> name }}</a>
                        </th>
                        <td class="align-middle">{{ $saint -> luogo_di_nascita }}</td>
                        <td class="align-middle">{{ $saint -> data_denedizione }}</td>
                        <td class="align-middle">{{ $saint -> numero_miracoli }}</td>
                        <td class="align-middle">
                            <a class="btn btn-danger " href="{{route('saint.delete', ['id' => $saint -> id])}}">DELETE</a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
@endsection