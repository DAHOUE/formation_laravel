@extends('base')

@section('title', config('app.name'))

@section('content')
<img src="/images/parfums.jpg" alt="Les parfums">
<h1> Page Propos de nous<h1>
    <h1> <a href="{{ route('app_home') }}">Allez à l'accueil<a><h1>
@endsection
