

<!Doctype html>

<html>
<head>
	<meta charset="utf-8">
	<title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/code-connexion.css')}}">
    <style>
body {
  background-image: url('assets/img/portfolio/ten.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>
	<header>
		<img class="logo" src="{{URL::asset('assets/images/Capture.png')}}" alt="logo" height="82" width="250">
		<a class="cta" href="{{ url('login') }}"><button>LOGIN</button></a>
		<nav>
			<ul class="navlinks">
				<li><a href="{{ url('/') }}">HOME</a></li>
				
				<li><a href="{{ url('/page') }}">Shop</a></li>
				
			</ul>
		</nav>
	</header>
	<form class="box" action="{{ route('login') }}" method="POST">
            @csrf
		<h1>{{ __('Login') }} </h1>
        <input type="text"  id="email"  placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		<input type="password" id="password"  name="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror"  required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        <input type="submit" name="formconnexion" value=" {{ __('Login') }}"><br>
         
         
          
         
		 <a href="#" style="margin-right:0px; font-size:13px;  font-family: Montserrat">Mot de passe oublié ?</a>

    </form>

     


<!--
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
</div>-->

