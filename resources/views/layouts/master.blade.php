<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Bismantaka Aldila">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name' , 'BisTaka-Blog') }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                @if (Route::has('login'))
                    @auth
                    <div class="form-inline my-2 my-lg-0">
                        <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
                        &NonBreakingSpace;
                        <a class="btn btn-outline-danger" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                            Log out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @else
                    <div class="form-inline my-2 my-lg-0">
                        <a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('login') }}">Login</a>
                        &NonBreakingSpace;
                    </div>
                    @endauth
                @endif
            </div>
        </nav>

        <div class="app">
            @yield('content')
        </div>

        <!-- add 'footer' snippet in css -->
        <div class="footer-v1 bg-light">
            <div class="footer no-margin">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="headline"><p>Exams</p></div>
                            <ul class="list-unstyled link-list">
                                <li><a href="#">Exam1</a></li>
                                <li><a href="#">Exam2</a></li>
                                <li><a href="#">Exam3</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <div class="headline"><p>Resources</p></div>
                            <ul class="list-unstyled link-list">
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                  <div class="headline"><p>Support</p></div>
                  <address>
                    <ul class="list-unstyled link-list">
                      <li><a href="#">Contact Us</a></li>
                      <li>
                        <a href="#"><i class="fa fa-envelope"></i>support@company.com</a>
                      </li>
                    </ul>
                  </address>
                </div>
                        <div class="col-md-3">
                            <div class="headline"><p>Company</p></div>
                            <ul class="list-unstyled link-list">
                    <li><a href="#">About Us</a></li>
                    <li> <a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Cancellation/Rescheduling policy</a></li>
                  </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="" async defer></script>
    </body>
</html>

