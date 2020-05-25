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
        
        @section('usuario'){{$usuarioLogueado->usuario}} @endsection
       
        @section('nombre'){{$usuarioLogueado->nombre}}@endsection
        @section('apellido') {{$usuarioLogueado->apellido}}@endsection
        @section('ciudad') {{$usuarioLogueado->ciudad}}@endsection
        @section('fecha_nacimiento'){{$usuarioLogueado->cumpleanios}}@endsection
      
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
        <input type="hidden" name="postId" value={{$posteo->id}}> 
        <input type="hidden" name="userId" value={{$usuarioLogueado->id}}>
      <button type="button" class="close" aria-label="Close"> 
        <span aria-hidden="true">&times;</span>
      </button>
      </form>
       
       <h3 class="Usuario">{{$usuarioLogueado->usuario}}</h3>
       
       <hr>
     <p class="post-text">{{$posteo['contenido']}}</p>
     <p class="align-text-bottom text-right muted small">{{date('d-m-Y',strtotime($posteo->fechaCreacion))}}</p> 
     @dump($posteo)
     <a href="/comentarios/{{$posteo->id}}" class="text-left align-text-bottom  muted small">Comentarios</a>
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
      <a href="#"><button type="button" class="btn btn-primary busqueda">Seguidos: <span><b>{{$usuarioLogueado->seguidos->count()}}</b></span></button></a>  
      <h2 class="amigos-title"> </h2><br>
      <div class="container">
      <ul class="lista-amigos">
        @forelse($usuarioLogueado->seguidos->take(7) as $seguido)
        <li>
          <a href="/users/{{$seguido->id}}"><img src={{(Storage::exists("/foto_perfil/$seguido->id/$seguido->foto_perfil")) ? "/storage/foto_perfil/$seguido->id/$seguido->foto_perfil" :'/img/chico.png'}}>
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
      <a href="#"><button type="button" class="btn btn-primary busqueda">Seguidores: <span><b>{{$usuarioLogueado->seguidores->count()}} </b></span></button></a> 
      <div class="container">
      <ul class="lista-amigos">
        @forelse($usuarioLogueado->seguidores->take(7) as $seguidor)
        <li>
          <a href="/users/{{$seguidor->id}}"><img src={{(Storage::exists("/foto_perfil/$seguidor->id/$seguido->foto_perfil")) ? "/storage/foto_perfil/$seguidor->id/$seguidor->foto_perfil" :'/img/chico.png'}}>
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

  
 

 
   