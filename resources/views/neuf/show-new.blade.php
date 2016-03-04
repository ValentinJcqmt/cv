@section('title', $datas['marque'].' '.$datas['modele'])
@extends('layouts.main')

@section('content')
<?php

$directory = base_path().'/public/assets/providers/dad-auto/images/'.$datas['id'];
$allDirectories = glob(base_path().'/public/assets/providers/dad-auto/images' . '/*' , GLOB_ONLYDIR);


$findCurrentFolder = array_search($directory, $allDirectories);

if (isset($findCurrentFolder) && $findCurrentFolder !== false)
    $files = File::allFiles($directory);
?>

{!! Breadcrumbs::render('show-one-new-car', $datas) !!}
    <div class="row">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">{{ $datas['marque'] }} {{ $datas['modele'] }}</span><br />
                    <span class="card-title">{{ ucfirst($datas['edition']) }}</span>
                </div>

            </div>
            <div class="col s12 m12">
                <a class="btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50" data-tooltip="Prix">
                    {{ strstr($datas['prix'], '.', true) }}€
                </a>
                @if( $datas['enstock'] === 'oui')
                    <a class="btn tooltipped col m2 margin-right-5 center-align" data-position="bottom" data-delay="50" data-tooltip="Disponibilité">
                        Disponible
                    </a>
                @else
                    <a class="btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50" data-tooltip="Disponibilité">
                        Non disponible
                    </a>
                @endif
                <a class="btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50" data-tooltip="Carburant">
                  {{ $datas['carburant'] }}
                </a>
                <a class="btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50" data-tooltip="Kilométrage">
                  {{ $datas['km'] }} km
                </a>
                <a class="btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50" data-tooltip="Transmission">
                    {{ $datas['transmission']}}
                </a>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s6"><a href="#test1" class="grey-text text-grey darken-4">Informations sur le véhicule</a></li>
                    <li class="tab col s5"><a href="#test2" class="grey-text text-grey darken-4">Options</a></li>
                    <li class="tab col s1"></li>
                </ul>
            </div>
            <div id="test1" class="col s12">
                <div class="collection">
                    <a href="#!" class="collection-item">Cylindrée:<span class="badge"> {{ $datas['cc'] }}</span></a>
                    <a href="#!" class="collection-item">Puissance:<span class="badge">{{ $datas['chevaux'] }}</span></a>
                    <a href="#!" class="collection-item">Nombre de portes:<span class="badge">{{ $datas['portes'] }}</span></a>
                    <a href="#!" class="collection-item">Couleur d'exterieur:<span class="badge">{{ $datas['exterieur'] }}</span></a>
                    <a href="#!" class="collection-item">Couleur d'interieur:<span class="badge">{{ $datas['interieur'] }}</span></a>
                    <a href="#!" class="collection-item">Emission CO2:<span class="badge">{{ $datas['co2'] }}</span></a>
                </div>

            </div>
            <div id="test2" class="col s12">
                <p>{{{ $datas['options'] }}}</p>
            </div>
        </div>
    </div>

    <div class="col m12">
        <div class="owl-carousel">

            @if(isset($findCurrentFolder) && $findCurrentFolder !== false)
                @for($i = 1; $i <= count($files); $i++)
                    <div class="item" >
                        <a class="carousel-item" href="#one!">
                            <img src="{{ url('assets/providers/dad-auto/images') }}/{{ $datas['id'] }}/{{ $i }}.png" alt="{{ $datas['marque'] }}-{{ $datas['modele'] }}">
                        </a>
                    </div>
                @endfor
            @endif
        </div>
    </div>

    @include('layouts.contact')

@endsection