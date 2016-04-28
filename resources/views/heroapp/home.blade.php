@extends('heroapp.master')

@section('content')

	<h1>Hero List:</h1>

	<div class="col-md-10 col-md-offset-1">

		@if (count($heroList))

			@foreach ($heroList as $hero)

				<div class="col-md-3 custom-hero-display">
					<h2>{{ $hero->name }}</h2>
					<span>Strength: {{ $hero->strength }}</span><br>
					<span>Life: {{ $hero->life }}</span><br>
					<span>Speed: {{ $hero->speed }}</span><br>
				</div>
				
			@endforeach
		
		@else

			<div class="alert alert-warning">Heroes don't exist...</div>

		@endif

	</div>

@stop