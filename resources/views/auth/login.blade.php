<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>Yearbook</title>
    <link href="{{ asset('css/login_style.css') }}" rel="stylesheet">

</head>
<body>

    <div id="main_login" class="wrapper fadeInDown">
        <div id="formContent">
            <h1>Yearbook</h1>
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="{{asset('fixed/images/AtecLogoComp.png')}}" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h3>Entrar no Yearbook</h3>
                <input type="email" id="email" class="fadeIn second form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
                <input type="password" id="password" class="fadeIn third form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="palavra-passe">
                @error('password')
                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
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
                <input type="submit" class="fadeIn fourth btn" value="Entrar">
            </form>

            <!-- Remind Passowrd -->
            @if (Route::has('password.request'))
                <div id="formFooter">
                    <a class="underlineHover" href="{{ route('password.request') }}">Recuperar palavra-passe</a>
                </div>
            @endif




        </div>
    </div>
</body>
</html>
