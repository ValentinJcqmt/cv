<div class="row">
    <div class="col m10 offset-m1 blue-grey" style="margin-bottom: 20px;">
        <h1 class="title-homepage white-text text-white center-align">Nos derniers véhicules d'occasions en stock</h1>
    </div>
    <div class="col m12">
        <div class="owl-carousel">
            <?php $i = 0; ?>
            @foreach($usedCars as $data)
                {{--Limit the display--}}
                <?php
                //                $img = null;
                //                $directory = 'images/'.$data['id'];
                //                $files = Storage::disk('selsia-public')->files($directory);
                //                $img = array_first($files);
                ?>
                <?php $i++ ?>
                <div class="item">
                    <a class="carousel-item"
                       href="{{url('voitures-occasions', [str_slug($data['marque'].'-'.$data['modele'].'-'.$data['edition'], '-'), $data['id']])}}">
                        {{--@if($data['images'][0])--}}
                            {{--<img src="{{ asset('assets/providers/selsia/'.$data['images']) }}"--}}
                                 {{--alt="{{ str_slug($data['marque'].'-'.$data['modele'].'-'.$data['edition'], '-') }}">--}}
                        {{--@else--}}
                            <img src="{{ asset('assets/providers/no-image.jpg') }}"
                                 alt="{{ str_slug($data['marque'].'-'.$data['modele'].'-'.$data['edition'], '-') }}">
                        {{--@endif--}}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col m4 offset-m5" style="margin-top:10px;">
        <a class="waves-effect waves-light btn" href="{{ URL::to('voitures-occasions') }}">Voir tous les véhicules <i
                    class="fa fa-arrow-right"></i></a>
    </div>
</div>
