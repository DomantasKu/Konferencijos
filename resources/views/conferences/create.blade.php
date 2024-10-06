@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pridėti konferenciją</h1>
    <form action="{{ route('conferences.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Pavadinimas</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Aprašymas</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="location">Vieta</label>
            <input type="text" name="location" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Pridėti</button>
    </form>
</div>
@endsection
