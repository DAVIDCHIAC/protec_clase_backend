
@extends('layouts.app')

@section('content')
<div class="apple-container">
    <div class="login-wrapper">
        <h1>Crear Cuenta</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <input id="name" type="text" class="form-control-apple @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <input id="email" type="email" class="form-control-apple @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electrónico">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <input id="password" type="password" class="form-control-apple @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-4">
                <input id="password-confirm" type="password" class="form-control-apple" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-apple btn-lg">
                    {{ __('Registrarse') }}
                </button>
            </div>
            
            <p class="mt-4 mb-0">¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia Sesión</a></p>
        </form>
    </div>
</div>
@endsection
