@extends('main')

@section('title')
Home Page | Laravel 9
@endsection

@section('content')
    <div class="container bg-dark p-5 mt-2">
        <h2 class="text-center text-white">{{ $page_name }}</h2>
    </div>
@endsection
