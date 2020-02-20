<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register - Eraport</title>
    <link rel="shortcut icon" href="{{ asset('layouts/img/icon.png') }}" >

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('lgn/assets/css/bootstrap.css') }}"> 
    <link rel="stylesheet" href="{{ asset('lgn/assets/css/style.css') }}">
</head>
<body>
    <div id="app">
    <main class="py-6">
        <section class="login-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <img src="{{ asset('lgn/img/logo2.png') }}" width="95%">
                    <form method="POST" class="login-form" action="{{ route('register') }}">
                      @csrf
        
                                <div class="form-group">
                                    <label>{{ __('Name') }}</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
        
                                <div class="form-group">
                                    <label>{{ __('E-Mail Address') }}</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
        
                                <div class="form-group">
                                    <label>{{ __('Password') }}</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
        
                                <div class="form-group">
                                    <label>{{ __('Confirm Password') }}</label>
                                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
        
                                
                                <div class="form-group">
                                        <button type="submit" class="btn btn-outline-primary btn-lg btn-block">
                                            {{ __('Register') }}
                                        </button>
                                </div>
                            </form>
                    </div>
                    <div class="col-md-8 banner-sec">
                      </div>
                </div>
            </div>
        </section>
    </main>
        </div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('lgn/assets/js/jquery.js') }}"></script> 
<script src="{{ asset('lgn/assets/js/popper.js') }}"></script> 
<script src="{{ asset('lgn/assets/js/bootstrap.js') }}"></script>
</body>
</html>