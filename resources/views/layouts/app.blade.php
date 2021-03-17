<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'rent a car') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Printing -->
    <script type="text/javascript" src="js/jquery.printPage.js"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Portfolio
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Linkerkant van de Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url("/index")}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url("/about")}}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Schoolprojecten
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{url("/beroepsexamen")}}">
                                Beroepsexamen
                            </a>
                            <a class="dropdown-item" href="{{url("/keuzedelen")}}">
                                Keuzedelen
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url("/html")}}">
                                HTML & CSS
                            </a>
                            <a class="dropdown-item" href="{{url("/java")}}">
                                Java
                            </a>
                            <a class="dropdown-item" href="{{url("/javascript")}}">
                                Javascript
                            </a>
                            <a class="dropdown-item" href="{{url("/php")}}">
                                PHP
                            </a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url("/stage")}}">Stage</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Kerntaken
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{url("/kerntaken")}}">
                                Kerntaken uitleg
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{url("/kerntaak1")}}">
                                Kerntaak 1
                            </a>
                            <a class="dropdown-item" href="{{url("/kerntaak2")}}">
                                Kerntaak 2
                            </a>
                            <a class="dropdown-item" href="{{url("/kerntaak3")}}">
                                Kerntaak 3
                            </a>
                            <a class="dropdown-item" href="{{url("/kerntaak4")}}">
                                Kerntaak 4
                            </a>


                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url("/film")}}">Video's</a>
                    </li>

                </ul>

                <!-- Rechterkant van de Navbar -->


                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4 container">
        @yield('content')
    </main>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<script src="../../assets/js/vendor/holder.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
