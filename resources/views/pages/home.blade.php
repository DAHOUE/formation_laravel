@extends('base')


@section('title', 'Hello |'.config('project.variable'))

@section('content')
<h1> Page d'accueil<h1>
    {{ config('project.variable') }}

@endsection
