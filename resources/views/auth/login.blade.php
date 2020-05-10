@extends('master.master') @section('content')
<style>
    body {
        overflow: hidden;
    }
    
    .made {
        height: 600px;
        width: 100%;
        background-image: url("{{asset ('front/img/take.png')}}");
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
    }
    
    .position {
        margin-top: 13%;
    }
    
    .card {
        margin-right: 10% !important;
        border: none;
    }
    
    .display-4 {
        font-family: 'Fredoka One', cursive;
        font-size: 72px;
        margin-top: 27%;
        margin-left: 27%;
        color: white;
    }
    /* social media */
    
    a {
        text-decoration-line: none !important;
    }
    
    .fab {
        padding: 10px;
        font-size: 45px;
        width: 50px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
    }
    
    .fa-facebook-square {
        margin-left: 27%;
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
    
    .home {
        display: none;
    }
    
    .about {
        display: none;
    }
    
    .contact {
        display: none;
    }
</style>
<section class="made">
    <div class="container">
        <div class="row">
            <div class="col-md-6 position">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button> @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-design">
                <h1 class="display-4">Our Social Media Link</h1>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-linkedin-in"></a>
                <a href="#" class="fab fa-youtube"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>
</section>
@endsection