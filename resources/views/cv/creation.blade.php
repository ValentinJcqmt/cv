@extends('cv.master')

@section('content')

			<div id="creat_ptuts2" class="row custom-proj">
				<div class="col-md-4 col-sm-10 col-sm-offset-1 col-md-offset-2 custom-proj-img">
					<img src="{{ url('assets/img/preview/PTutS2.png') }}" alt="Image projet" class="">
				</div>
				<div class="col-md-4 col-sm-10 custom-proj-desc">
					<p class="text-justify">
						Projet scolaire en équipe de 3. Création d'un site vitrine/portfolio pour un auteur et réalisateur de pièces de théatre. Dans ce projet j'ai eu pout tâche de créer la navigation du site (menu, flèches contextuelles et touches fléchées) et l'affichage du descriptif de chaque livre et pièce de théâtre. Les scripts de ce site sont uniquement écrits en Javascript.
						<br>
						<a href="portfolioJS" class="btn btn-default custom-proj-btn" target="_blank">► Voir le projet</a>
					</p>
				</div>
			</div>
			<hr class="custom-hr">
			<div id="creat_touitteur" class="row custom-proj">
				<div class="col-md-4 col-sm-10 col-sm-offset-1 col-md-offset-2 custom-proj-img">
					<img src="{{ url('assets/img/preview/touitteur.jpg') }}" alt="Image projet" class="">
				</div>
				<div class="col-md-4 col-sm-10 custom-proj-desc">
					<p class="text-justify">
						Création d'un système de "statuts"/"commentaires" similaire à Twitter. Ce système utilise une base de donnée MySQL. Possibilité de supprimer, voter et publier.
						<br>
						<a href="creations/touitteur" class="btn btn-default custom-proj-btn" target="_blank">► Voir le projet</a>
					</p>
				</div>
			</div>
			<hr class="custom-hr">
			<div id="LightningCanvas" class="row custom-proj">
				<div class="col-md-4 col-sm-10 col-sm-offset-1 col-md-offset-2 custom-proj-img">
					<img src="{{ url('assets/img/preview/LightningCanvas.png') }}" alt="Image projet" class="">
				</div>
				<div class="col-md-4 col-sm-10 custom-proj-desc">
					<p class="text-justify">
						Application canvas. Génération de tracès similaires à des éclairs. Présence d'une interface "dat.gui" et traitement des informations rentrées par l'utilisateur en JavaScript. Gestion de la couleur, de la direction, de la vitesse, etc...
						<br>
						<a href="LightningCanvas" class="btn btn-default custom-proj-btn" target="_blank">► Voir le projet</a>
					</p>
				</div>
			</div>
			<hr class="custom-hr">

@stop