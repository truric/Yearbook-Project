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
        <!-- Tabs Titles -->
        <h1>Yearbook</h1>
        <!-- Icon -->
        <div class="fadeIn first">
            <img src="{{asset('fixed/images/AtecLogoComp.png')}}" id="icon" alt="User Icon" />
        </div>
        <div class="fadeIn second">
            {{ __('Verifique o seu email') }}
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('Um novo lick foi enviado para o seu endereço de email') }}
                </div>
        @endif
        {{ __('Antes de prosseguir, verifique no seu endereço de email, se recebeu um novo link') }}
        <!-- Login Form -->
            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <input type="submit" class="fadeIn fourth btn btn-link p-0 m-0 align-baseline" value="Enviar novo link para redefinir palavra-passe">
            </form>
        </div>
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
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
--}}
