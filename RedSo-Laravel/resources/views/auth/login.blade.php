@extends('layouts.plantilla')

@section('titulo')
    RedSo - Login
@endsection

@section('contenido')

<div class="login-page">
    <div class="form">
      <form class="login-form formulario" method="post" action="{{ route('login') }}">
        @csrf
        <label for="email" style="color:black">Email</label>
        <div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="alertaEmail"></div>
        <label for="password" style="color:black">Contraseña</label>
        <div>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="alertaPassword"></div>

        <div class="recuerdame">
            <input type="checkbox" name="recuerdame" style="display:inline;" value="SI" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="recuerdame" style="color:black;display:inline">Recuerdame</label>
        </div>
        
        <div>
            <div>
                <button type="submit" class="btn btn-primary enviar">
                    Entrar
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif





        <p class="message">¿No está registrado? <a href="/register">Crear una cuenta</a></p>
      </form>
    </div>
  </div>
@endsection
@section('scripts')
    <script src="{{asset('/js/login.js')}}"></script>
@endsection
