@extends('layouts.main-layout')

@section('content')
    <h1 class="text-danger">My Saints List</h1>

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
                        <th scope="row">
                            <a href="/saint/{{ $saint -> id }}" class="text-danger">{{ $saint['name'] }}</a>
                        </th>
                        <td>{{ $saint['luogo_di_nascita'] }}</td>
                        <td>{{ $saint['data_denedizione'] }}</td>
                        <td>{{ $saint['numero_miracoli'] }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
@endsection