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
        <br> 
        @if($bandera == false) 
      <a href="/seguirUsuario/{{$usuario['id']}}"><button type="button" class="btn-seguir-user"> Seguir </button></a>
      @else 
      <a href="/dejarUsuario/{{$usuario['id']}}"><button type="button" class="btn btn-danger">Dejar de Seguir</button></a>
      @endif
        @endsection
       
        @section('nombre'){{$usuario->nombre}}@endsection
        @section('apellido') {{$usuario->apellido}} @if($usuario->admin())  
        <span class="badge badge-warning">Administrador</span>
        @endif @endsection
        @section('ciudad') {{$usuario->ciudad}}@endsection
        @section('fecha_nacimiento'){{date('d-m-Y',strtotime($usuario->cumpleanios))}} <br><br><br>
        @if(Auth::user()->admin())  
          @unless($usuario->admin())  
          <form action="/hacerAdministrador" method="POST"> 
            @csrf
          <button type="submit" class="btn btn-warning">Hacer administrador</button> 
          <input type="hidden" name="userId" value={{$usuario->id}}>
          </form>
          @endunless
        @endif
        @endsection 

        
        
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
      <h3 class="Usuario"><a href="/users/{{$posteo->user->id}}"><img src="/storage/foto_perfil/{{$usuario->id}}/{{$usuario->foto_perfil}}" alt="">{{$posteo->user->usuario}}</a></h3>
       <hr>
     <p class="post-text">{{$posteo['contenido']}}</p> 
     <p class="align-text-bottom text-right muted small">{{date('d-m-Y',strtotime($posteo->fechaCreacion))}}</p> 
     <a href="/comentarios/{{$posteo->id}}" class="comentarios-titulo">Comentarios ({{$posteo->comentarios->count()}})</a>  
     <div class="d-none comentariosShow">
      @forelse ($posteo->comentarios as $comentario)
          <hr>
    <div class="container  rounded mb-3 ">
        <div class="post shadow-lg p-3 mb-5 bg-white rounded"> 
            @if(Auth::user()->admin() || Auth::id() == $comentario->user_id)
            <form action="/eliminarComentario" method="POST" class="borrarComentario">  
              @csrf
              <input type="hidden" name="comentarioId" value={{$comentario->id}}> 
              <input type="hidden" name="userId" value={{$posteo->user->id}}> 
              <input type="hidden" name="postId" value={{$posteo->id}}> 
              <input type="hidden" name="desde" value="posteo"> 
            <button type="button" class="close" aria-label="Close"> 
              <span aria-hidden="true">&times;</span>
            </button> 
            </form>
             
            @endif 
            <a href="/users/{{$comentario->user->id}}"><h3 class="Usuario text-dark"><img src="/storage/foto_perfil/{{$comentario->user->id}}/{{$comentario->user->foto_perfil}}"alt="">{{$comentario->user->usuario}}</h3></a>
            <hr>
            <p class="post-text">{{$comentario->contenido}}</p>
            <p class="align-text-bottom text-right muted small">{{date('d/m/Y',strtotime($comentario->created_at))}}&nbsp;&nbsp;<b>{{date('H:i',strtotime($comentario->created_at))}}h</b></p> 
        </div>
    </div>
    @empty 
    <h3></h3> 
    <hr>
    @endforelse  

    <form action="/comentarios/{{$posteo->id}}" method="POST"> 
      @csrf
      <div class="form-group"> 
        <input type="hidden" name="postId" value={{$posteo->id}}> 
        <input type="hidden" name="origen" value="perfil">
        <textarea class="form-control" id="comentario" rows="3" name="comentario"></textarea> <br>
        <button type="submit" class=" btn-comentar">Comentar</button>
    </form> 
    </div>
    </div>
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
      <a href="#"><button type="button" class="btn-amigos-user">Seguidos: <span><b>{{$usuario->seguidos->count()}}</b></span></button></a>  
      <ul class="lista-amigos">
        @forelse($usuario->seguidos->take(7) as $seguido)
        <li>
          <a class="nombre-amigo" href="/users/{{$seguido->id}}"><img class="img-amigos-perfil"  src={{(Storage::exists("/foto_perfil/$seguido->id/$seguido->foto_perfil")) ? "/storage/foto_perfil/$seguido->id/$seguido->foto_perfil" :'/img/chico.png'}}>
            <br>
          {{$seguido['usuario']}}
        </li></a><hr>  
      @empty  
      
      <span class="no-sigue">Este usuario no sigue a nadie </span>
      @endforelse
      </ul>  
      
      
    </div> <br> 

    <div class="seguidores ">
      <a href="#"><button type="button" class="btn-amigos-user">Seguidores: <span><b>{{$usuario->seguidores->count()}} </b></span></button></a> 
      <ul class="lista-amigos">
        @forelse($usuario->seguidores->take(7) as $seguidor)
        <li>
          <a class="nombre-amigo" href="/users/{{$seguidor->id}}"><img  class="img-amigos-perfil" src={{(Storage::exists("/foto_perfil/$seguidor->id/$seguidor->foto_perfil")) ? "/storage/foto_perfil/$seguidor->id/$seguidor->foto_perfil" :'/img/chico.png'}}>
            <br>
          {{$seguidor['usuario']}}
        </li></a><hr>
        @empty 
        <span class="no-sigue">Este usuario no tiene seguidores</span>
        @endforelse
      </ul>  
    </div>
   @endsection
 </div>   
 <script src="{{asset('/js/perfil.js')}}" type="module"></script>

 

 