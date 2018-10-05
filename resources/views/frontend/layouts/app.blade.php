<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

                    @include('frontend.templates.flags')
           
                    <li class="nav-item" style="cursor: pointer;"><a class="dropdown-toggle nav-link" role="button" id="lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg style="width:20px;height: 20px;margin-top: -3px;"> <use xlink:href="#{{ LaravelLocalization::getCurrentLocale() }}" /></svg>
                            {{ LaravelLocalization::getCurrentLocaleNative() }}
                            <i class="fa fa-caret-down"></i>
                        </a>

                        <ul style="margin-left: 77%;text-align: center;min-width:6rem;height:5.5rem;" class="dropdown-menu" aria-labelledby="lang">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                @if ($localeCode != LaravelLocalization::getCurrentLocale() && $localeCode != 'ee')
                                    <li>
                                        <a class="nav-link" style="color:#292929;" rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                            <div style="margin-top: -1.5rem;"><svg style="width:20px;height: 20px;margin-top: -3px;"><use xlink:href="#{{$localeCode}}" /></svg>&nbsp;{{ $properties['native'] }}<div>
                                        </a>
                                    </li>
                                @endif
                            @endforeach

                        </ul>
                    </li>

                    </ul>


        </div>
    </div>
</nav>

        <main class="py-4">
            @yield('content')
        </main>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
