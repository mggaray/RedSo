@extends('layouts.plantilla_perfil')
 @section("titulo")
  RedSo - Perfil
  @endsection
 



        @section('foto')
        @if($usuario->foto_perfil == null) 
        <img src="/img/chico.png">
        @else
        <img src= "{{$usuario->foto_perfil}}"> 
        @endif
        @endsection
        
        @section('usuario'){{$usuario->usuario}} 
        @if($bandera == false) 
      <a href="/seguirUsuario/{{$usuario['id']}}"><button type="button" class="btn btn-primary busqueda"> Seguir </button></a>
      @else 
      <a href="/dejarUsuario/{{$usuario['id']}}"><button type="button" class="btn btn-danger">Dejar de Seguir</button></a>

      @endif
        @endsection
       
        @section('nombre'){{$usuario->nombre}}@endsection
        @section('apellido') {{$usuario->apellido}}@endsection
        @section('ciudad') {{$usuario->ciudad}}@endsection
        @section('fecha_nacimiento'){{$usuario->cumpleanios}}@endsection
      
      


      @section('posteos')
     <h2>Posteos</h2>
     @forelse($posteos as $posteo)
     <div class="post">
       <h3 class="Usuario">{{$usuario->usuario}}</h3>
       <hr>
     <p class="post-text">{{$posteo['contenido']}}</p>
     </div>
    @empty  
    <div class="post">
      <h3 class="Usuario">No hiciste ningun posteo</h3>
      <hr>
    <p class="post-text">Haz tu primer <a href="/home">posteo</a>!!</p>
    
    </div>  
    @endforelse
    {{$posteos->links()}}
   @endsection


   @section('amigos')
     <div class="seguidores segleft">
      <h2 class="amigos-title">{{$usuario->seguidos->count()}} Seguidos </h2><br>
      <ul class="lista-amigos">
        @forelse($usuario->seguidos as $seguido)
      <li><img src="/img/chico.png">{{$seguido['usuario']}}</li><hr> 
      @empty 
      Este usuario no sigue a nadie 
      @endforelse
      </ul>  
      <a href="/busquedaUser"><button type="button" class="btn btn-primary busqueda">Buscar usuarios</button></a>
      
    </div> <br> 

    <div class="seguidores ">
      <h2 class="amigos-title">{{$usuario->seguidores->count()}} Seguidores </h2><br>
      <ul class="lista-amigos">
        @forelse($usuario->seguidores as $seguidor)
        <li><img src="/img/chico.png">{{$seguidor['usuario']}}</li><hr>
        @empty 
        Este usuario no tiene seguidores
        @endforelse
      </ul> 
      <button type="button" class="btn btn-primary busqueda">Ver seguidores</button> 
    </div>
   @endsection
 </div> 
 