@extends('layouts.plantilla')

@section('contenido')

<div class="login-page">
    <div class="form">
      <h2 style="color:#F03A47;">Editar Perfil</h2>
      <form class="login-form registro" method="post" action= "/editarDatosPerfil" enctype="multipart/form-data">
        @csrf
      <label for="nombre" style="color:black">Nombre</label>
        
        <div>
            <input id="nombre" type="text" placeholder={{$usuarioLogueado->nombre}} class="form-control @error('nombre') is-invalid @enderror" name="nombre" value={{$usuarioLogueado->nombre}} required autocomplete="nombre">
            <div class="alertaNombre"></div>

            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="alertaNombre"></div>
        
        <label for="apellido"style="color:black">Apellido</label>

        <div>
            <input id="apellido" type="text" placeholder={{$usuarioLogueado->apellido}} class="form-control @error('apellido') is-invalid @enderror" name="apellido" value={{$usuarioLogueado->apellido}} required autocomplete="apellido">
            <div class="alertaApellido"></div>

            @error('apellido')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="alertaApellido"></div>
    
        <div>
            <label for="usuario" style="color:black">Usuario</label>
            <input type="text" placeholder= {{$usuarioLogueado->usuario}}  class="form-control @error('usuario') is-invalid @enderror" id="usuario" name="usuario" value={{$usuarioLogueado->usuario}} required autocomplete="usuario"/>
            <div class="alertaUsuario"></div>
            @error('usuario')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="alertaUsuario"></div>

        <div>
            <label for="cumpleanios" style="color:black">Fecha de Nacimiento</label>
        <input type="date" placeholder= {{$usuarioLogueado->cumpleanios}} class="form-control @error('cumpleanios') is-invalid @enderror" id="cumpleanios" name="cumpleanios" value={{$usuarioLogueado->cumpleanios}}/>
            <div class="alertaCumpleanios"></div>
            @error('cumpleanios')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="alertaCumpleanios"></div>

        <div class=reg-foto-perfil>
            <label for="foto_perfil" style="color:black">Subir Foto de Perfil</label>
            <input type="file" name="foto_perfil">
        </div> 

        <div>
            <label for="ciudad" style="color:black">Ciudad</label>
            <input type="text" placeholder={{$usuarioLogueado->ciudad}} class="form-control @error('ciudad') is-invalid @enderror" id="ciudad" name="ciudad" value={{$usuarioLogueado->ciudad}}  autocomplete="ciudad"/>
            @error('ciudad')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

  
        <button type="submit" class="btn btn-primary enviar">
            Cambiar datos
        </button>
      </form>
    </div>
  </div>
  @endsection
  @section('scripts')
    <script src="{{asset('/js/registro.js')}}"></script>
  @endsection

  @section('scripts')
<script src="{{asset('/js/registro.js')}}"></script>
@endsection
