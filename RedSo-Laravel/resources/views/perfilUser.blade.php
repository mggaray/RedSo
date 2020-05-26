@extends('layouts.plantilla_perfil')
 @section("titulo")
  RedSo - Perfil
  @endsection

        @section('foto')
        @if($usuario->foto_perfil == null || !(Storage::exists("/foto_perfil/$usuario->id/$usuario->foto_perfil"))) 
        <img src="/img/chico.png">
        @else
        <img src= "/storage/foto_perfil/{{$usuario->id}}/{{$usuario->foto_perfil}}">
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
       @if(Auth::user()->admin())
      <form action="/eliminarPost" method="POST" class="borrarPost">  
        @csrf
        <input type="hidden" name="postId" value={{$posteo->id}}> 
        <input type="hidden" name="userId" value={{$usuario->id}}>
      <button type="button" class="close" aria-label="Close"> 
        <span aria-hidden="true">&times;</span>
      </button> 
      </form>
       
      @endif
       <h3 class="Usuario">{{$usuario->usuario}}</h3> 
       <hr>
     <p class="post-text">{{$posteo['contenido']}}</p> 
     <p class="align-text-bottom text-right muted small">{{date('d-m-Y',strtotime($posteo->fechaCreacion))}}</p> 
     <a href="/comentarios/{{$posteo->id}}" class="text-left align-text-bottom  muted small">Comentarios</a>
     </div>
    @empty  
    <div class="post">
      <h3 class="Usuario">Este usuario no ha realizado posteos</h3>
      <hr>
    <p class="post-text">Esperemos ver pronto que lo haga!</p> 
    
    </div>  
    @endforelse
    {{$posteos->links()}}
   @endsection


   @section('amigos')
     <div class="seguidores segleft">
      <a href="#"><button type="button" class="btn btn-primary busqueda">Seguidos: <span><b>{{$usuario->seguidos->count()}}</b></span></button></a>  
      <ul class="lista-amigos">
        @forelse($usuario->seguidos->take(7) as $seguido)
        <li>
          <a href="/users/{{$seguido->id}}"><img src={{(Storage::exists("/foto_perfil/$seguido->id/$seguido->foto_perfil")) ? "/storage/foto_perfil/$seguido->id/$seguido->foto_perfil" :'/img/chico.png'}}>
            <br>
          {{$seguido['usuario']}}
        </li></a><hr>  
      @empty  
      
      <span class="border border-danger">Este usuario no sigue a nadie </span>
      @endforelse
      </ul>  
      
      
    </div> <br> 

    <div class="seguidores ">
      <a href="#"><button type="button" class="btn btn-primary busqueda">Seguidores: <span><b>{{$usuario->seguidores->count()}} </b></span></button></a> 
      <ul class="lista-amigos">
        @forelse($usuario->seguidores->take(7) as $seguidor)
        <li>
          <a href="/users/{{$seguidor->id}}"><img src={{(Storage::exists("/foto_perfil/$seguidor->id/$seguidor->foto_perfil")) ? "/storage/foto_perfil/$seguidor->id/$seguidor->foto_perfil" :'/img/chico.png'}}>
            <br>
          {{$seguidor['usuario']}}
        </li></a><hr>
        @empty 
        <span class="border border-danger">Este usuario no sigue a nadie </span>
        @endforelse
      </ul>  
    </div>
   @endsection
 </div>   
 <script src="{{asset('/js/perfil.js')}}" type="module"></script>

 

 