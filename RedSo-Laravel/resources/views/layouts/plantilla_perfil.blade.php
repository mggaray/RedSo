@extends('layouts.plantilla')
 @section("titulo")
  @yield('titulo')
  @endsection
 @section("principal")


 @section('contenido')
 <div class="body-perfil">
   <div class="header-perfil">
    <br>
    <div class="foto-perfil">
        @yield('foto')
    </div>
    <div class="info-perfil">
       <br><h1 class="nombre">@yield('usuario') </h1><br>
       <div class="amigos-bottom"> 
         @isset($usuarioLogueado)
        <a href="/seguidores"><button type="button" class="btn-amigos">Seguidos <span><b>{{$usuarioLogueado->seguidos->count()}}</b></span></button></a>
        <a href="/seguidores"><button type="button" class="btn-amigos">Seguidores <span><b>{{$usuarioLogueado->seguidores->count()}} </b></span></button></a>  
        @endisset 

        @isset($usuario)  
        <a href="#"><button type="button" class="btn-amigos">Seguidos <span><b>{{$usuario->seguidos->count()}}</b></span></button></a>
        <a href="#"><button type="button" class="btn-amigos">Seguidores <span><b>{{$usuario->seguidores->count()}} </b></span></button></a>  
        @endisset
      </div>
       <hr>
       <ul class="info-perfil">
         <br><li><i class="fas fa-user"></i>&nbsp&nbsp&nbsp @yield('nombre') @yield('apellido')</li><br><hr>
         <br><li><i class="fas fa-city"></i>&nbsp&nbsp&nbsp @yield('ciudad')</li><br><hr>
         <br><li><i class="fas fa-birthday-cake"></i> &nbsp&nbsp&nbsp @yield('fecha_nacimiento')</li>
       </ul> 
        <div class="edit">
          @yield('editar')
          </div>
    </div>
   </div>

   <div class="posteos">
     @yield('posteos')
   </div>
   <div class="amigos">
    @yield('amigos')
   </div>
 </div>
 @endsection 
 @section("scripts") 
 <script src="https://kit.fontawesome.com/c57a089669.js" crossorigin="anonymous"></script>
  @yield("script") 
@endsection