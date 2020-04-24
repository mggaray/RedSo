@extends('layouts.plantilla')

@section('titulo')
    RedSo
@endsection

@section('contenido')

<div class="body-perfil">
  <div class="row">
    <div class="posteos col-md-6 ">

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
              <input type="hidden" name="origen" value="home">
              <div class="publicar">Publicación</div>
              <div class="mensaje">
                  <textarea name="posteo" id="posteo"></textarea>
              </div>
              <div class="botones">
                  <label for="imagen">Agregar una imagen</label>
                  <input type="file" name="imagen">
                  <button type="submit" class="btn btn-dark">Publicar</button>
              </div>
          </form>
      </div>
      <br>

      <h2>Posteos</h2> 
      @forelse($posteos as $posteo)
      <div class="post">
      <h3 class="Usuario">{{$posteo->usuario}}</h3>
        <hr>
      <p class="post-text">{{$posteo->contenido}}</p> 
      
      <p class="align-text-bottom text-right muted small">{{date('d/m/Y-H:i',strtotime($posteo->fechaCreacion))}}h</p> 

      <a href="#" class="text-left align-text-bottom  muted small">Comentarios()</a>
      </div> 
      @empty 
      <h1>Sin posteos</h1>
      @endforelse 
   {{$posteos->links()}}
    </div>
  </div>
</div> 

@endsection
