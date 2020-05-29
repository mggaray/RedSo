@extends('layouts.plantilla')  

@section('titulo') Redso - Buscar Usuario 
@endsection  

@section('contenido') 
<div class="container-busqueda">
  <div class="form-busqueda">
      <form action="/busquedaUser" method="POST">
      @csrf 
      <label for="buscar">Ingrese un nombre de usuario</label>
      <input type="text" id="buscar" name="buscar"> 
      <button type="submit" class="btn-busqueda-completa">Buscar</button>
      </form>  
  </div> 
  



  @if($usuarios)
  <h2 class="titulo-encontrados"> Encontrados: <b style="color:#F03A47">{{$usuarios->count()}}</b></h2>
  <div class="encontrados">
    <ul class="ul-busqueda"> 
  @endif
      @forelse ($usuarios as $usuario)
    <a class="nombre-busqueda" href="/users/ {{$usuario['id']}}"><li class="container-user">{{$usuario['usuario']}}
      <img class="foto-busqueda" src={{(Storage::exists("/foto_perfil/$usuario->id/$usuario->foto_perfil")) ? "/storage/foto_perfil/$usuario->id/$usuario->foto_perfil" :'/img/chico.png'}}>
    </a>
    <div class="datos-busqueda">
    <p> <i class="fas fa-user"></i>  {{$usuario['nombre']}} {{$usuario['apellido']}}</p>
    <p> <i class="fas fa-city"></i> {{$usuario['ciudad']}}</p>
  </div>
  </li> 

  
  
  @empty
  
  @endforelse
</ul> 
</div> 
</div>
@endsection

@section("scripts") 
 <script src="https://kit.fontawesome.com/c57a089669.js" crossorigin="anonymous"></script>
  @yield("script") 
@endsection