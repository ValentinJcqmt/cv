<!DOCTYPE html>
<html>
<head>
	<title>Hero App</title>
	@include('heroapp.meta')
</head>
<body>
	<header>
	<nav class="col-sm-10">
		<ul class="nav nav-tabs nav-justified">
			<li>
				<a href="/app/create" id="createLink" class="link-nav">
				Create Hero
				</a>
			</li>
		</ul>	
	</nav>
	</header>
	<div class="container">
		@yield('content')
	</div>
	@include('heroapp.footer')
</body>
</html>