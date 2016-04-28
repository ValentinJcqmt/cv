@extends('heroapp.master')

@section('content')

	<h1>Hero Creation:</h1>

	<div class="col-md-10 col-md-offset-1">
		<form action="/app/create" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="text" name="name" placeholder="Name" class="form-control custom-form-input">
			<input type="submit" id="create" value="Create" class="btn btn-default custom-btn-contact col-sm-8 col-sm-offset-2">
		</form>
	</div>

@stop