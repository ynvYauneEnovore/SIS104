<?/**
*============================================================================
* Name        : welcome
* Author      : Yovan Y. enovore
* Version     : 1.01
* Copyright   : VANCLAMA Ⓒ 2022
* Description : Bienvenida.
*============================================================================
*/?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Llama ya!</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   		 <link rel="icon" href=" {{ url('img/diente.png') }} " type="image/icon type">
		<link rel="stylesheet" type="text/css" href="{{ url('css/botn-fijo.css')}}">
        <link rel="stylesheet" href=" {{ url('css/style.css') }}">
        
		 <style>
      .container1 {
        background-image: url('img/contacto1.png');
        background-size: cover;
      }
    </style>

	</head>
    
	<body> 
        <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 bg-dark opacity-90">
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
              <a class="nav-link text-white" href=" {{ url('nosotros') }} ">Nosotros</a>
            </li>
	<li class="nav-item">
              <a class="nav-link text-white bg-primary" href=" {{ url('contactanos') }} ">Contáctanos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Banner Image  
    <div class="banner-image w-80 vh-100 d-flex justify-content-center align-items-center">
    </div>
    -->
        <br>
        <br><br>
        <br>
        <div class="conteiner text-center">
            <!--fila-->
            <div class="row">
                <!--culumna-->
                <div class="col">
                    <!--targeta-->
                    <div class="card text-center">
                        <!--contenido-->
                        <div class="card-header bg-danger">
                            <h2 class="text-white">Emergéncias</h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ambulancias:</h5>
                            <p class="card-text">Sucursal Sucre</p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                            Contactar
                            </button>
                            <!--ofcanvas-->
                            <div class="offcanvas offcanvas-start text-bg-dark" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="staticBackdropLabel">Conctactos:</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div>
                                        <!--chofer-->
                                        <div class="d-grid gap-2 d-md-block">
                                              Chofer-1
                                            <div class="row">
                                                
                                                <div class="col-10">
                                                    <a class="nav-link text-white" href=" {{ url('loginodonto') }} ">
                                                         <div class="card-header bg-success">
                                                                <h4 class="text-white">Sr. Rodolfo Rojas P.</h4>
                                                             <h6>Activo</h6>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-2">
                                                    <a class="nav-link text-white" href=" {{ url('loginodonto') }} ">
                                                        <img src="{{url('img/llamar.png')}}" alt="Bootstrap" width="50" height="50">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--chofer-->
                                        
                                         <!--chofer-->
                                        <div class="d-grid gap-2 d-md-block">
                                              Chofer-2
                                            <div class="row">
                                                
                                                <div class="col-10">
                                                    <a class="nav-link text-white" href=" {{ url('loginodonto') }} ">
                                                         <div class="card-header bg-danger">
                                                                <h4 class="text-white">Sr. Pedro Antesana D.</h4>
                                                             <h6>Inactivo</h6>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-2">
                                                    <a class="nav-link text-white" href=" {{ url('loginodonto') }} ">
                                                        <img src="{{url('img/llamar.png')}}" alt="Bootstrap" width="50" height="50">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--chofer-->
                                        
                                         <!--chofer-->
                                        <div class="d-grid gap-2 d-md-block">
                                              Chofer-3
                                            <div class="row">
                                                
                                                <div class="col-10">
                                                    <a class="nav-link text-white" href=" {{ url('loginodonto') }} ">
                                                         <div class="card-header bg-success">
                                                                <h4 class="text-white">Sr. Daniel Monetero R.</h4>
                                                             <h6>Activo</h6>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-2">
                                                    <a class="nav-link text-white" href=" {{ url('loginodonto') }} ">
                                                        <img src="{{url('img/llamar.png')}}" alt="Bootstrap" width="50" height="50">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--chofer-->
                                        
                                        
                                         <!--chofer-->
                                        <div class="d-grid gap-2 d-md-block">
                                              Chofer-4
                                            <div class="row">
                                                
                                                <div class="col-10">
                                                    <a class="nav-link text-white" href=" {{ url('loginodonto') }} ">
                                                         <div class="card-header bg-success">
                                                                <h4 class="text-white">Sr. Juan Rodriguez S.</h4>
                                                             <h6>Activo</h6>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-2">
                                                    <a class="nav-link text-white" href=" {{ url('loginodonto') }} ">
                                                        <img src="{{url('img/llamar.png')}}" alt="Bootstrap" width="50" height="50">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--chofer-->
                                        
                                         <!--chofer-->
                                        <div class="d-grid gap-2 d-md-block">
                                              Chofer-5
                                            <div class="row">
                                                
                                                <div class="col-10">
                                                    <a class="nav-link text-white" href=" {{ url('loginodonto') }} ">
                                                         <div class="card-header bg-danger">
                                                                <h4 class="text-white">Sr. Carlos Dorado Franco</h4>
                                                             <h6>Inactivo</h6>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-2">
                                                    <a class="nav-link text-white" href=" {{ url('loginodonto') }} ">
                                                        <img src="{{url('img/llamar.png')}}" alt="Bootstrap" width="50" height="50">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--chofer-->
                                
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <!--ofcanva-->
                        </div>
                      <div class="card-footer text-muted bg-success">
                          <h5 class="text-white">Activo</h5>
                      </div>
                    </div>
                </div>
                    <!--targeta-->
                    
                     <!--culumna-->
                <div class="col">
                    <!--targeta-->
                    <div class="card text-center">
                        <!--contenido-->
                        <div class="card-header bg-danger">
                            <h2 class="text-white">Emergéncias</h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Administrador(a) Sitio Web:</h5>
                            <p class="card-text">Yovan Yaune E.</p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#ynv" aria-controls="ynv">
                            Contactar
                            </button>
                            <!--ofcanvas-->
                            <div class="offcanvas offcanvas-start text-bg-dark" data-bs-backdrop="static" tabindex="-1" id="ynv" aria-labelledby="staticBackdropLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="staticBackdropLabel">Conctactos:</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div>
                                        I will not close if you click outside of me.
                                    </div>
                                </div>
                            </div>
                            <!--ofcanva-->
                        </div>
                      <div class="card-footer text-muted bg-success">
                          <h5 class="text-white">Activo</h5>
                      </div>
                    </div>
                    <!--targeta-->
                </div>
                
                     <!--culumna-->
                <div class="col">
                    <!--targeta-->
                    <div class="card text-center">
                        <!--contenido-->
                        <div class="card-header bg-danger">
                            <h2 class="text-white">Emergéncias</h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Profesionales Odontólogos:</h5>
                            <p class="card-text">Yovan Yaune E.</p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                            Contactar
                            </button>
                            <!--ofcanvas-->
                            <div class="offcanvas offcanvas-start text-bg-dark" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="staticBackdropLabel">Conctactos:</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div>
                                        I will not close if you click outside of me.
                                    </div>
                                </div>
                            </div>
                            <!--ofcanva-->
                        </div>
                      <div class="card-footer text-muted bg-success">
                          <h5 class="text-white">Activo</h5>
                      </div>
                    </div>
                    <!--targeta-->
                </div>
        </div>
            <br>
            <!--fila-->
            <div class="row">
                <!--culumna-->
                <div class="col">
                    <!--targeta-->
                    <div class="card text-center">
                        <!--contenido-->
                        <div class="card-header bg-danger">
                            <h2 class="text-white">Emergéncias</h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Profesionales Oftalmólogos:</h5>
                            <p class="card-text">Yovan Yaune E.</p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                            Contactar
                            </button>
                            <!--ofcanvas-->
                            <div class="offcanvas offcanvas-start text-bg-dark" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="staticBackdropLabel">Conctactos:</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div>
                                        I will not close if you click outside of me.
                                    </div>
                                </div>
                            </div>
                            <!--ofcanva-->
                        </div>
                      <div class="card-footer text-muted bg-success">
                          <h5 class="text-white">Activo</h5>
                      </div>
                    </div>
                </div>
                    <!--targeta-->
                    
                     <!--culumna-->
                <div class="col">
                    <!--targeta-->
                    <div class="card text-center">
                        <!--contenido-->
                        <div class="card-header bg-warning">
                            <h2 class="text-white">Contactos:</h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">CLínica</h5>
                            <p class="card-text">Yovan Yaune E.</p>
                            <button class="btn btn-primary disabled" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                            Contactar
                            </button>
                            <!--ofcanvas-->
                            <div class="offcanvas offcanvas-start text-bg-dark" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="staticBackdropLabel">Conctactos:</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div>
                                        I will not close if you click outside of me.
                                    </div>
                                </div>
                            </div>
                            <!--ofcanva-->
                        </div>
                      <div class="card-footer text-muted bg-secondary">
                          <h5 class="text-white">Inactivo</h5>
                      </div>
                    </div>
                    <!--targeta-->
                </div>
                
                     <!--culumna-->
                <div class="col">
                    <!--targeta-->
                    <div class="card text-center">
                        <!--contenido-->
                        <div class="card-header bg-warning">
                            <h2 class="text-white">Contactos:</h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Administrador del Sistema</h5>
                            <p class="card-text">Desarrollador</p>
                            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#ynv1" aria-controls="ynv1">
                            Contactar
                            </button>
                            <!--ofcanvas-->
                            <div class="offcanvas offcanvas-start text-bg-dark" data-bs-backdrop="static" tabindex="-1" id="ynv1" aria-labelledby="staticBackdropLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="dev">Conctactos:</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div>
                                        I will not close if you click outside of me.
                                    </div>
                                </div>
                            </div>
                            <!--ofcanva-->
                        </div>
                      <div class="card-footer text-muted bg-secondary">
                          <h5 class="text-white">Inactivo</h5>
                      </div>
                    </div>
                    <!--targeta-->
                </div>
        </div>
        </div>
                            <!--section contactoaos-->

        <section class="container1 text-light mt-5 rounded text-center">
        <div class="row justify-content-center">
            <div class="col-md-4 my-4">
                <h1>Contáctanos</h1>
            </div>
        </div>
        <div class="row pb-5">
           <div class="col-lg-5 ">
               <form action="#!" class="bg-light rounded p-2 ml-lg-4 p-md-4">
                   <input type="text" class="form-control mb-2 " id="name" placeholder="Nombre">
                   <input type="email" class="form-control mb-2" id="email" placeholder="Email">
                   <textarea class="form-control mb-4" id="message" placeholder="Mensaje" rows="3"></textarea>
                   <input class="btn btn-primary btn-block" type="submit" value="Enviar">
               </form>
           </div>
            <div class="col-lg-6 text-center text-lg-left pl-5">
                <h3 class="mb-1 mt-5 mt-lg-0">Dirección</h3>
                <p class="mb-0">Ex Peatonal # 23</p>
                <p class="mb-0">Sucre - Capital Constitucional</p>
                <p>Bolivia</p>
                <h3 class="mb-1">Telefono</h3>
                <p>+591 734 671 57</p>
                <h3 class="mb-1">Email</h3>
                <p>vanclama@contact.bo</p>
            </div>
            
        </div>
    </section>
                                    <!--section contactoaos-->


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
    <script  src="{{ url('js/script.js') }}"></script>
    </body>
</html>
