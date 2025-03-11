@extends('layouts.app')

@section('title', 'Home - MyApp')

@section ('content')

<div class="jumbotron text-center bg-light py5">
    <h1 class="display-4"> Selamat Datang di My App</h1>
    <p class="lead">Aplikasi Laravel Sederhana dengan Laravel Blade</p>
    <a href="{{ route('profile')}}" class="btn btn-primary bt-lg">Lihat Profile</a>
</div>
@endsection