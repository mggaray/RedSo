@extends('layouts.plantilla')

@section('titulo')
    RedSo
@endsection

@section('contenido')

     <div class="seguidos-titulo">
        <h1> Seguidos por <b>{{$usuarioLogueado->usuario}}</b></h1>
     </div>

        <div class="panel-seg">
            
              <div class="panel-seguidos">
               <button type="button" class="btn-panel-seguidores">Seguidos <span><b>{{$usuarioLogueado->seguidos->count()}}</b></span></button>
               <ul class="panel-amigos">
                 @forelse($usuarioLogueado->seguidos as $seguido)
                 <li>
                    <div class="panel-container">
                        <a class="panel-nombre" href="/users/{{$seguido->id}}">
                            <img class="panel-fotos" src={{(Storage::exists("/foto_perfil/$seguido->id/$seguido->foto_perfil")) ? "/storage/foto_perfil/$seguido->id/$seguido->foto_perfil" :'/img/chico.png'}}>
                         {{$seguido['usuario']}}</a>
                        @if ($seguido==true)
                            <div class="container-seguir">
                                <a href="/dejarUsuario/{{$seguido['id']}}"><button type="button" class="btn-dejar-seguir">Dejar de Seguir</button></a>
                                <a href="/dejarUsuario/{{$seguido['id']}}"><button type="button" class="btn-dejar-seguir-mobile">x</button></a>
                         @else 
                            <a href="/seguirUsuario/{{$seguido['id']}}"><button type="button" class="btn-seguir-mobile"> Seguir </button></a>
                        @endif
                            </div>
                    </div>
                </li>
                    @empty 
                        <div class="no-sigue">Este usuario no sigue a nadie </div>  
                 @endforelse
               </ul>
            </div> 
         
            <div class="panel-seguidores ">
               <button type="button" class="btn-panel-seguidores">Seguidores <span><b>{{$usuarioLogueado->seguidores->count()}} </b></span></button> 
               <ul class="panel-amigos">
                 @forelse($usuarioLogueado->seguidores as $seguidor)
                 <li>
                    <div class="panel-container">
                     <a class="panel-nombre" href="/users/{{$seguidor->id}}">
                    <img class="panel-fotos" src={{(Storage::exists("/foto_perfil/$seguidor->id/$seguidor->foto_perfil")) ? "/storage/foto_perfil/$seguidor->id/$seguidor->foto_perfil" :'/img/chico.png'}}>
                   {{$seguidor['usuario']}}</a>
                    </div>
                 </li>
                 @empty 
                 <div>Este usuario no tiene seguidores</div> 
                 @endforelse
                </div>
               </ul>
             </div>
        </div>

@endsection
