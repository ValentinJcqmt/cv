

@extends('layouts.main')

@section('title', 'Accueil')

@section('content')

    <div class="row">
        <div class="col s12">
            {!! Breadcrumbs::render('home') !!}
        </div>
    </div>

    {{-- Voitures neuves --}}
    @include('neuf.home-new', $datas)

    <div class="divider"></div>

    {{-- Voitures d'occasions --}}
    @include('occasion.home-occasion')

@endsection

