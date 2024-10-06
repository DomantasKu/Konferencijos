@extends('layouts.app') <!-- Įsitikinkite, kad turite šį failą -->

@section('content')
    <h1>Konferencijos</h1>

    @if($conferences->isEmpty())
        <p>Šiuo metu nėra jokių konferencijų.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Pavadinimas</th>
                    <th>Aprašymas</th>
                    <th>Data</th>
                    <th>Vieta</th>
                </tr>
            </thead>
            <tbody>
                @foreach($conferences as $conference)
                    <tr>
                        <td>{{ $conference->title }}</td>
                        <td>{{ $conference->description }}</td>
                        <td>{{ $conference->date }}</td>
                        <td>{{ $conference->location }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
