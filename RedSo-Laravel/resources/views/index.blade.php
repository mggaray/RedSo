@extends('layouts.plantilla')
@section('titulo')
    RedSo
@endsection

@section('contenido')


<div class="main-index">
    <div class="sub-index">
      <p>Bienvenidos a RedSo.<br>
         Una red social donde compartir lo que quieras decir con tus amigos<br>
      </p>  
  
      <img src="img/redso1.jpg" alt="">
  
    </div>
  
    <div class="sub-index">
      <p>Subi tus fotos, pensamientos, ideas.<br>
        Sos libre para expresarte!
      </p> 
      <img src="img/redso2.jpg" alt="">
    </div> 
  
  
    <div class="sub-index">
      <p><a href="/login">Logueate</a> si ya tenes cuenta<br>
      </p>
    </div>  
  
    <div class="sub-index">
      <p>
        <a href="/register">Registrate</a> si querés unirte a la comunidad
      </p>
    </div> 
  
  
  </div>
  
  <div class="mt-5 pt-5 pb-5 footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-xs-12 about-company">
        <h2>RedSo</h2>
        <p class="pr-5 text-white-50">Proyecto integrador realizado para el curso Full Stack, Digital House</p>
        <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
      </div>
      <div class="col-lg-3 col-xs-12 links">
        <h4 class="mt-lg-0 mt-sm-3">Links</h4>
          <ul class="m-0 p-0">
            <li>- <a href="/">Home</a></li>
            <li>- <a href="/login">Login</a></li>
            <li>- <a href="/register">Registrarse</a></li>
            <li>- <a href="/contacto">Contacto</a></li>
            <li>- <a href="/faq">F.A.Q</a></li>
          </ul>
      </div>
      <div class="col-lg-4 col-xs-12 location">
        <h4 class="mt-lg-0 mt-sm-4">Contacto</h4>
        <p>Rosario, Argentina</p>
        <p class="mb-0"><i class="fa fa-phone mr-3"></i>0800-333-REDSO</p>
        <p><i class="fa fa-envelope-o mr-3"></i>info@redso.com</p>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col copyright">
        <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
      </div>
    </div>
  </div>
  </div>
    
@endsection