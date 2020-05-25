@extends('layouts.plantilla') 

@section('titulo') 
    Posteo de {{$posteo->user->usuario}} 
@endsection  
@section('contenido')  
<div class="post">
    <h3 class="Usuario"><img src="/storage/foto_perfil/{{$posteo->user->id}}/{{$posteo->user->foto_perfil}}"alt="">{{$posteo->user->usuario}}</h3>
      <hr>
    <p class="post-text">{{$posteo->contenido}}</p> 
    
    <p class="align-text-bottom text-right muted small">{{date('d/m/Y',strtotime($posteo->fechaCreacion))}}&nbsp;&nbsp;<b>{{date('H:i',strtotime($posteo->fechaCreacion))}}h</b></p> 

    <a href="#" class="text-left align-text-bottom  muted small">Comentarios</a>  

@forelse ($posteo->comentarios as $comentario)

    <div class="container border border-dark rounded mb-3">
        <div class="post">
            <h3 class="Usuario"><img src="/storage/foto_perfil/{{$comentario->user->id}}/{{$comentario->user->foto_perfil}}"alt="">{{$comentario->user->usuario}}</h3>
            <hr>
            <p class="post-text">{{$comentario->contenido}}</p>
            <p class="align-text-bottom text-right muted small">{{date('d/m/Y',strtotime($comentario->created_at))}}&nbsp;&nbsp;<b>{{date('H:i',strtotime($comentario->created_at))}}h</b></p> 
        </div>
    </div>
    @empty 
    <h3>No hay comentarios</h3>
    @endforelse
    <form action="/comentarios/{{$posteo->id}}" method="POST"> 
      @csrf
      <div class="form-group"> 
        <input type="hidden" name="postId" value={{$posteo->id}}>
        <textarea class="form-control" id="comentario" rows="3" name="comentario"></textarea> <br>
        <button type="submit" class="btn btn-primary">Comentar</button>
    </form>
    <span class="border-bottom"></span>
    </div> 
    </div> 
@endsection

