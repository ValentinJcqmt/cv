
@extends('layouts.main')

@section('content')
<?php
//dd($datas);
?>

@foreach ($datas as $car)

    <div class="col m3">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="{{ url('assets/providers/dad-auto/images') }}/{{ $car['id'] }}/1.png">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">{{ $car['marque'] }} {{ $car['modele'] }}
                    <span class="badge">{{ strstr($car['prix'], '.', true) }}€</span>
                </span>

                <p></p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">{{ $car['marque'] }} {{ $car['modele'] }}<i class="material-icons right">X</i></span>
                <a class="waves-effect waves-light btn" href="{{ URL::to('new-cars') }}/{{ $car['id'] }}" style="margin-top:150px;">En savoir plus</a>
            </div>
        </div>
    </div>

@endforeach

    <div class="col m12">
        <ul class="pagination">
            <li class="waves-effect"><a href="{{ Request::url() }}?page={{ $datas->currentPage()-1 }}"><i class="material-icons">Précédent</i></a></li>
            <li class="active"><a href="{{ $datas->currentPage() }}">{{ $datas->currentPage() }}</a></li>

            <li class="waves-effect"><a href="{{ Request::url() }}?page={{ $datas->currentPage()+1 }}"><i class="material-icons">Suivant</i></a></li>
        </ul>
    </div>

@endsection