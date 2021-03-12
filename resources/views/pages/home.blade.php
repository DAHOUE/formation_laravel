@extends('base')


@section('title', 'Hello |'.config('project.variable'))

@section('content')
<img src=" {{ asset('images/flutter_location.png') }}" alt="Package flutter location">
<h1> Page d'accueil<h1>
    {{ config('project.variable') }}

@endsection
