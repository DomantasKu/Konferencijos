@extends('layouts.app')

@section('content')
    <h1>Visos konferencijos</h1>

    <a href="{{ route('conferences.create') }}">Pridėti konferenciją</a>

    <table>
        <thead>
            <tr>
                <th>Pavadinimas</th>
                <th>Data</th>
                <th>Vieta</th>
                <th>Veiksmai</th>
            </tr>
        </thead>
        <tbody>
            @foreach($conferences as $conference)
                <tr>
                    <td>{{ $conference->title }}</td>
                    <td>{{ $conference->date }}</td>
                    <td>{{ $conference->location }}</td>
                    <td>
                        <a href="{{ route('conferences.edit', $conference->id) }}">Redaguoti</a>
                        <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Ištrinti</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
