@extends('layouts.plantilla')

@section('titulo')
    RedSo - F.A.Q
@endsection

@section('contenido')

<div class="container faq">
  <div class="row">
    <div class="col-sm-12">
      <h1>Preguntas Frecuentes</h1>
      <p>RedSo es una Red Social sin notificaciones, me gusta ni nada de eso. Un sitio para relajarse y compartir pensamientos, opiniones, anecdotas o lo que quieras!</p>
    </div>
    <div class="col-sm-12 FAQ">
      <div class="preguntas">
        <h5>¿Por qué no tiene notificaciones ni me gusta?</h5>
      </div>
        <p class="resp">Las redes sociales pueden causar estrés, por eso hemos quitado varios de los factoras causantes de ello, como son las notificaciones y me gustas. En RedSo no tienes que preocuparte por ello.</p>

      <div class="preguntas">
        <h5>¿Qué contenido puedo ver en RedSo?</h5>
      </div>
        <p class="resp">Puedes seguir a los usuarios que tu quieras y verás solo el contenido de ellos. Así solo verás los posteos de quien tú elijas ver.</p>

      <div class="preguntas">
        <h5>¿Quién regula qué el contenido de RedSo sea apropiado?</h5>
      </div>
        <p class="resp"> Existen múltiples usuarios administradores que pueden eliminar posteos o comentarios ofensivos o inapropiados.</p>

    </div>

  </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('/js/faq.js')}}"></script>
@endsection