@extends('touitteur.app')

@section('content')
	@if (count($touitList))
		<div class="row" id="touitForm">
			<form method="post" action="/creations/touitteur" enctype="multipart/form-data" class="custom-form col-sm-6 col-sm-offset-3 col-xs-12">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<textarea style="resize:none;" maxlength="150" name="texte" placeholder="Votre Touit..." class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 custom-textarea"></textarea>
				<input type="submit" name="post" value="Touiter!" class="btn btn-primary custom-btn-touit col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
			</form>
		</div>
		<div class="row">
			@foreach ($touitList as $touit)
				<article class="touit-container col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
					<div class="custom-date-row row">
						<span class="text-left col-sm-9 col-xs-10"><small>{{ $touit->date }}</small></span>
						<a href="touitteur/del/{{ $touit->id }}" class="text-right col-sm-3 col-xs-2">
							<span class="glyphicon glyphicon-remove" style="color:#FF302A;"> </span>
						</a>
					</div>
					<div>
						<div class="col-sm-12 custom-text-touit">{{ $touit->texte }}</div>
					</div>
					<div>
						<div>
							<a class="custom-btn-size btn btn-success" href="touitteur/plus/{{ $touit->id }}">+ {{ $touit->plus }}</a>	
							<a class="custom-btn-size btn btn-danger" href="touitteur/moins/{{ $touit->id }}">- {{ $touit->moins }}</a>
						</div>
					</div>
				</article>
			@endforeach
		</div>
	@endif
@stop