
@extends('layouts.app')

@section('content')
<!doctype html>
<div class="apple-container">
    <div class="login-wrapper">
        <h1>Iniciar Sesión</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <input id="email" type="email" class="form-control-apple @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="password" type="password" class="form-control-apple @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-apple btn-lg">
                    {{ __('Login') }}
                </button>
            </div>
            
            @if (Route::has('register'))
                <p class="mt-4 mb-0">¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
            @endif
        </form>
    </div>
</div>
@endsection
