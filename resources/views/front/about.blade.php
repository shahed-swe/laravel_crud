@extends('master.master') @section('content')

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
        background-color: #00CF7D;
    }
    
    .btn-success {
        background: #01ee8f !important;
    }
</style>
<section>
    <div class="conatiner">
        <div class="row">
            <div class="col- col-12 col-lg-6 col-md-6 col-sm-12">
                <div class="jumbotron margin">
                    <h1 class="display-4">Hello, This is {{$title}} Page</h1>
                    <p class="lead">Site Is Under Construction</p>
                    <hr class="my-4">
                    <p>To Learn more please visit to our owner's profile</p>
                    <p class="lead">
                        <a class="btn btn-success btn-lg btn-color" href="#" role="button">Visit Profile</a>
                    </p>
                </div>
            </div>
            <div class="col- col-12 col-lg-6 col-md-6 col-sm-12">
                <img src="{{ asset('front/img/Visuals-by-Impulse.png') }}" alt="" class="img-fluid w-75">
            </div>
        </div>
    </div>
</section>
@endsection