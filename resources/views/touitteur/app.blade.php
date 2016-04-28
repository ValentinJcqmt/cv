<!DOCTYPE html>
<html>
<head>
	<title>Touitteur</title>
	@include('touitteur.head')
</head>
<body>
	<div id="main" class="container">

		@if (Session::has('flash_message_success'))
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ session('flash_message_success') }}
			</div>
		@elseif (Session::has('flash_message_danger'))
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ session('flash_message_danger') }}
			</div>
		@endif

		@yield('content')
	</div>
	@include('touitteur.footer')

	<script>
		$('div.alert').not('.alert-important').delay(1500).slideUp(300);
	</script>
</body>
</html>