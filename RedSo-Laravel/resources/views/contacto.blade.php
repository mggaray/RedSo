@extends('layouts.plantilla')

@section('titulo')
    RedSo - Contacto
@endsection

@section('contenido')
<div class="container">
    <form id="contact-form" method="post" action="mailto:info@redso.com" role="form">
        @csrf
  
        <div class="messages"><h1>Contacto</h1></div>
  
        <div class="controls">
  
            <div class="row">
                <div class=" col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="form_name">Nombre *</label>
                        <input id="form_name" type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre *" required="required" data-error="Este campo es obligatorio." value="{{old('nombre')}}">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="form_lastname">Apellido *</label>
                        <input id="form_lastname" type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido *" required="required" data-error="Este campo es obligatorio."value="{{old('apellido')}}">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                        <label for="form_email">Email *</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Ingrese su email *" required="required" data-error="Este campo es obligatorio." value="{{old('email')}}">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="form_message">Mensaje *</label>
                    <textarea id="form_message" name="mensaje" class="form-control" placeholder="Escriba su mensaje *" rows="4" required="required" data-error="Escriba un pensaje." value="{{old('mensaje')}}"></textarea>
                        <div class="help-block with-errors"></div>
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
        </div>
  
    </form>
  </div>
@endsection