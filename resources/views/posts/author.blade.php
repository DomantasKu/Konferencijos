@extends('app')

@section('title', 'Author')

@section('content')
    <h1>{{ $post['title'] }}</h1>
    <p>Author: {{ $post['author']['first_name'] }} {{ $post['author']['last_name'] }}</p>
@endsection
