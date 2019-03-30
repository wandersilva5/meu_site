@extends('layouts.login')

@section('content')

<div class="dialog">
    <div class="panel panel-default">
        <p class="panel-heading no-collapse text-center">{{ __('Acesso Restrito') }}</p>
        <div class="panel-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label>{{ __('Seu Login') }}</label>
                    <input type="email" class="form-control span12 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                <label>{{ __('Sua Senha') }}</label>
                    <input type="password" class="form-control span12 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Login') }}
                </button>

                <label class="remember-me"><input type="checkbox"> {{ __('Me Lembre') }}</label>
                <div class="clearfix"></div>
                
            </form>
        </div>
    </div>
    @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Esqueceu sua Senha?') }}
        </a>
    @endif
    <a class="btn btn-link pull-right" href="{{ url('/') }}">
        {{ __('Página Inicial') }}
    </a>
</div>