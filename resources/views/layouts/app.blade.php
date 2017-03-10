<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BMgas</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap-theme.min.css">

    <!--Font Awesome-->
    <link rel="stylesheet" type="text/css" href="css/vendor/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/vendor/font-awesome/dist/font-awesome-animation.min.css" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="css/custom/style.css"> 

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <header class="navbar navbar-default navbar-fixed-top clearfix" id="top-nav">
        <nav>
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" id="auth-list">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="menu"><a href="{{ url('/login') }}">Login</a></li>
                            <li class="menu"><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="{{ url('/home') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="logo-image">
                    <a href="{{ url('/') }}"><img src="images/150x50.png" alt="150x50" /></a>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>                   
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" id="menu-list">
                        <li class="menu">
                            <a href="#home" class="pagescroll">
                            Home
                            </a>
                        </li>
                        <li class="menu">
                            <a href="#about" class="pagescroll">
                                About
                            </a>
                        </li>                                   
                        <li class="menu">
                            <a href="#donators" class="pagescroll">
                            Donators
                            </a>
                        </li>   
                        <li class="menu">
                            <a href="#gallery" class="pagescroll">
                            Gallery
                            </a>
                        </li>
                        <li class="menu">
                            <a href="#events" class="pagescroll">
                            Events
                            </a>
                        </li>
                        <li class="menu">
                            <a href="#contact" class="pagescroll">
                            Contact
                            </a>
                        </li>                           
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
    </header>

    @yield('content')

    <!-- JQUERY LIBRARY -->
    <script src="js/vendor/jquery.min.js"></script> 
    <!-- BOOTSTRAP -->
    <script src="js/vendor/bootstrap.min.js"></script>      
    <!-- FORM VALIDATION -->
    <script type="text/javascript" src="js/vendor/validate/jquery.validate.min.js"></script>
    <!-- POPUP JS -->
    <script src="js/vendor/popup/jquery.popupoverlay.js"></script>              
    <!-- THEME JS -->
    <script src="js/custom/custom.js"></script> 

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
