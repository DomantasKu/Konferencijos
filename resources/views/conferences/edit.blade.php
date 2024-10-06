@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Conference</h1>

    <form method="POST" action="{{ route('conferences.update', $conference->id) }}">
        @csrf
        @method('PUT') <!-- Specify that this is a PUT request -->

        <div class="mb-3">
            <label for="title" class="form-label">Conference Title</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $conference->title) }}" required>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required>{{ old('description', $conference->description) }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date', $conference->date) }}" required>
            @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location', $conference->location) }}" required>
            @error('location')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Conference</button>
    </form>
</div>
@endsection
