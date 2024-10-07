@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Conferences</h1>
    <h2>Domantas Kuzinas (PIT-22)</h2>

    <!-- Display Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($conferences->isEmpty())
        <p>There are currently no conferences planned.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($conferences as $conference)
                    <tr>
                        <td>{{ $conference->title }}</td>
                        <td>{{ $conference->description }}</td>
                        <td>{{ \Carbon\Carbon::parse($conference->date)->format('d-m-Y') }}</td>
                        <td>{{ $conference->location }}</td>
                        <td>
                            <a href="{{ route('conferences.show', $conference->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('conferences.edit', $conference->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                            <a href="{{ route('conferences.showRegistrationForm', $conference->id) }}" class="btn btn-success">Join</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <!-- Create New Conference Button -->
    <div class="mt-4">
        <a href="{{ route('conferences.create') }}" class="btn btn-primary">Create a New Conference</a>
    </div>
</div>
@endsection
