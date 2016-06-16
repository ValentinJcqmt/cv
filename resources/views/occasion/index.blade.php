@section('title', 'Voitures occasions')
@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col s12">
            {!! Breadcrumbs::render('used-cars') !!}
        </div>
    </div>

    @foreach ($datas as $car)
        <div class="col m3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <?php
                    $img = null;
                    $directory = 'images/'.$car->id;
                    $files = Storage::disk('selsia-public')->files($directory);
                    $img = array_first($files);
                    ?>

                    @if($img)
                        <img class="activator" style="height:180px;"
                             src=" {{ asset('assets/providers/conceptauto/'.$img) }}"
                             alt="{{ str_slug($car->marque.'-'.$car->modele.'-'.$car->edition, '-') }}">
                    @else
                        <img class="activator"  style="height:180px;" src="{{ url('assets/providers/') }}/no-image.jpg"
                             alt="{{ str_slug($car['marque'].'-'.$car['modele'].'-'.$car['edition'], '-') }}">
                    @endif

                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{ str_limit($car->marque.' '.$car->modele, 10)}}
                        <span class="badge">{{ $car->price }}€</span>
                    </span>
                </div>
                <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4">{{ $car->marque }} {{ $car->modele }}<i
                                class="material-icons right">X</i></span>
                    <a class="waves-effect waves-light btn"
                       href="{{ URL::to('voitures-occasions') }}/{{ str_slug($car->marque.'-'.$car->modele.'-'.$car->edition, '-') }}/{{ $car->id }}"
                       style="margin-top:150px;">En savoir plus</a>
                </div>
            </div>
        </div>

    @endforeach

    <div class="col m12">
        <ul class="pagination">
            {{ $datas->links() }}
        </ul>
    </div>

@endsection