@extends('master.master') 

@section('content')

<style>
    section {
        margin-top: 20px;
    }
    
    .jumbotron {
        font-family: 'Fredoka One', cursive;
        color: white;
        background-color: #1A1E23;
    }
    
    .btn {
        border-radius: 30px !important;
    }
    
    .btn-color {
      color: black;
      background-color: #00CF7D;
    }
    
    .btn-success {
        background: #01ee8f !important;
    }
    a{
        text-decoration-line: none !important;
    }
    .fab {
        font-size: 45px;
        width: 50px;
        text-align: left;
        text-decoration: none;
        margin:0;
    }
    
    .fa-facebook-square {
        color: white;
    }
    
    .fa-linkedin {
        color: #007bb5;
    }
    
    .fa-youtube {
        color: #cb2027;
    }
    
    .fa-youtube:hover {
        color: #d1363b;
    }
    
    .fa-twitter {
        color: #55ACEE;
    }
    
    .fa-twitter:hover {
        color: #76b4e4;
    }
</style>
<section>
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
</section>
<section>
    <div class="conatiner">
        <div class="row">
            <div class="col- col-12 col-lg-6 col-md-6 col-sm-12">
                <div class="jumbotron margin">
                    <h1 class="display-4">Hello, This is {{$title}} Page</h1>
                    <p class="lead">Site Is Under Construction</p>
                    <hr class="my-4">
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-linkedin-in"></a>
                    <a href="#" class="fab fa-youtube"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <p>To Learn more please visit to our owner's profile</p>
                    <p class="lead">
                        <a class="btn btn-success btn-lg btn-color" href="https://www.facebook.com/saj.tasin" role="button">Visit Profile</a>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-6">
                <img src="{{ asset('front/img/Visuals-by-Impulse.png') }}" alt="" class="img-fluid float-right w-75" style="margin-right: 30px">
            </div>
        </div>
    </div>
</section>
@endsection
