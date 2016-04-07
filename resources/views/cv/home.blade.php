@extends('cv.master')

@section('content')

	<div class="row" id="home-content">
		<section class="col-sm-6 col-xs-12">
			<h2 class="custom-h2-home text-center">
				A propos de moi :
			</h2>
			<p class="col-md-8 col-md-offset-2 col-xs-12 text-justify">
				<strong>Bonjour et bienvenue sur mon portfolio !</strong>
				<br>
				Je m'appelle Valentin Jacquement, j'ai 20 ans et je suis actuellement en deuxième année du D.U.T. Métier du Multimédia et de l'Internet (MMI, anciennement SRC) à l'I.U.T. de Limoges (87).
				<br>
				Sur ce portfolio, vous trouverez une sélection de mes créations, les informations pour me contacter ainsi que la possibilité de télécharger mon CV.
			</p>
		</section>
		<section class="col-sm-6 col-xs-12">
			<h2 class="custom-h2-home text-center">
				Contact :
			</h2>
			<div class="custom-form form-group col-sm-8 col-sm-offset-2">
				<form action="/" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="text" name="name" placeholder="Nom" class="form-control">
					<input type="mail" name="mail" placeholder="E-mail" class="form-control">
					<textarea style="resize:none;"class="form-control" cols="5" rows="3" name="msg" placeholder="Votre message."></textarea>
					<input type="submit" value="Envoyer" class="btn btn-default">
				</form>
			</div>
		</section>
	</div>

@stop