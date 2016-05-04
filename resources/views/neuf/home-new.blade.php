<div class="row">
    <div class="col m10 offset-m1 blue-grey" style="margin-bottom: 20px;">
        <h1 class="title-homepage white-text text-white center-align">Nos derniers véhicules neufs</h1>
    </div>
    <div class="col m12">
        <div class="owl-carousel">
        @foreach($datas as $data)
            <?php
                $directory = base_path().'/public/assets/providers/dad-auto/images/'.$data['id'];
                $files = File::allFiles($directory);
                foreach($files as $file){
                    if($file->getFilename() == '1.png' || $file->getFilename() == '1.jpg' || $file->getFilename() == '1.gif' || $file->getFilename() == '1.jpeg')
                        $img = $file->getFilename();
                }
            ?>
            <div class="item" >
                <a class="carousel-item" href="#one!">
                    @if($img)
                    <img src="{{ url('assets/providers/dad-auto/images') }}/{{ $data['id'] }}/{{$img}}" alt="{{ str_slug($data['marque'].'-'.$data['modele'].'-'.$data['edition'], '-') }}">
                    @else
                    <img class="activator" src="{{ url('assets/providers/dad-auto/images') }}/default/default.jpg" alt="{{ str_slug($data['marque'].'-'.$data['modele'].'-'.$data['edition'], '-') }}">
                    @endif
                </a>
            </div>
        @endforeach
        </div>
    </div>
    <div class="col m4 offset-m5" style="margin-top:10px;">
        <a class="waves-effect waves-light btn" href="{{ URL::to('voitures-neuves') }}">Voir tous les véhicules <i class="fa fa-arrow-right"></i></a>
    </div>
</div>
