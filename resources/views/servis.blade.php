<?/**
*============================================================================
* Name        : welcome
* Author      : Yovan Y. enovore
*               2
*               3
*               4
* Version     : 1.01
* Copyright   : VANCLAMA Ⓒ 2022
* Description : Bienvenida.
*============================================================================
*/
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Servicios</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   		 <link rel="icon" href=" {{ url('img/diente.png') }} " type="image/icon type">
		<link rel="stylesheet" type="text/css" href="{{ url('css/botn-fijo.css')}}">
	</head>
	<body> 
        
<nav class="navbar fixed-top navbar-expand-lg navbar-wight p-md-2" 
     style="background-image: linear-gradient(225deg, #67665f 0, #63645b 7.14%, #5e6157 14.29%, #575e52 21.43%, #505b4d 28.57%, #475848 35.71%, #3c5344 42.86%, #2f4f40 50%, #204a3d 57.14%, #0b463c 64.29%, #00423c 71.43%, #003f3d 78.57%, #003c3f 85.71%, #003942 92.86%, #003645 100%);">
      
        <ul class="nav nav-pills">
       
            
            <li class="nav-item">
        <img src="{{url('img/logo.png')}}" alt="YNV@vanclama" width="75" height="50">

    </li>
          <li class="nav-item">
                
            </li>
            
             <li class="nav-item">
      <a class="nav-link link-wight" href=" {{ url('/') }} ">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link link-withe" href="#scrollspyHeading1">Odontologicos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link link-withe" href="#scrollspyHeading2">Micro / Servicios</a>
    </li>
       <li class="nav-item">
      <a class="nav-link link-withe" href="#scrollspyHeading3">Oftalmologicos</a>
    </li>
       <li class="nav-item">
      <a class="nav-link link-wight" href="#scrollspyHeading4">Micro / Servicios</a>
    </li>
       <li class="nav-item">
      <a class="nav-link link-wight" href=" {{ url('/nosotros') }} ">Nosotros</a>
    </li>
  </ul>
</nav>
        <br><br>
        
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-light p-3 rounded-2" tabindex="0">
  <h4 id="scrollspyHeading1"></h4>
  <!--corrusel-->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=" {{ url('img/carrusel/1-d.png') }} " class="d-block w-100" alt="YNV©2022">
    </div>
    <div class="carousel-item">
      <img src=" {{ url('img/carrusel/2-d.png') }} " class="d-block w-100" alt="YNV©2022">
    </div>
    <div class="carousel-item">
      <img src=" {{ url('img/carrusel/3-d.png') }} " class="d-block w-100" alt="YNV©2022">
    </div>
      <div class="carousel-item">
      <img src=" {{ url('img/carrusel/4-d.png') }} " class="d-block w-100" alt="YNV©2022">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
         <!--corrusel-->
  <h1 id="scrollspyHeading2"><br>
      Micro - Servicios</h1>
    <div class="bg-success p-2 text-dark bg-opacity-50">
        <h5>
            Servicios Activos
        </h5>
        </div>

      <!--targetas-->
<div class="row row-cols-1 row-cols-md-3 g-1">
  <div class="col">
    <div class="card h-100">
      <img src=" {{ url('img/targeta/1.png') }} " class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Agenda</h5>
        <p class="card-text">Agenda hoy y despreocupate, nuestro sistema te notificara 
          dias, horas o minutos dependindo de la configuración que elijas.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Última actualización hace 2 días</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src=" {{ url('img/targeta/2.png') }} " class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Servicio de notificación</h5>
        <p class="card-text">Configura los recordatorios de tus citas de una manera fácil e
            intuitiva.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Última actualización hace 1 días</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src=" {{ url('img/targeta/3.png') }} " class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Curiosidades</h5>
        <p class="card-text">Es importante tener en cuenta el cuidade de nuestros dientes ya que 
            no se pueden recuperar de manera natural.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Última actualización hace 4 días</small>
      </div>
    </div>
  </div>
</div>
    <br>
        <!--targetas-->
    
    <div class="bg-info p-2 text-dark bg-opacity-50">
        <h5>Muy pronto . . . 
        </h5>
            </div>

      <!--targetas-->
<div class="row row-cols-1 row-cols-md-3 g-1">
  <div class="col">
    <div class="card h-100">
      <img src=" {{ url('img/targeta/1.png') }} " class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src=" {{ url('img/targeta/2.png') }} " class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src=" {{ url('img/targeta/3.png') }} " class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
        <!--targetas-->
    
    
    
  <h4 id="scrollspyHeading3">Third heading</h4>
  
            <!--corrusel-->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ url('img/carrusel/1-o.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ url('img/carrusel/2-o.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ url('img/carrusel/3-o.png') }}" class="d-block w-100" alt="...">
    </div>
      
       <div class="carousel-item">
      <img src="{{ url('img/carrusel/4-o.png') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"><span class="badge text-bg-primary">Anterior</span></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
         <!--corrusel-->
    
  <h4 id="scrollspyHeading4">Fourth heading</h4>
    
      <!--targetas-->
<div class="row row-cols-1 row-cols-md-3 g-1">
  <div class="col">
    <div class="card h-100">
      <img src=" {{ url('img/targeta/1.png') }} " class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src=" {{ url('img/targeta/2.png') }} " class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src=" {{ url('img/targeta/3.png') }} " class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
        <!--targetas-->
    
</div>
        
        <!--

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 bg-dark">
      <div class="container">
      <img src="{{url('img/logo.png')}}" alt="Bootstrap" width="68" height="45">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href=" {{ url('/') }} ">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white bg-primary" href=" {{ url('servis') }} ">Servicios</a>
            </li>
             
            <li class="nav-item">
                
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href=" {{ url('nosotros') }} ">Nosotros</a>
            </li>
	<li class="nav-item">
              <a class="nav-link text-white" href=" {{ url('contactanos') }} ">Contáctanos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        -->
    <!-- Banner Image
    <div class="banner-image w-80 vh-100 d-flex justify-content-center align-items-center">
    </div>
    -->
<!-- footer -->
<footer class="text-center text-white">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #000203;">
    Clínica - VANCLAMA © 2022 Todos los derechos reservados.
  </div>
  <!-- Copyright -->
</footer>
        <!-- footer -->
        
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-light', 'shadow');
        } else {
          nav.classList.remove('bg-light', 'shadow');
        }
      });
    </script>
        
    </body>
</html>
