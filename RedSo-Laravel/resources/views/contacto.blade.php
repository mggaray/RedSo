@extends('layouts.plantilla')

@section('titulo')
    RedSo - Contacto
@endsection

@section('contenido')
<div class="container contacto">
    <form id="contact-form" method="post" action="/contacto" role="form" class="contacto">
        @csrf
        
        <div class="messages"><h1>Contacto</h1></>
  
        <div class="controls">
  
            <div class="row">
                <div class=" col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="form_name">Nombre *</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Ingrese su nombre *" required="required" data-error="Este campo es obligatorio." value="{{old('name')}}">
                        @error('name')
                            <span class="" role="alert">
                                @dump($message)
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="form_email">Email *</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Ingrese su email *" required="required" data-error="Este campo es obligatorio." value="{{old('email')}}">
                        @error('email')
                            <span class="" role="alert">
                                @dump($message)
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="form_subject">Asunto *</label>
                        <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Ingrese un asunto *" required="required" data-error="Este campo es obligatorio."value="{{old('subject')}}">
                        @error('subject')
                            <span class="" role="alert">
                                @dump($message)
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_message">Mensaje *</label>
                    <textarea id="form_message" name="content" class="form-control" placeholder="Escriba su mensaje *" rows="4" required="required" data-error="Escriba un pensaje." value="{{old('content')}}"></textarea>
                    @error('content')
                        <span class="" role="alert">
                            {{-- @dump($message) --}}
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <input class="submit" type="submit" value="Enviar">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted">
                        <strong>*</strong> Campos obligatorios.
                    </p>
                </div>
            </div>
        </>
  
    </form>
  </div>
@endsection 
@section('scripts')  
<script src="{{asset('/js/contacto.js')}}" type="module"></script>
@endsection