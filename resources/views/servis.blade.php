<?/**
*============================================================================
* Name        : welcome
* Author      : Yovan Y. Enovore
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
        
 <!-- Navbar  -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 bg-dark" style="background-image: linear-gradient(to right, #0f2027, #203a43, #2c5364);">
      <div class="container">
       
      <img src="{{url('img/logo.png')}}" alt="YNV@vanclama" width="95" height="60">
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
              <li class="nav-item">
                    
              </li>
              
              <li class="nav-item">
                  <button onclick="location.href = '{{ route('register') }}'" type="button" class="btn btn-success">Registrarse</button> 
              </li>
          </ul>
        </div>
      </div>
    </nav>
     <!-- Navbar  -->
     
<br><br><br><br>


<!-- scroll  -->


<div class="row">
  <div class="col-2">
    <div class="col-2 fixed-top top-0 start-0">
      <br><br><br><br>
    <div id="list-example" class="list-group text-center">
    
      <a class="list-group-item list-group-item-action" href="#item-1">
        <img src="{{url('img/logo-diente.png')}}" alt="YNV@vanclama" width="30" height="30">
      Servicios</a>
      <nav class="nav nav-pills flex-column">
          <a class="nav-link link-success ms-3 my-1" href="#list-item-1-1">Habilitado</a>
          <a class="nav-link link-secondary ms-3 my-1" href="#list-item-1-2">Inabilitado</a>
          <a class="nav-link link-warnig ms-3 my-1" href="#list-item-1-3">muy pronto</a>
        </nav>

        <a class="list-group-item list-group-item-action" href="#item-2">Servicios</a>
      <nav class="nav nav-pills flex-column">
          <a class="nav-link link-success ms-3 my-1" href="#list-item-2-1">Habilitado</a>
          <a class="nav-link link-secondary ms-3 my-1" href="#list-item-2-2">Inabilitado</a>
          <a class="nav-link link-warnig ms-3 my-1" href="#list-item-2-3">muy pronto</a>
        </nav>
  </div>
</div>
</div>

<div class="col-10">
  <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
 
  <div href="item-1">
<h2>1</h2>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=" {{ url('/img/servicio-odonto.png') }} " class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src=" {{ url('/img/carrusel/5-d.png') }} " class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src=" {{ url('/img/carrusel/3-d.png') }} " class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<div href="item-2">
<h2>2</h2>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src=" {{ url('/img/servicio-odonto.png') }} " class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src=" {{ url('/img/carrusel/5-d.png') }} " class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src=" {{ url('/img/carrusel/3-d.png') }} " class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

  </div>
  </div>
</div>

     
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
