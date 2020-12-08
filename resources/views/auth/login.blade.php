<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/css/bootstrap.min.css') }} ">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/css/font-awesome.min.css') }} ">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/css/owl.carousel.css') }} ">
    <link rel="stylesheet" href="{{ asset('kiaalap/css/owl.theme.css') }} ">
    <link rel="stylesheet" href="{{ asset('kiaalap/css/owl.transitions.css') }} ">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/css/animate.css') }} ">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/css/normalize.css') }} ">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/css/main.css') }} ">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/css/morrisjs/morris.css') }} ">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/css/scrollbar/jquery.mCustomScrollbar.min.css') }} ">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/css/metisMenu/metisMenu.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('kiaalap/css/metisMenu/metisMenu-vertical.css') }} ">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/css/calendar/fullcalendar.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('kiaalap/css/calendar/fullcalendar.print.min.css') }} ">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/css/form/all-type-forms.css') }} ">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/style.css') }} ">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('kiaalap/css/responsive.css') }} ">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/vendor/modernizr-2.8.3.min.js') }} "></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>PLEASE LOGIN TO APP</h3>
				<p>This is the best app ever!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{{ __('Login') }}</div>
                    
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                    
                                            <div class="form-group row">
                                             
                    
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                               
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Login') }}
                                                    </button>
                    
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="{{ asset('kiaalap/js/vendor/jquery-1.12.4.min.js') }} "></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/bootstrap.min.js') }} "></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/wow.min.js') }} "></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/jquery-price-slider.js') }} "></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/jquery.meanmenu.js') }} "></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/owl.carousel.min.js') }} "></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/jquery.sticky.js') }} "></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/jquery.scrollUp.min.js') }} "></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }} "></script>
    <script src="{{ asset('kiaalap/js/scrollbar/mCustomScrollbar-active.js') }} "></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/metisMenu/metisMenu.min.js') }} "></script>
    <script src="{{ asset('kiaalap/js/metisMenu/metisMenu-active.js') }} "></script>
    <!-- tab JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/tab.js') }} "></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/icheck/icheck.min.js') }} "></script>
    <script src="{{ asset('kiaalap/js/icheck/icheck-active.js') }} "></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/plugins.js') }} "></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/main.js') }} "></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="{{ asset('kiaalap/js/tawk-chat.js') }} "></script>
</body>

</html>