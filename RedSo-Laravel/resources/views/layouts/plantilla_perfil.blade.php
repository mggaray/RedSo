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
         <br><li>Nombre: @yield('nombre')</li><br><hr>
         <br><li>Apellido: @yield('apellido')</li><br><hr>
         <br><li>Ciudad: @yield('ciudad')</li><br><hr>
         <br><li>Fecha de Nacimiento: @yield('fecha_nacimiento')</li>
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
  @yield("script") 
@endsection