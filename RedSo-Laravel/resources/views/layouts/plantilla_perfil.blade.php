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
       <br><h1 class="nombre">@yield('usuario') </h1><hr>
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