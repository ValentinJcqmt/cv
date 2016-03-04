<div class="row" style="margin-top: 20px;">
    <div class="col m10 offset-m1  blue-grey" style="margin-bottom: 20px;">
        <h1 class="title-homepage white-text text-white center-align">Nos derniers véhicules d'occasion</h1>
    </div>
    <div class="col m12">
        <div class="owl-carousel">
        @foreach($datas as $data)
            <?php
            $file = file_exists(public_path().'/assets/providers/dad-auto/images/'.$data['id'].'/1.png');
            ?>
            <div class="item" >
                <a class="carousel-item" href="#one!">
                    @if($file)
                    <img src="{{ url('assets/providers/dad-auto/images') }}/{{ $data['id'] }}/1.png" alt="{{ $data['marque'] }}-{{ $data['modele'] }}">
                    @else
                    <img class="activator" src="{{ url('assets/providers/dad-auto/images') }}/default/default.jpg" alt="{{ $data['marque'] }}-{{ $data['modele'] }}">
                    @endif
                </a>
            </div>
        @endforeach
        </div>
    </div>
    <div class="col m4 offset-m5" style="margin-top:10px;">
        <a class="waves-effect waves-light btn" href="{{ URL::to('voitures-occasions') }}">Voir tous les véhicules <i class="fa fa-arrow-right"></i></a>
    </div>
</div>