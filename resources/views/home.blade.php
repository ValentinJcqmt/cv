

@extends('layouts.main')

@section('title', 'home')

@section('content')

    <div class="row">
        <div class="col s12">
            {!! Breadcrumbs::render('home') !!}
        </div>
    </div>

    <h1>Bienvenue sur un site d'escrocs</h1>
<h2>Rubrique arnaque n°1</h2>

<a class="waves-effect waves-light btn" href="{{ URL::to('voitures-neuves') }}"><i class="material-icons left">New cars</i></a>

@endsection

