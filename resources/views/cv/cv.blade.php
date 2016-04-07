@extends('cv.master')

@section('content')

	<a href="assets/doc/ValentinJacquement_CV.pdf" class="custom-cv-download" target="_blank"><div id="download-cv" class="btn btn-lng"><span class="glyphicon glyphicon-save"></span> Télécharger le PDF</div></a>
	<div id="formation">
		<h2 class="custom-h2-cv row">Formation :</h2>
		<hr>
		<div class="row">
			<div class="col-sm-6 custom-formation">
				<h3 class="text-center">2014 - 2016 :</h3>
				<p class="custom-p">
					- D.U.T. Métiers du Multimédia et de l'Internet (M.M.I.) :
					<br>
					<small>I.U.T. du Limousin, Limoges (87)</small>
				</p>
			</div>
			<div class="col-sm-6 custom-formation">
				<h3 class="text-center">2012 - 2014 :</h3>
				<p class="custom-p">
					- Baccalauréat scientifique :
					<br>
					<small>Lycée A. Claveille, Périgueux (24)</small>
				</p>
			</div>
		</div>
	</div>
	<h2 class="custom-h2-cv row">Compétences :</h2>
	<hr>
	<div id="competences" class="row">
		<ul class="col-sm-4">
			<h3>Dévelopement Web :</h3>
			<li>
				<h4><strong>Back-end :</strong></h4>
				<ul class="custom-ul">
					<li>PHP 7.0</li>
					<li>requêtes asynchrones (AJAX)</li>
					<li>utilisation du framework "Laravel"</li>
					<li>Installation de serveur web(LEMP)</li>
				</ul>
			<li>
				<h4><strong>Front-end :</strong></h4>
				<ul class="custom-ul">
					<li>HTML5</li>
					<li>CSS3</li>
					<li>JavaScript</li>
					<li>Canvas</li>
					<li>Bootstrap</li>
					<li>Responsive Design</li>
				</ul>
			</li>
		</ul>
		<div class="col-sm-4">
			<h3>Graphisme :</h3>
			<ul class="custom-ul">
				<li>Réalisation de logo</li>
				<li>Photomontage</li>
				<li>Réalisation d'identités visuelles</li>
				<li>Création de charte graphique</li>
				<li>Réalisations web et impression</li>
			</ul>
		</div>
		<div class="col-sm-4">
			<h3>Langues :</h3>
			<ul class="custom-ul">
				<li>Français (Langue maternelle)</li>
				<li>Anglais (Usage professionnel)</li>
				<li>Espagnol (Niveau scolaire)</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<a href="lien_cv_pdf" target="_blank"><img src=""></a>
	</div>

@stop