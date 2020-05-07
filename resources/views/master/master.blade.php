<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <title>{{ $title }}</title>
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
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home')}}"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact')}}" tabindex="-1">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- horizontal row -->
    <hr class="horizontal-row">



    <!-- element container -->
    @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $(window).on('load', function() {
            $("#loader").delay(1000).fadeOut("slow");
        });
    </script>
</body>

</html>