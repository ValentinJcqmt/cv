<div class="row">
    <div class="col m10 offset-m1 blue-grey" style="margin-bottom: 20px;">
        <h1 class="title-homepage white-text text-white center-align">Nos derniers véhicules d'occasion en stock</h1>
    </div>
    <div class="col m12">
        <div class="owl-carousel">
            @foreach($usedCars as $data)
                {{--Limit the display--}}
                <div class="item">
                    <a class="carousel-item"
                       href="{{$data->slug}}">
                        @if($data->images->first()->name)
                            <img src="{{ $data->images->first()->urlImage }}"
                                 alt="{{ $data['marque'].' '.$data['modele'].' '.$data['edition'] }}">
                        @else
                            <img src="{{ asset('assets/providers/no-image.jpg') }}"
                                 alt="{{ $data['marque'].' '.$data['modele'].' '.$data['edition'] }}">
                        @endif
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col m4 offset-m5" style="margin-top:10px;">
        <a class="waves-effect waves-light btn" href="{{ url('voitures-occasions') }}">Voir tous les véhicules <i
                    class="fa fa-arrow-right"></i></a>
    </div>
</div>
