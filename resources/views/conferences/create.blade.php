<!-- resources/views/conferences/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Conference</h1>
    
    <form action="{{ route('conferences.store') }}" method="POST" style="max-width: 600px; margin-top: 20px;">
        @csrf
        
        <!-- Title Field -->
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        
        <!-- Description Field -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
        </div>
        
        <!-- Date Field -->
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" id="date" required>
        </div>
        
        <!-- Location Field -->
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" id="location" required>
        </div>
        
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Save Conference</button>
    </form>
</div>
@endsection
