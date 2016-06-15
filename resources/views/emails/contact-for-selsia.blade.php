<h3>Un utilisateur souhaite prendre contact pour le modèle suivant :</h3>
<br>
<a href="{{ env('APP_URL') }}/voitures-occasions/{{ $datas['slug'] }}/{{$datas['usedCar']->id}}">Cliquez sur ce lien
    pour accèder au
    véhicule</a>

L'identifiant du véhicule est "{{$datas['usedCar']->provider_car_id}}" du fournisseur Selsia.<br>

Les contacts associés à ce véhicule :

@foreach($datas['usedCar']->contacts as $contact)
    <li>
        <ul>Names : {{$contact->names}}</ul>
        <ul>Phones : {{$contact->phones}}</ul>
        <ul>Emails : {{$contact->emails}}</ul>
    </li>
@endforeach

<h3> Information du contact :</h3><br>
<br>
Nom : {{ $datas['last_name'] }}
Prénom : {{ $datas['first_name'] }}
Téléphone : {{ $datas['phone_number'] }}
Email : {{ $datas['email'] }}
