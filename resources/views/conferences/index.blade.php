@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Conferences</h1>
    
    <a href="{{ route('conferences.create') }}" class="btn btn-success mb-3">Create New Conference</a>
    
    @if($conferences->isEmpty())
        <div class="alert alert-warning" role="alert">
            There are currently no conferences planned.
        </div>
    @else
        <div class="list-group">
            @foreach($conferences as $conference)
                <div class="list-group-item">
                    <h3>{{ $conference->title }}</h3>
                    <p>{{ $conference->description }}</p>
                    <p><strong>Date:</strong> {{ $conference->date }}</p>
                    <p><strong>Location:</strong> {{ $conference->location }}</p>

                    <!-- View button to see conference details -->
                    <a href="{{ route('conferences.show', $conference->id) }}" class="btn btn-info">View</a>
                    
                    <!-- Register button to register for the conference -->
                    <button type="button" class="btn btn-primary">
                        <a href="{{ route('conferences.showRegistrationForm', $conference->id) }}" style="color: white; text-decoration: none;">
                            Register
                        </a>
                    </button>

                    <!-- Remove button with confirmation -->
                    <form action="{{ route('conferences.destroy', $conference->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE') <!-- Use DELETE method -->
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to remove this conference?');">
                            Remove
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
