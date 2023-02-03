@extends('layouts.main-layout')

@section('content')
    <h1 class="text-danger">Saint Selected</h1>

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
                    <tr>
                        <th scope="row">{{ $saint -> name }}</th>
                        <td>{{ $saint -> luogo_di_nascita }}</td>
                        <td>{{ $saint -> data_denedizione }}</td>
                        <td>{{ $saint -> numero_miracoli }}</td>
                    </tr>
        </tbody>
    </table>

    <div class="btn btn-danger ms_button">
        <a href="/">Return to list</a>
    </div>
@endsection