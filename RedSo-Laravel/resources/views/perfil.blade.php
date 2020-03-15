@extends('layouts.plantilla')
 @section("titulo")
  RedSo - Perfil
  @endsection
 @section("principal")


 @section('contenido')
 <div class="body-perfil">
   <div class="header-perfil">
    <br>
    <div class="foto-perfil">
        <img src= "/storage/foto_perfil/{{$usuarioLogueado->id}}/{{$usuarioLogueado->foto_perfil}}">
    </div>
    <div class="info-perfil">
       <br><h1 class="nombre">{{$usuarioLogueado->nombre}} </h1><hr>
       <ul class="info-perfil">
         <br><li>Nombre: {{$usuarioLogueado->nombre}}</li><br><hr>
         <br><li>Apellido: {{$usuarioLogueado->apellido}}</li><br><hr>
         <br><li>Ciudad: </li><br><hr>
         <br><li>Fecha de Nacimiento: dd/mm/aaaa</li>
       </ul>
    </div>
   </div>
   <div class="posteos">
      
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
   <div class="amigos">
     <h2 class="amigos-title"> Amigos </h2><br>
     <ul class="lista-amigos">
       <a href="perfil_amigo.php"><li><img src="img/chico.png">Amigo 1</li><hr></a>
       <li><img src="img/chico.png">Amigo 2</li><hr>
       <li><img src="img/chico.png">Amigo 3</li><hr>
       <li><img src="img/chico.png">Amigo 4</li><hr>
       <li><img src="img/chico.png">Amigo 5</li><hr>
       <li><img src="img/chico.png">Amigo 6</li><hr>
       <li><img src="img/chico.png">Amigo 7</li><hr>
       <li><img src="img/chico.png">Amigo 8</li>
     </ul>
   </div>
 </div>
 @endsection
   