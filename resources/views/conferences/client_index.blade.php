@extends('layouts.app')

@section('content')
    <h1>Planuojamos konferencijos</h1>

    @if($conferences->isEmpty())
        <p>Šiuo metu nėra planuojamų konferencijų.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Pavadinimas</th>
                    <th>Data</th>
                    <th>Vieta</th>
                    <th>Registracija</th>
                </tr>
            </thead>
            <tbody>
                @foreach($conferences as $conference)
                    <tr>
                        <td>{{ $conference->title }}</td>
                        <td>{{ $conference->date }}</td>
                        <td>{{ $conference->location }}</td>
                        <td>
                            <form action="{{ route('conferences.register', $conference->id) }}" method="POST">
                                @csrf
                                <button type="submit">Užsiregistruoti</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
