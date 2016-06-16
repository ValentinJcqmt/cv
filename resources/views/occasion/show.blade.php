@section('title', $datas->marque.' '.$datas->model)
@extends('layouts.main')
{{--{{dd($datas)}}--}}
@section('content')
        <?php
        $img = null;
        $directory = 'images/'.$datas->id;
        $files = Storage::disk('concept-auto-public')->files($directory);
        $img = array_first($files);
        ?>

        {!! Breadcrumbs::render('show-one-used-car', $datas) !!}
        <div class="row">
                <div class="col s12 m6">
                        <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                        <span class="card-title">{{ $datas->marque }} {{ $datas->model }}</span><br/>
                                        <span class="card-title">{{ ucfirst($datas->version) }}</span>
                                </div>

                        </div>
                        <div class="col s12 m12">
                                <a class="btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50"
                                   data-tooltip="Prix">
                                        {{ $datas->price }}€
                                </a>
                                {{--@if( $datas['enstock'] === 'oui')--}}
                                {{--<a class="btn tooltipped col m2 margin-right-5 center-align" data-position="bottom" data-delay="50"--}}
                                {{--data-tooltip="Disponibilité">--}}
                                {{--Disponible--}}
                                {{--</a>--}}
                                {{--@else--}}
                                {{--<a class="btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50"--}}
                                {{--data-tooltip="Disponibilité">--}}
                                {{--Non disponible--}}
                                {{--</a>--}}
                                {{--@endif--}}
                                <a class="btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50"
                                   data-tooltip="Carburant">
                                        {{ $datas->energy }}
                                </a>
                                <a class="btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50"
                                   data-tooltip="Kilométrage">
                                        {{ $datas->km }} km
                                </a>
                                {{--<a class="btn tooltipped col m2 margin-right-5" data-position="bottom" data-delay="50"--}}
                                {{--data-tooltip="Transmission">--}}
                                {{--{{ $datas['transmission']}}--}}
                                {{--</a>--}}
                        </div>
                </div>

                <div class="col s12 m6">
                        <div class="col s12">
                                <ul class="tabs">
                                        <li class="tab col s6"><a href="#test1" class="grey-text text-grey darken-4">Informations sur le
                                                        véhicule</a></li>
                                        <li class="tab col s5"><a href="#test2" class="grey-text text-grey darken-4">Options</a></li>
                                        <li class="tab col s1"></li>
                                </ul>
                        </div>
                        <div id="test1" class="col s12">
                                <div class="collection">
                                        <a href="#!" class="collection-item">Cylindrée:<span class="badge"> {{ $datas->cylinder }}</span></a>
                                        <a href="#!" class="collection-item">Puissance:<span
                                                        class="badge">{{ $datas->horsepower }}</span></a>
                                        {{--<a href="#!" class="collection-item">Nombre de portes:<span--}}
                                        {{--class="badge">{{ $datas['portes'] }}</span></a>--}}
                                        <a href="#!" class="collection-item">Couleur d'exterieur:<span
                                                        class="badge">{{ $datas->color }}</span></a>
                                        {{--<a href="#!" class="collection-item">Couleur d'interieur:<span--}}
                                                        {{--class="badge">{{ $datas['interieur'] }}</span></a>--}}
                                        <a href="#!" class="collection-item">Emission CO2:<span class="badge">{{ $datas->co2 }}</span></a>
                                </div>

                        </div>
                        <div id="test2" class="col s12">
                                <p>
                                        {{ str_replace('|', ', ', $datas->options) }}
                                </p>
                        </div>
                </div>
        </div>

        <div class="col m12">
                <div class="owl-carousel">
                        @unless($files)
                                <img class="activator" src="{{ url('assets/providers/') }}/no-image.jpg"
                                     alt="{{ str_slug($datas->marque.'-'.$datas->model.'-'.$datas->edition, '-') }}">
                        @endunless
                        @foreach($files as $file)
                                <div class="item">
                                        <a class="carousel-item">
                                                <img class="activator"
                                                     src="{{ asset('assets/providers/conceptauto/'.$file) }}"
                                                     alt="{{ str_slug($datas->marque.'-'.$datas->modele.'-'.$datas->edition, '-') }}">
                                        </a>
                                </div>
                        @endforeach
                </div>
        </div>

        @include('layouts.contact')

@endsection