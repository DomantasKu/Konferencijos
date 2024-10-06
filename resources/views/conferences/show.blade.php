@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $conference->title }}</h1>
    <p><strong>Description:</strong> {{ $conference->description }}</p>
    <p><strong>Date:</strong> {{ $conference->date }}</p>
    <p><strong>Location:</strong> {{ $conference->location }}</p>

    <h3>Registered Participants</h3>
    <ul>
        @foreach($participants as $participant)
            <li>{{ $participant->name }} {{ $participant->surname }}</li>
        @endforeach
    </ul>

    <!-- Back button to return to the conference list -->
    <a href="{{ route('conferences.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
