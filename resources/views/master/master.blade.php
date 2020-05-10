<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name='csrf-token' content="{{csrf_token()}}">
    <script>window.Laravel = {csrfToken: '{{csrf_token()}}'}</script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <title>{{ $title ?? '' }}</title>
</head>

<body>
    <!-- preloader wrapper -->
    <div id="loader">
        <div class='overlay'>
            <div class='preloader'>
                <div class='diamond'>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class='movement'>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
        <!-- navbar section -->
    <nav class="navbar navbar-expand-sm navbar-light bg-success margin">
        <a class="navbar-brand" href="#">
            <img class="d-inline-block align-top" src="{{asset('front/img/Logo.png')}}" alt="" style="height: 35px; width:140px; margin:0;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link home" href="{{ route('home')}}"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link about" href="{{ route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link contact" href="{{ route('contact')}}" tabindex="-1">Contact</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse justify content between" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
    
    <!-- horizontal row -->
    <hr class="horizontal-row">
    <div id="app">
        <content></content>
    </div>
    


    <!-- element container -->
    @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script>
        $(window).on('load', function() {
            $("#loader").fadeOut("slow");
        });
    </script>
    <script src="{{asset ('js/app.js')}}"></script>
</body>

</html>