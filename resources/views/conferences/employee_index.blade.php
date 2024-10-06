@extends('layouts.app')

@section('content')
    <h1>Konferencijų sąrašas</h1>

    <table>
        <thead>
            <tr>
                <th>Pavadinimas</th>
                <th>Data</th>
                <th>Vieta</th>
                <th>Registruotų klientų skaičius</th>
            </tr>
        </thead>
        <tbody>
            @foreach($conferences as $conference)
                <tr>
                    <td>{{ $conference->title }}</td>
                    <td>{{ $conference->date }}</td>
                    <td>{{ $conference->location }}</td>
                    <td>{{ $conference->clients()->count() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
