@extends('layouts.main')

@section('title', 'Infos légales')

@section('content')
    <div class="col m10 offset-m1 blue-grey" style="margin-bottom: 20px;">
        <h1 class="title-homepage white-text text-white center-align">SARL CONCEPTAUTOMOBILE</h1>
    </div>
    <div class="row info-legale">
        <div class="col m6 border-top-solid">
            <p><span>Contact E.mail:</span> {{env('MAIL_CONTACT')}}</p>
            <p><span>Siège social:</span> 12 rue des Lutins 66 240 SAINT ESTEVE</p>
            <p><span>Nationalité:</span> France</p>
            <p><span>Siège:</span> 12 rue des Lutins 66240 SAINT ESTEVE (France)</p>
            <p><span>Tel:</span> {{env('TEL_CONTACT')}}</p>
        </div>
        <div class="col m6 border-bottom-solid">
            <p><span>Numero intra-communautaire:</span> FR37.354.043.671.00016</p>
            <p><span>Numero de siret:</span> 354 043 671 00016</p>
            <p><span>Siren:</span> 354 043 671</p>
            <p><span>Activité principale:</span> 4511Z</p>
            <p><span>Date de prise d'activité:</span> 1 AVRIL 1990</p>
            <p><span>Activité:</span> Commerce de véhicules automobiles sur Internet</p>
        </div>
    </div>
@endsection

