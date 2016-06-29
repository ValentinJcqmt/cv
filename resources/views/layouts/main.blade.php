<html>
<head>
    <title>Concept Automobile - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link href="{{asset('assets/css/all.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<div id="main">
    <header>
         @include('layouts.header')
    </header>
    <div class="container">
        <div class="row">
            <div class="col m12">
                @yield('content')
            </div>
        </div>
    </div>
    <footer class="page-footer blue-grey darken-3">
        @include('layouts.footer')
    </footer>
</div>
</body>
</html>
