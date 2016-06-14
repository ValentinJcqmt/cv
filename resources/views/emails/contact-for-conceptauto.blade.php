<h3>Un utilisateur souhaite prendre contact pour le modèle suivant :</h3>

<a href="{{ env('APP_URL') }}/voitures-neuves/{{ $datas['slug'] }}/{{$datas['id']}}">Cliquez sur ce lien pour accèder au
    véhicule</a>

L'identifiant du véhicule est "{{$datas['id']}}" du fournisseur DADAuto.<br>

Message du contact :<br>
<br>
{{ $datas['message'] }}
<br>

<h3> Information de l'utilisateur :</h3><br>
<br>
Nom : {{ $datas['last_name'] }}
Prénom : {{ $datas['first_name'] }}
Téléphone : {{ $datas['phone_number'] }}
Email : {{ $datas['email'] }}
