<div class="row">
    <div class="col m10 offset-m1 blue-grey" style="margin-bottom: 20px;">
        <h1 class="title-homepage white-text text-white center-align">Nos derniers véhicules neufs</h1>
    </div>
    <div class="col m12">
        <div class="owl-carousel">
            <?php $i = 0; ?>
            @foreach($datas as $data)
                {{-- Limit the display --}}
                @if($i >= 8)
                    @continue
                @endif
                <?php
                $img = null;
                $directory = 'images/'.$data['id'];
                $files = Storage::disk('concept-auto-public')->files($directory);
                $img = array_first($files);
                ?>
                @if(!$img)
                    @continue
                @endif
                <?php $i++ ?>
                <div class="item">
                    <a class="carousel-item" href="{{url('voitures-neuves', [str_slug($data['marque'].'-'.$data['modele'].'-'.$data['edition'], '-'), $data['id']])}}">
                        <img src="{{ asset('assets/providers/conceptauto/'.$img) }}"
                             alt="{{ str_slug($data['marque'].'-'.$data['modele'].'-'.$data['edition'], '-') }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col m4 offset-m5" style="margin-top:10px;">
        <a class="waves-effect waves-light btn" href="{{ URL::to('voitures-neuves') }}">Voir tous les véhicules <i
                    class="fa fa-arrow-right"></i></a>
    </div>
</div>
