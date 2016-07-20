@section('title', 'Voitures occasions')
@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col s12">
            {!! Breadcrumbs::render('used-cars') !!}
        </div>
    </div>

    @foreach ($datas as $data)
        <div class="col m3">
            <div class="waves-effect waves-light card">
                <a href="{{ $data->slug }}">
                    <div class="card-image waves-effect waves-block waves-light">
                        <div class="img-filter-red"></div>
                        @if($data->images[0]['name'])
                            <img class="activator" style="height:180px;"
                                 src=" {{ $data->images->first()->urlImage }}"
                                 alt="{{ $data->marque.' '.$data->modele.' '.$data->edition }}">
                        @else
                            <img class="activator"  style="height:180px;" src="{{ url('assets/providers/no-image.jpg') }}"
                                 alt="{{ $data->marque.' '.$data->modele.' '.$data->edition }}">
                        @endif

                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{ str_limit($data->marque.' '.$data->modele, 10)}}
                            <span class="badge">{{ $data->price }}€</span>
                        </span>
                    </div>
                    <!--<div class="card-reveal">

                        <span class="card-title grey-text text-darken-4">{{ $data->marque }} {{ $data->modele }}<i
                                    class="material-icons right">X</i></span>
                        <a class="waves-effect waves-light btn"
                           href="{{ $data->slug }}"
                           style="margin-top:150px;">En savoir plus</a>
                    </div>-->
                </a>
            </div>
        </div>

    @endforeach

    <div class="col m12 center">
        <ul class="pagination">
            {{ $datas->links() }}
        </ul>
    </div>

@endsection
