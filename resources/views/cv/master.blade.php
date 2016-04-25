<!DOCTYPE html>
<html>
	<head>
		<title>Portfolio</title>
		@include('cv.meta')
	</head>
	<body>
		<div class="container-fluid custom-container">
			<div id="wrap">
				@include('cv.header')
				<div id="main" class="row col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
					@yield('content')
				</div>
			</div><!--End Wrap Div-->
			<div class="push"></div>
		</div>
	</body>
</html>