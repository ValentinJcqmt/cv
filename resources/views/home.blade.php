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
        <div class="col m10 offset-m1 blue-grey" style="margin-bottom: 20px;">
            <h1 id="test" class="title-homepage white-text text-white center-align">Configurez votre véhicule neuf</h1>

        </div>
        <img class="responsive-img" src="{{ asset('assets/ban_configurateur.jpg') }}">
        <div class="col m4 offset-m5" style="margin-top:10px;">
            <a class="waves-effect waves-light btn center-align" href="http://configurateur.conceptautomobile.fr/configuration-voiture-neuve.html" target="_blank">Aller au configurateur <i
                        class="fa fa-arrow-right"></i></a>
        </div>
    </div>
    {{-- Voitures neuves --}}
    @include('neuf.home-new', $newCars)

    <div class="divider"></div>

    {{-- Voitures d'occasions --}}
    @include('occasion.home-occasion', $usedCars)

@endsection

