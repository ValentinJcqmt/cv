

@extends('layouts.main')

@section('title', 'home')

@section('content')


<h1>Bienvenue sur un site d'escrocs</h1>
<h2>Rubrique arnaque n°1</h2>

<a class="waves-effect waves-light btn" href="{{ URL::to('new-cars') }}"><i class="material-icons left">New cars</i></a>

@endsection

