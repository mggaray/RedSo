@extends('layouts.plantilla_perfil')
 @section("titulo")
  RedSo - Perfil
  @endsection
 



        @section('foto')<img src= "/storage/foto_perfil/{{$usuarioLogueado->id}}/{{$usuarioLogueado->foto_perfil}}"> @endsection
        
        @section('usuario'){{$usuarioLogueado->usuario}} @endsection
       
        @section('nombre'){{$usuarioLogueado->nombre}}@endsection
        @section('apellido') {{$usuarioLogueado->apellido}}@endsection
        @section('ciudad') {{$usuarioLogueado->ciudad}}@endsection
        @section('fecha_nacimiento'){{$usuarioLogueado->cumpleanios}}@endsection
      
      @section('posteos')
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
   @endsection


   @section('amigos')
     <div class="seguidores segleft">
      <h2 class="amigos-title"> Seguidos </h2><br>
      <ul class="lista-amigos">
        @forelse($usuarioLogueado->seguidos as $seguido)
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
        @forelse($usuarioLogueado->seguidores as $seguidor)
        <li><img src="/img/chico.png">{{$seguidor['usuario']}}</li><hr>
        @empty 
        Este usuario no tiene seguidores
        @endforelse
      </ul> 
      <button type="button" class="btn btn-primary busqueda">Ver seguidores</button> 
    </div>
   @endsection
 </div>
 
   