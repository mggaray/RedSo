@extends('layouts.plantilla_perfil')
 @section("titulo")
  RedSo - Perfil
  @endsection
 



        @section('foto')
        @if($usuario->foto_perfil == null) 
        <img src="/img/chico.png">
        @else
        <img src= "/storage/foto_perfil/{{$usuario->id}}/{{$usuario->foto_perfil}}"> 
        @endif
        @endsection
        
        @section('usuario'){{$usuario->usuario}} 
        @if($bandera == false) 
      <a href="/seguirUsuario/{{$usuario['id']}}"><button type="button" class="btn btn-primary busqueda"> Seguir </button></a>
      @else 
      <a href="/dejarUsuario/{{$usuario['id']}}"><button type="button" class="btn btn-danger">Dejar de Seguir</button></a>

      @endif
        @endsection
       
        @section('nombre'){{$usuario->nombre}}@endsection
        @section('apellido') {{$usuario->apellido}}@endsection
        @section('ciudad') {{$usuario->ciudad}}@endsection
        @section('fecha_nacimiento'){{$usuario->cumpleanios}}@endsection
      
      


      @section('posteos')
     <h2>Posteos</h2>
     <div class="post">
       <h3 class="Usuario">{{$usuario->usuario}}</h3>
       <hr>
       <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
     </div>
     <div class="post">
       <h3 class="Usuario">{{$usuario->usuario}}</h3><hr>
       <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
     </div>
     <div class="post">
       <h3 class="Usuario">{{$usuario->usuario}}</h3><hr>
       <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
     </div>
     <div class="post">
       <h3 class="Usuario">{{$usuario->usuario}}</h3><hr>
       <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
     </div> 
   @endsection


   @section('amigos')
     <div class="seguidores segleft">
      <h2 class="amigos-title"> Seguidos </h2><br>
      <ul class="lista-amigos">
        @forelse($usuario->seguidos as $seguido)
      <li><img src="/img/chico.png">{{$seguido['usuario']}}</li><hr> 
      @empty 
      Este usuario no sigue a nadie 
      @endforelse
      </ul>  
      <a href="/busquedaUser"><button type="button" class="btn btn-primary busqueda">Buscar usuarios</button></a>

    </div> <br> 

    <div class="seguidores ">
      <h2 class="amigos-title"> Seguidores </h2><br>
      <ul class="lista-amigos">
        @forelse($usuario->seguidores as $seguidor)
        <li><img src="/img/chico.png">{{$seguidor['usuario']}}</li><hr>
        @empty 
        Este usuario no tiene seguidores
        @endforelse
      </ul> 
      <button type="button" class="btn btn-primary busqueda">Ver seguidores</button> 
    </div>
   @endsection
 </div> 
 