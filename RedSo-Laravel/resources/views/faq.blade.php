@extends('layouts.plantilla')

@section('titulo')
    RedSo - F.A.Q
@endsection

@section('contenido')

<div class="container faq">
  <div class="row">
    <div class="col-sm-12">
      <h1>Preguntas Frecuentes</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam eius officia fugit asperiores explicabo. Neque fuga officiis dolores soluta. Praesentium, delectus voluptatibus maiores qui fugit molestias labore suscipit a earum ab quam in minus excepturi laudantium dignissimos doloribus rem tempora architecto! Adipisci rerum eius asperiores temporibus architecto laboriosam maxime ullam?</p>
    </div>
    <div class="col-sm-12 FAQ">
      <div class="preguntas pregunta-1">
        <h5>Pregunta 1</h5>
      </div>
      <div class="respuesta-1 respuesta" >
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod similique vero molestias aliquid, molestiae consequuntur nulla laborum laboriosam accusantium, neque deserunt quia placeat eaque nesciunt possimus, suscipit non repellat? Itaque!</p>
      </div>

      <div class="preguntas pregunta-2">
        <h5>Pregunta 2</h5>
      </div>
      <div class="respuesta-2 respuesta">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod similique vero molestias aliquid, molestiae consequuntur nulla laborum laboriosam accusantium, neque deserunt quia placeat eaque nesciunt possimus, suscipit non repellat? Itaque!</p>
      </div>

      <div class="preguntas pregunta-3">
        <h5>Pregunta 3</h5>
      </div>
      <div class="respuesta-3 respuesta">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod similique vero molestias aliquid, molestiae consequuntur nulla laborum laboriosam accusantium, neque deserunt quia placeat eaque nesciunt possimus, suscipit non repellat? Itaque!</p>
      </div>

    </div>

  </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('/js/faq.js')}}"></script>
@endsection