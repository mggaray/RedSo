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
                    <button type="submit" class="btn btn-dark">Publicar</button>
                </div>
            </form>
        </div>
        <br>
        <div class="ultimos-posteos contenedor d-md-none">
          <div class="contenedor-posteos-titulo">
            <h3>Últimos posteos</h3>
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
        @forelse($posteosTEST as $posteo)
        <div class="post"> 
          @if(Auth::user()->admin() || $usuarioLogueado->id == $posteo->user->id)
          <form action="/eliminarPost" method="POST" class="borrarPost">  
            @csrf
            <input type="hidden" name="postId" value={{$posteo->id}}> 
            <input type="hidden" name="userId" value={{$posteo->user->id}}> 
            <input type="hidden" name="desde" value="home"> 
          <button type="button" class="close" aria-label="Close"> 
            <span aria-hidden="true">&times;</span>
          </button> 
          </form>
           
          @endif 
        <h3 class="Usuario"><a href="/users/{{$posteo->user->id}}"><img src="storage/foto_perfil/{{$posteo->user->id}}/{{$posteo->user->foto_perfil}}" alt="">{{$posteo->user->usuario}}</a></h3>
          <hr>
        <p class="post-text">{{$posteo->contenido}}</p> 
        
        <p class="align-text-bottom text-right muted small">{{date('d/m/Y',strtotime($posteo->fechaCreacion))}}&nbsp;&nbsp;<b>{{date('H:i',strtotime($posteo->fechaCreacion))}}h</b></p> 
  
      
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
          <input type="hidden" name="origen" value="home">
          <textarea class="form-control" id="comentario" rows="3" name="comentario"></textarea> <br>
          <button type="submit" class=" btn-comentar">Comentar</button>
      </form> 
    </div>
      <span class="border-bottom"></span>
      </div> 
      </div> 
      @empty 
      <h1>Sin posteos</h1>
      @endforelse  
      <div class="container-fluid">
      {{$posteos->links()}}
    </div>
    </div>
  </div> 

@endsection

@section('scripts')
  <script src="https://kit.fontawesome.com/c57a089669.js" crossorigin="anonymous"></script>
  <script src="{{asset('/js/carousel.js')}}"></script>
  <script>let posts = <?php echo json_encode($calesita); ?>;</script> 
   <script src="{{asset('/js/perfil.js')}}" type="module"></script>
@endsection