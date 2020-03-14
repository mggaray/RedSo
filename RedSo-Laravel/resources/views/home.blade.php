@extends('layouts.plantilla')

@section('titulo')
    RedSo
@endsection

@section('contenido')

<div class="body-perfil">
  <div class="row">
    <div class="posteos col-md-6 ">

      <div class="publicacion">
          <form method="post" action="" enctype="multipart/form-data">
              <div class="publicar">Publicación</div>
              <div class="mensaje">
                  <textarea name="posteo" id="posteo"></textarea>
              </div>
              <div class="botones">
                  <button class="btn btn-secondary">Subir imagen</button>
                  <button type="submit" class="btn btn-dark">Publicar</button>
              </div>
          </form>
      </div>
      <br>

      <h2>Posteos</h2>
      <div class="post">
        <h3 class="Usuario">{{$usuarioLogueado->usuario}}</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
      </div>
      <div class="post">
        <h3 class="Usuario">{{$usuarioLogueado->usuario}}</h3><hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
      </div>
      <div class="post">
        <h3 class="Usuario">{{$usuarioLogueado->usuario}}</h3><hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
      </div>
      <div class="post">
        <h3 class="Usuario">{{$usuarioLogueado->usuario}}</h3><hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
      </div>
    </div>
  </div>
</div> 

@endsection
