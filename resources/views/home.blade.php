@extends('layouts.main')

@section('title', 'Accueil')

@section('content')

    <div class="row">
        <div class="col s12">
            {!! Breadcrumbs::render('home') !!}
        </div>
    </div>
    {{-- Lien vers configurateur --}}
    <div class="row">
        <div class="col m10 offset-m1 bg-red" style="margin-bottom: 20px;">
            <h1 id="test" class="title-homepage white-text text-white center-align">Configurez votre véhicule neuf en commande</h1>

        </div>
        <div id="image-configurateur" class="col m10 offset-m1">
            <img class="responsive-img" src="{{ asset('assets/ban_configurateur.jpg') }}">
        </div>
        <div class="col m4 offset-m5" style="margin-top:10px;">
            <a class="waves-effect waves-light red lighten-3 btn center-align" href="http://configurateur.conceptautomobile.fr">Aller au configurateur <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
    {{-- Voitures neuves --}}
    @include('neuf.home-new', $newCars)

    {{-- Voitures d'occasions --}}
    @include('occasion.home-occasion', $usedCars)

@endsection
