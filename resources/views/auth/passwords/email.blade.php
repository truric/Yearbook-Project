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
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h1>Yearbook</h1>
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="{{asset('fixed/images/AtecLogoComp.png')}}" id="icon" alt="User Icon" />
        </div>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
    @endif
    <!-- Login Form -->
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <h3>Redefinir palavra-passe</h3>
            <input id="email" type="email" class="fadeIn second form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email de registo"  required autocomplete="email" autofocus >

            {{--                <input type="email" id="email" class="fadeIn second form-control @error('email') is-invalid @enderror" name="email value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email de registo" >--}}
            @error('email')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
            <input type="submit" class="fadeIn fourth" value="Enviar Link de redefinição">
        </form>
    </div>
</div>
</body>
</html>

{{--
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
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

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
--}}
