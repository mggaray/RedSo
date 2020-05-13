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
      <div class="ultimos-posteos contenedor">
        <div class="contenedor-posteos-controles">
          <h3>Últimos posteos</h3>
          <div class="indicadores">

          </div>
        </div>
  
        <div class="contenedor-principal">
          <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
          
          <div class="contenedor-carousel">
            <div class="carousel">
              <div class="posteo">
                <div id="divUltimosPosteos"></div>
              </div>
            </div>
          </div>
  
          <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
        </div>
      </div>

      <h2>Posteos</h2> 
      @forelse($posteos as $posteo)
      <div class="post">
      <h3 class="Usuario"><a href="/users/{{$posteo->id}}">{{$posteo->usuario}}</a></h3>
        <hr>
      <p class="post-text">{{$posteo->contenido}}</p> 
      
      <p class="align-text-bottom text-right muted small">{{date('d/m/Y',strtotime($posteo->fechaCreacion))}}&nbsp;&nbsp;<b>{{date('H:i',strtotime($posteo->fechaCreacion))}}h</b></p> 

      <a href="#" class="text-left align-text-bottom  muted small">Comentarios</a> 
      <form action="/comentar" method="POST"> 
        @csrf
        <div class="form-group"> 
          <input type="hidden" name="postId" value={{$posteo->id}}>
          <textarea class="form-control" id="comentario" rows="3" name="comentario"></textarea> <br>
          <button type="submit" class="btn btn-primary">Comentar</button>
      </form>
      <span class="border-bottom"></span>
      </div> 
      </div> 
      @empty 
      <h1>Sin posteos</h1>
      @endforelse 
   {{$posteos->links()}}
    </div>
  </div>
</div> 

@endsection

@section('scripts')
  <script src="https://kit.fontawesome.com/c57a089669.js" crossorigin="anonymous"></script>
  <script src="{{asset('/js/carousel.js')}}"></script>
  <script>let posts = <?php echo json_encode($calesita); ?>;</script>
@endsection