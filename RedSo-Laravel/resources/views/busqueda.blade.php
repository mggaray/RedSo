@extends('layouts.plantilla')  

@section('titulo') Redso - Buscar Usuario 
@endsection  

@section('contenido') 
<div class="container-busqueda">
  <div class="form-busqueda">
      <form action="/busquedaUser" method="POST">
      @csrf 
      <label for="buscar" style="color:black">Ingrese un nombre de usuario</label>
      <input type="text" class="input-busqueda col-lg-*" id="buscar" name="buscar"> 
      <button type="submit" class="btn btn-primary busqueda">Buscar</button>
      </form>  
  </div> 
  



  @if($usuarios)
  <div class="encontrados">
  <h2 > Encontrados: <b>{{$usuarios->count()}}</b> </h2><br>
    <ul class="ul-busqueda"> 
  @endif
      @forelse ($usuarios as $usuario)
    <a href="/users/ {{$usuario['id']}}"><li>{{$usuario['usuario']}}</li></a> <hr>

  
  
  @empty
  
  @endforelse
</ul> 
</div> 
</div>
@endsection

@section("scripts") 
 <script src="https://kit.fontawesome.com/c57a089669.js" crossorigin="anonymous"></script>
  @yield("script") 
@endsection