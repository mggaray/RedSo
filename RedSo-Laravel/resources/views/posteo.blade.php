@extends('layouts.plantilla') 

@section('titulo') 
    Posteo de {{$posteo->user->usuario}} 
@endsection  
@section('contenido')  
<div class="post-comentario">
    <a href="/users/{{$posteo->user->id}}"><h3 class="Usuario"><img src="/storage/foto_perfil/{{$posteo->user->id}}/{{$posteo->user->foto_perfil}}"alt="">{{$posteo->user->usuario}}</h3></a>
      <hr>
    <p class="post-text">{{$posteo->contenido}}</p> 
    
    <p class="align-text-bottom text-right muted small">{{date('d/m/Y',strtotime($posteo->fechaCreacion))}}&nbsp;&nbsp;<b>{{date('H:i',strtotime($posteo->fechaCreacion))}}h</b></p> 

    <a href="#" class="comentarios-titulo">Comentarios ({{$posteo->comentarios->count()}})</a>  

@forelse ($posteo->comentarios as $comentario)
  <hr>
    <div class="container  rounded mb-3">
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
            <a href="/users/{{$comentario->user->id}}"><h3 class="Usuario"><img src="/storage/foto_perfil/{{$comentario->user->id}}/{{$comentario->user->foto_perfil}}"alt="">{{$comentario->user->usuario}}</h3></a>
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
        <input type="hidden" name="origen" value="posteo">
        <textarea class="form-control" id="comentario" rows="3" name="comentario"></textarea> <br>
        <button type="submit" class="btn btn-primary">Comentar</button>
    </form>
    <span class="border-bottom"></span>
    </div> 
    </div> 
@endsection 


   <script src="{{asset('/js/perfil.js')}}" type="module"></script>

