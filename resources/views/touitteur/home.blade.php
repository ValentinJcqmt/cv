@extends('touitteur.app')

@section('content')

	<div class="row" id="touitForm">

		@if (Auth::check())

			<p>Bonjour {{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}}!</p>
			<a href="/logout">Déconnexion</a>
			<form method="post" action="/creations/touitteur" enctype="multipart/form-data" class="custom-form col-sm-6 col-sm-offset-3 col-xs-12">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<textarea style='resize:none;' maxlength="150" name="texte" placeholder="Votre Touit..." class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 custom-textarea"></textarea>
				<input type="submit" name="submit" value="Touiter!" class="btn btn-primary custom-btn-touit col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
			</form>

		@else

			<p>Vous devez être connecté pour touitter !</p>
			<a id="login" href="/login"><strong>Login</strong></a>

		@endif
		
	</div>

	@if (count($touitList))

		<div class="row">

			@foreach ($touitList as $touit)

				<article class="touit-container col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
					<div class="row">
						<span class="text-left col-sm-9 col-xs-10"><strong>{{ $touit->user->name }}</strong></span>
					</div>
					<div class="custom-date-row row">
						<span class="text-left col-sm-9 col-xs-10"><small>{{ $touit->date }}</small></span>

						@if (Auth::check())
							@if (Auth::user()->id == $touit->user_id)

								<a href="touitteur/del/{{ $touit->id }}" id="del-id-{{ $touit->id }}" class="text-right col-sm-3 col-xs-2">
									<span class="glyphicon glyphicon-remove" style="color:#FF302A;"> </span>
								</a>

							@endif
						@endif

					</div>
					<div>
						<div class="col-sm-12 custom-text-touit">{{ $touit->texte }}</div>
					</div>
					<div>
						<div>
							<a class="custom-btn-size btn btn-success" id="plus-id-{{ $touit->id }}" href="touitteur/plus/{{ $touit->id }}">
								+ {{ $touit->plus }}
							</a>	
							<a class="custom-btn-size btn btn-danger" id="moins-id-{{ $touit->id }}" href="touitteur/moins/{{ $touit->id }}">
								- {{ $touit->moins }}
							</a>
						</div>
					</div>
				</article>

			@endforeach

		</div>

	@endif
@stop