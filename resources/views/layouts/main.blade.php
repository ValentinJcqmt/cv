<html>
    <head>
        <title>Concept Automobile - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="{{ elixir('assets/css/all.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    </head>
    <body>
        <header>
             @include('layouts.header')
        </header>
        <div class="container">
            <div class="col s12">
                @yield('content')
            </div>
        </div>
        <footer>
            @include('layouts.footer')

            @push('scripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
        </footer>
    </body>
</html>