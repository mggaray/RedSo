@extends('layouts.plantilla')

@section('contenido')

<div class="login-page">
    <div class="form">
      <h2 style="color:#F03A47;">Registrarse</h2>
      <form class="login-form registro" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
      <label for="nombre" style="color:black">Nombre</label>
        
        <div>
            <input id="nombre" type="text" placeholder="Ingrese su nombre" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
            <div class="alertaNombre"></div>

            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <label for="apellido"style="color:black">Apellido</label>

        <div>
            <input id="apellido" type="text" placeholder="Ingrese su apellido" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>
            <div class="alertaApellido"></div>

            @error('apellido')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <label for="email" style="color:black">E-Mail</label>

        <div>
            <input id="email" type="email" placeholder="Ingrese su e-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            <div class="alertaEmail"></div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        
        <div>
            <label for="usuario" style="color:black">Usuario</label>
            <input type="text" placeholder="Ingrese su usuario" class="form-control @error('usuario') is-invalid @enderror" id="usuario" name="usuario" value="{{ old('usuario') }}" required autocomplete="usuario"/>
            <div class="alertaUsuario"></div>
            @error('usuario')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        
        <label for="password" style="color:black">Contraseña</label>

        <div>
            <input id="password" type="password" placeholder="Ingrese su contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <div class="alertaPassword"></div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
  
        <label for="password-confirm" style="color:black">Confirmar contraseña</label>

        <div>
            <input id="password-confirm" placeholder="Ingrese su contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div> 
        <div class="alertaConfirmarPassword"></div>

        <div>
            <label for="cumpleanios" style="color:black">Fecha de Nacimiento</label>
            <input type="date" placeholder="Ingrese su fecha de nacimiento" class="form-control @error('cumpleanios') is-invalid @enderror" id="cumpleanios" name="cumpleanios" value="{{ old('cumpleanios') }}" required autocomplete="usuario"/>
            <div class="alertaCumpleanios"></div>
            @error('cumpleanios')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <h2 style="color:#F03A47;">Datos opcionales</h2>

        <div class=reg-foto-perfil>
            <label for="foto_perfil" style="color:black">Subir Foto de Perfil</label>
            <input type="file" name="foto_perfil">
        </div> 

        <div>
            <label for="ciudad" style="color:black">Ciudad</label>
            <input type="text" placeholder="Ingrese su ciudad" class="form-control @error('ciudad') is-invalid @enderror" id="ciudad" name="ciudad" value="{{ old('ciudad') }}"  autocomplete="ciudad"/>
            @error('ciudad')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

  
        <button type="submit" class="btn btn-primary enviar">
            Registrarse
        </button>
  
        <p class="message">¿Ya está registrado? <a href="/login">Ingrese a su cuenta</a></p> <br>
      </form>
    </div>
  </div>
  @endsection
  @section('scripts')
    <script src="{{asset('/js/registro.js')}}"></script>
  @endsection




{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

