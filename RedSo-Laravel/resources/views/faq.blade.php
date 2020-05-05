@extends('layouts.plantilla')

@section('titulo')
    RedSo - F.A.Q
@endsection

@section('contenido')
<div class="container">
    <div class="row">
      <div class="col-sm-12">
          <h1>Preguntas frecuentes<h1>
      </div>
      
    </div>
    <div class="container">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
        <div id="accordion">
          <div class="card">
            <div class="card-header pregunta">
              <a class="card-link" data-toggle="collapse" href="#collapseOne">
                <h5>Pregunta 1</h5>
              </a>
            </div>
            <div id="collapseOne" class="collapse" data-parent="#accordion">
              <div class="card-body respuesta">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header pregunta">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                  <h5>Pregunta 2</h5>
            </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
              <div class="card-body respuesta">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header pregunta">
              <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                  <h5>Pregunta 3</h5>
              </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
              <div class="card-body respuesta">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('scripts')
<script src="{{asset('/js/faq.js')}}"></script>
@endsection