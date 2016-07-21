@section('title', $datas['marque'].' '.$datas['modele'])
@extends('layouts.main')

@section('content')
    <?php
    $img = null;
    $directory = 'images/'.$datas['id'];
    $files = Storage::disk('concept-auto-public')->files($directory);
    $img = array_first($files);
    ?>

    {!! Breadcrumbs::render('show-one-new-car', $datas) !!}
    <div class="row">
        <div class="col s12 m6">
            <div class="card">
                <div class="card-content bg-red white-text">
                    <span class="card-title">{{ $datas['marque'] }} {{ $datas['modele'] }}</span><br/>
                    <span class="card-title">{{ ucfirst($datas['edition']) }}</span>
                </div>

            </div>
            <div class="col s12 m12">
                <a class="red btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50"
                   data-tooltip="dont 5% de frais de dossier">
                    {{ round($datas['prix'] + $datas['frais']) }}€
                </a>
                {{--@if( $datas['enstock'] === 'oui')--}}
                {{--<a class="red btn tooltipped col m2 margin-right-5 center-align" data-position="bottom" data-delay="50"--}}
                {{--data-tooltip="Disponibilité">--}}
                {{--Disponible--}}
                {{--</a>--}}
                {{--@else--}}
                {{--<a class="red btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50"--}}
                {{--data-tooltip="Disponibilité">--}}
                {{--Non disponible--}}
                {{--</a>--}}
                {{--@endif--}}
                <a class="red btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50"
                   data-tooltip="Carburant">
                    {{ $datas['carburant'] }}
                </a>
                <a class="red btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50"
                   data-tooltip="Kilométrage">
                    {{ ($datas['km'])?$datas['km']:0 }} km
                </a>
                {{--<a class="red btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50"--}}
                {{--data-tooltip="Transmission">--}}
                {{--{{ $datas['transmission']}}--}}
                {{--</a>--}}
            </div>
        </div>

        <div class="col s12 m6">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s6"><a href="#main-neuf" class="grey-text text-grey darken-4">Informations</a></li>
                    <li class="tab col s6"><a href="#options-neuf" class="grey-text text-grey darken-4">Equipements</a></li>
                </ul>
            </div>
            <div id="main-neuf" class="col s12">
                <div class="collection">
                    <a href="#" class="collection-item">Cylindrée:<span class="badge"> {{ $datas['cc'] }}</span></a>
                    <a href="#" class="collection-item">Puissance:<span
                                class="badge">{{ $datas['chevaux'] }}</span></a>
                    {{--<a href="#" class="collection-item">Nombre de portes:<span--}}
                    {{--class="badge">{{ $datas['portes'] }}</span></a>--}}
                    <a href="#" class="collection-item">Couleur d'exterieur:<span
                                class="badge">{{ $datas['exterieur'] }}</span></a>
                    <a href="#" class="collection-item">Couleur d'interieur:<span
                                class="badge">{{ $datas['interieur'] }}</span></a>
                    <a href="#" class="collection-item">Emission CO2:<span class="badge">{{ $datas['co2'] }}</span></a>
                </div>

            </div>
            <div id="options-neuf" class="col s12">
                <ul class="collection">
                    @foreach($datas['option'] as $item)
                        <li class="collection-item">{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col m12">
          <div class="owl-carousel">
            @unless($files)
            <img class="activator" src="{{ url('assets/providers/') }}/no-image.jpg"
            alt="{{ str_slug($datas['marque'].'-'.$datas['modele'].'-'.$datas['edition'], '-') }}">
            @endunless
            @foreach($files as $file)
            <div class="item">
              <a class="carousel-item">
                <img class="activator"
                src="{{ asset('assets/providers/conceptauto/'.$file) }}"
                alt="{{ str_slug($datas['marque'].'-'.$datas['modele'].'-'.$datas['edition'], '-') }}">
              </a>
            </div>
            @endforeach
          </div>
        </div>
    </div>

    @include('layouts.contact')

@endsection
