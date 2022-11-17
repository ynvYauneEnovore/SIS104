<?/**
*============================================================================
* Name        : welcome
* Author      : Yovan Y. enovore
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
		<title>Bienvenidos</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   		 <link rel="icon" href=" {{ url('img/diente.png') }} " type="image/icon type">

		<link rel="stylesheet" type="text/css" href="{{ url('css/botn-fijo.css')}}">
		
 <style>
      .banner-image {
        background-image: url('img/fondo.png');
        background-size: cover;
      }
    </style>

	</head>
	<body> <!-- Navbar  -->
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
              <a class="nav-link text-white" href=" {{ url('servis') }} ">Servicios</a>
            </li>
             
            <li class="nav-item">
                
            </li>
            <li class="nav-item">
              <a class="nav-link text-white bg-primary" href=" {{ url('nosotros') }} ">Nosotros</a>
            </li>
	<li class="nav-item">
              <a class="nav-link text-white" href=" {{ url('contactanos') }} ">Contáctanos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Banner Image  
    <div class="banner-image w-80 vh-100 d-flex justify-content-center align-items-center">
    </div>
    -->
<footer class="text-center text-white">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #000203;">
    Clínica - VANCLAMA © 2022 Todos los derechos reservados.
  </div>
  <!-- Copyright -->
</footer>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </body>
</html>
