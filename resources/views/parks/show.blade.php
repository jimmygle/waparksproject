<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>        
            html, body {
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
            }

            #top-nav {
                background: #6B9080;
            }
            #top-nav a {
                color: #fff;
            }
        </style>
    </head>
    <body>

        <div class="uk-container uk-container-large">
            <nav class="uk-navbar-container uk-margin" id="top-nav" uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="/">Washington Parks Project</a>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a href="/parks">Parks</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <h1>{{ $park->name }}</h1>

            <p>This park is {{ $park->acres }} acres.</p>

            <h4>References &amp; Resources</h4>

            <ul>
                @each('parks.reference', $park->references, 'reference', 'parks.reference-empty')
            </ul>


        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
