@extends('layouts.plantilla_perfil')
 @section("titulo")
  RedSo - Perfil
  @endsection
 



        @section('foto')<img src= "/storage/foto_perfil/{{$usuarioLogueado->id}}/{{$usuarioLogueado->foto_perfil}}"> @endsection
        
        @section('usuario'){{$usuarioLogueado->usuario}} @endsection
       
        @section('nombre'){{$usuarioLogueado->nombre}}@endsection
        @section('apellido') {{$usuarioLogueado->apellido}}@endsection
        @section('ciudad') {{$usuarioLogueado->ciudad}}@endsection
        @section('fecha_nacimiento'){{$usuarioLogueado->cumpleanios}}@endsection
      
      @section('posteos')
     <h2>Posteos</h2>
     
     @forelse($posteos as $posteo)
     <div class="post">
       <h3 class="Usuario">{{$usuarioLogueado->usuario}}</h3>
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

<div class="container">
   @section('amigos')
     <div class="seguidores segleft">
      <a href="#"><button type="button" class="btn btn-primary busqueda">Seguidos: <span><b>{{$usuarioLogueado->seguidos->count()}}</b></span></button></a>  
      <a href="/busquedaUser"><button type="button" class="btn btn-primary busqueda">Buscar usuarios</button></a>
      <h2 class="amigos-title"> </h2><br>
      <div class="container">
      <ul class="lista-amigos">
        @forelse($usuarioLogueado->seguidos->take(7) as $seguido)
        <a href="/users/{{$seguido->id}}"><img src="/img/chico.png"></a><a href="/users/{{$seguido->id}}" class="text-white bg-dark"><li>{{$seguido['usuario']}}</li></a><hr> 
      @empty 
      <span class="border border-danger">Este usuario no sigue a nadie </span>
      
      @endforelse
      </ul>
    </div>
     
      


    </div> <br> 

    <div class="seguidores ">
      <a href="#"><button type="button" class="btn btn-primary busqueda">Seguidores: <span><b>{{$usuarioLogueado->seguidores->count()}} </b></span></button></a> 
      <div class="container">
      <ul class="lista-amigos">
        @forelse($usuarioLogueado->seguidores->take(7) as $seguidor)
        <a href="/users/{{$seguidor->id}}"><img src="/img/chico.png"></a><a href="/users/{{$seguidor->id}}" class="text-white bg-dark"><li>{{$seguidor['usuario']}}</li></a><hr>
        @empty 
        <span class="border border-danger">Este usuario no tiene seguidores</span>
        
        @endforelse
      </ul>
    </div>
    </div>
   @endsection
   </div>
 </div>
 
   