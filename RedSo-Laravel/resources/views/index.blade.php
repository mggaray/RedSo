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
  
      <img class="foto-index" src="img/redso1.jpg" alt="">
  
    </div>
  
    <div class="sub-index">
      <p>Subi tus pensamientos e ideas.<br>
        Sos libre para expresarte!
      </p> 
      <img class="foto-index" src="img/redso2.jpg" alt="">
    </div> 
  
  <div class="opciones-index">
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
</div>
  
  <div class="footer-index">
      <div>
        <h4>RedSo</h4>
        <p>Proyecto integrador realizado para el
          curso Full Stack de Digital House</p>
        <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
      </div>
      <div class="col-lg-3 col-xs-12 links">
        <h4>Links</h4>
          <ul style="list-style-type:none;" class="m-0 p-0">
            <li><a href="/">Home</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Registrarse</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="/faq">F.A.Q</a></li>
          </ul>
      </div>
      <div>
        <h4>Contacto</h4>
        <p>Rosario, Argentina</p>
        <p>0800-333-REDSO</p>
        <p>info@redso.com</p>
      </div>
  </div>

      <div class="copyright">
        <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
      </div>
  </div>
</div>
    
@endsection