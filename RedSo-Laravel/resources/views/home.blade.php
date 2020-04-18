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
      <div class="post">
        <h3 class="Usuario">{{$usuarioLogueado->usuario}}</h3>
        <hr>
        <p class="post-text"></p>
      </div>
    </div>
  </div>
</div> 

@endsection
