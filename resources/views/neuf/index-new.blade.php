@section('title', 'Voitures neuves')
@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col s12">
            {!! Breadcrumbs::render('new-cars') !!}
        </div>
    </div>

    @foreach ($datas as $car)

        <div class="col m3">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                <?php
                    $directory = base_path().'/public/assets/providers/dad-auto/images/'.$car['id'];
                    $files = File::allFiles($directory);
                        foreach($files as $file){
                            if($file->getFilename() == '1.png' || $file->getFilename() == '1.jpg' || $file->getFilename() == '1.gif' || $file->getFilename() == '1.jpeg')
                                $img = $file->getFilename();
                        }
                ?>
                @if($img)
                    <img class="activator" src="{{ url('assets/providers/dad-auto/images') }}/{{$car['id']}}/{{ $img}}" alt="{{ str_slug($car['marque'].'-'.$car['modele'].'-'.$car['edition'], '-') }}">
                @else
                    <img class="activator" src="{{ url('assets/providers/dad-auto/images') }}/default/default.jpg" alt="{{ str_slug($car['marque'].'-'.$car['modele'].'-'.$car['edition'], '-') }}">
                @endif

                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">{{ $car['marque'] }} {{ $car['modele'] }}
                        <span class="badge">{{ strstr($car['prix'], '.', true) }}€</span>
                    </span>
                </div>
                <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4">{{ $car['marque'] }} {{ $car['modele'] }}<i class="material-icons right">X</i></span>
                    <a class="waves-effect waves-light btn" href="{{ URL::to('voitures-neuves') }}/{{ str_slug($car['marque'].'-'.$car['modele'].'-'.$car['edition'], '-') }}/{{ $car['id'] }}" style="margin-top:150px;">En savoir plus</a>
                </div>
            </div>
        </div>

    @endforeach

    <div class="col m12">
        <ul class="pagination">
            <li class="waves-effect"><a href="{{ Request::url() }}?page={{ $datas->currentPage()-1 }}">Précédent</a></li>
            <li class="active"><a href="{{ $datas->currentPage() }}">{{ $datas->currentPage() }}</a></li>
            <li class="waves-effect"><a href="{{ Request::url() }}?page={{ $datas->currentPage()+1 }}">Suivant</a></li>
        </ul>
    </div>

@endsection
