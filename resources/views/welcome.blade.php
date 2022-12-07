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
		<title>Bienvenidos</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   		 <link rel="icon" href=" {{ url('img/diente.png') }} " type="image/icon type">

		<link rel="stylesheet" type="text/css" href="{{ url('css/botn-fijo.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/video.css')}}">

		<!--
 <style>
      .banner-image {
        background-image: url('img/fondo.png');
        background-size: cover;
      }
</style>
        --> 
 
  


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
              <a class="nav-link text-white bg-primary" href=" {{ url('/') }} ">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href=" {{ url('servis') }} ">Servicios</a>
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

    <!-- Banner Image  -->
        <div class="banner-image w-80 vh-100 d-flex justify-content-center align-items-center">
      <div class="container text-center">
  <div class="row">
    <div class="col">
        <a class="nav-link text-white" href=" {{ url('loginodonto') }} ">
            <img src="{{url('img/logo-diente.png')}}" alt="Bootstrap" width="200" height="200">
        </a>
<div class="text-with">
     <a class="nav-link text-white" href=" {{ url('loginodonto') }} ">
         <h2 class="text-dark">Odontología</h2>
        </a>
    </div>
      </div>
      
    <div class="col">
        <a class="nav-link text-white" href=" {{ url('loginoftalmo') }} ">
            <img src="{{url('img/logo-ojo.png')}}" alt="Bootstrap" width="230" height="200">
        </a>
        <div class="text-white">
      <a class="nav-link text-white" href=" {{ url('loginoftalmo') }} ">
          <h2 class="text-dark">Oftalmología</h2>
        </a>
    </div>
      </div>
  </div>
</div>
    </div>
        
      <div class="video-fondo">
        <video src=" {{ url('video/1.mp4') }} " autoplay="true" muted="true" loop="true" poster="">
            
            </video>
          
        </div>
        
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
