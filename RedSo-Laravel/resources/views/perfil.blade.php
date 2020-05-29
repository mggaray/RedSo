@extends('layouts.plantilla_perfil')
 @section("titulo")
  RedSo - Perfil
  @endsection
 



        @section('foto')
        @if($usuarioLogueado->foto_perfil == null || !(Storage::exists("/foto_perfil/$usuarioLogueado->id/$usuarioLogueado->foto_perfil"))) 
        <img src="/img/chico.png">
        @else
        <img src= "/storage/foto_perfil/{{$usuarioLogueado->id}}/{{$usuarioLogueado->foto_perfil}}">
        @endif
        @endsection
        
        

        @section('usuario'){{$usuarioLogueado->usuario}}  @endsection 
        @section('nombre'){{$usuarioLogueado->nombre}}@endsection
        @section('apellido') {{$usuarioLogueado->apellido}} @if($usuarioLogueado->admin())  
        <span class="badge badge-warning">Administrador</span>
        @endif @endsection
        @section('ciudad') {{$usuarioLogueado->ciudad}}@endsection
        @section('fecha_nacimiento'){{date('d-m-Y',strtotime($usuarioLogueado->cumpleanios))}} @endsection
        @section('editar')
        <div class="editarPerfil">
        <a href= "/editarPerfil"><button class="btn-EditarPerfil" type="button"> Editar perfil</button></a>
        </div>
        @endsection
     
      
      
      @section('posteos')
      <div class="publicacion">
        @if(count($errors)>0)
         <div class="erroresPublicacion">
           <ul>
             @foreach($errors->all() as $error)
             <li>
               {{$error}}
             @endforeach
             </li>
           </ul>
         </div>
         @endif
         
         <form method="post" action="/home" enctype="multipart/form-data">
             {{ csrf_field() }} 
             <input type="hidden" name="origen" value="perfil">
             <div class="publicar">Publicación</div>
             <div class="mensaje">
                 <textarea name="posteo" id="posteo"></textarea>
             </div>
             <div class="botones">
                 <button type="submit" class="btn btn-dark">Publicar</button>
             </div>
         </form>
     </div>
     <h2>Posteos</h2>
     
     @forelse($posteos as $posteo)
     <div class="post"> 
       <form action="/eliminarPost" method="POST" class="borrarPost">  
        @csrf
        <input type="hidden" name="postId" value={{$posteo->id}} readonly> 
        <input type="hidden" name="userId" value={{$usuarioLogueado->id}}>
      <button type="button" class="close" aria-label="Close"> 
        <span aria-hidden="true">&times;</span>
      </button>
      </form>
       
      <h3 class="Usuario"><a href="/users/{{$posteo->user->id}}"><img src="storage/foto_perfil/{{$posteo->user->id}}/{{$posteo->user->foto_perfil}}" alt="">{{$posteo->user->usuario}}</a></h3>
       
       <hr>
     <p class="post-text">{{$posteo['contenido']}}</p>
     <p class="align-text-bottom text-right muted small">{{date('d-m-Y',strtotime($posteo->fechaCreacion))}}</p> 
     <a href="/comentarios/{{$posteo->id}}" class="comentarios-titulo">Ver comentarios ({{$posteo->comentarios->count()}})</a>   
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
      <a href="/seguidores"><button type="button" class="btn-amigos">Seguidos: <span><b>{{$usuarioLogueado->seguidos->count()}}</b></span></button></a>  
      <div class="container">
      <ul class="lista-amigos">
        @forelse($usuarioLogueado->seguidos->take(7) as $seguido)
        <li>
          <a  class="nombre-amigo" href="/users/{{$seguido->id}}"><img class="img-amigos-perfil" src={{(Storage::exists("/foto_perfil/$seguido->id/$seguido->foto_perfil")) ? "/storage/foto_perfil/$seguido->id/$seguido->foto_perfil" :'/img/chico.png'}}>
            <br>
          {{$seguido['usuario']}}
        </li></a><hr> 
      @empty 
      <span class="border border-danger">Este usuario no sigue a nadie </span>
      
      @endforelse
      </ul>
    </div>
     
      


    </div> <br> 

    <div class="seguidores ">
      <a href="/seguidores"><button type="button" class="btn-amigos">Seguidores: <span><b>{{$usuarioLogueado->seguidores->count()}} </b></span></button></a> 
      <div class="container">
      <ul class="lista-amigos">
        @forelse($usuarioLogueado->seguidores->take(7) as $seguidor)
        <li>
          <a class="nombre-amigo" href="/users/{{$seguidor->id}}"><img class="img-amigos-perfil" src={{(Storage::exists("/foto_perfil/$seguidor->id/$seguidor->foto_perfil")) ? "/storage/foto_perfil/$seguidor->id/$seguidor->foto_perfil" :'/img/chico.png'}}>
            <br>
          {{$seguidor['usuario']}}
        </li></a><hr>
        @empty 
        {{-- <div class="border border-danger">Este usuario no tiene seguidores</div> --}}
        
        @endforelse
      </ul>
    </div>
    </div>
   @endsection
   </div>
 </div> 



 <script src="{{asset('/js/perfil.js')}}" type="module"></script>

  
 

 
   