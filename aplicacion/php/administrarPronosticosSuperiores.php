<?php
	session_start(); //Inicia una nueva sesión o reanuda la existente
	
//Evaluamos si existe la variable de sesión id_usuario, si no existe redirigimos al index
	if(empty($_SESSION["NombreUsuario"])){
		header("Location: ../index.php");
	}

  
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pronosticos  &mdash; Website by rxolab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../css/aos.css">

  <link rel="stylesheet" href="../css/style.css">



</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html">
              <img src="../images/logo.png" alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
               
                <li><a href="administrarPronosticosGratuitos.php" class="nav-link">Pronosticos Gratuitos</a></li>
                <li><a href="administrarPronosticosBasicos.php" class="nav-link">Pronosticos Basicos</a></li>
                <li><a href="administrarPronosticosSuperiores.php" class="nav-link">Pronosticos Superiores</a></li>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>
  </div>
  <div class="site-section bg-dark">
 
  </div> <!-- .site-section -->

  <div class="container">
      <div class="row p-4">
        <div class="col-md-6" id="divPronostico1">
        <a class="navbar-brand" href="#">Agregar Pronosticos Superiores N° 1</a>
          <div class="card">
            <div class="card-body">
              
              <!-- FORM TO ADD TASKS -->
              <form id="PronosticoSuperior1">
                <input type="hidden" id="pronosticoId1">
                <div class="form-group">
                  <input type="text" id="Equipo1Superior1" placeholder="Equipo1">
                </div>   
                <div class="form-group">
                  <input type="text" id="Equipo2Superior1" placeholder="Equipo2">
                </div>   
                <div class="form-group">
                  <input type="datetime-local" id="fechaJuegoSuperior1">
                </div>   
                
                <div class="form-group">
                  <input type="text" id="LigaSuperior1" placeholder="Liga">
                </div>   
                <div class="form-group">
                  <input type="text" id="EstadioSuperior1" placeholder="Estadio">
                </div>              
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Pronostico
                </button>
              </form>
              
            </div>
          </div>
        </div>

        <div class="col-md-6" id="divItem1">
        <a class="navbar-brand" href="#">Crear Item</a>
          <div class="card">
            <div class="card-body">
              
              <!-- FORM TO ADD TASKS -->
              <form id="ItemsPronosticoSuperior1">
                <input type="hidden" id="itemPronosticoId">
                <div class="form-group">
                  <input type="text" id="DescripcionSuperior1" placeholder="Descripcion">
                </div>   
                <div class="form-group">
                  <input type="text" id="ResutadoSuperior1" placeholder="Resultado">
                </div>    
                <div class="form-group">
                  <select>
                    <option>Selecione Un Stake</option>
                  </select>
                </div>                 
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Item
                </button>
                <button onclick="location.href='http://localhost/soccer-master/php/administrarPronosticosSuperiores.php'" type="button" class="btn btn-primary btn-block text-center">
                  Finalizar Pronostico</button>
              </form>
              
            </div>
          </div>
        </div>

        <div class="col-md-6" id="divResultado1">
        <a class="navbar-brand" href="#">Crear Resultado</a>
          <div class="card">
            <div class="card-body">
              
              <!-- FORM TO ADD TASKS -->
              <form id="PronosticoSuperiorCrearResultado1">
                <input type="hidden" id="IdPronosticoResultado1">
                <div class="form-group">
                  <textarea id="descripcionResultado1" cols="50" rows="0" placeholder="Description"></textarea>
                </div> 
                <div id="ItemsResultados1" class="form-group">
                <table class="table table-bordered table-sm">
                <thead>
                  <tr>
            
                    <td>Descripcion</td>
                    <td>Resultado</td>
                    <td>Cumple</td>
                    <td>Guardar</td>
                  </tr>
                </thead>
                <tbody id="resultadoItemsPronosticos1"></tbody>
                </table>

                </div>               
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Resultado
                </button>
              </form>
              
            </div>
          </div>
        </div>

        <!-- TABLE  -->
        <div class="col-md-6">
        <a class="navbar-brand" href="#">Pronosticos Superiores N° 1</a>
          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <td>Equipo 1</td>
                <td>Equipo 2</td>
                <td>fechaJuego</td>
                <td>Liga</td>
                <td>Resultado</td>
              </tr>
            </thead>
            <tbody id="pronosticos1"></tbody>
          </table>
        </div>
      </div>
    </div>  
    <div class="container">
      <div class="row p-4">
        <div class="col-md-6">
        <a class="navbar-brand" href="#">Agregar Fecha Nuevo Pronosticos Superior 1</a>
          <div class="card">
            <div class="card-body">
              
              <!-- FORM TO ADD TASKS -->
              <form id="NuevoPronostico1">
                <input type="hidden" id="">
                <div class="form-group">
                  <input type="date" id="fechaNuevoPronostico1" require>
                </div>    
                            
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Fecha Nuevo Pronostico
                </button>
              </form>
              
            </div>
          </div>
        </div>


        <!-- TABLE  -->
        <div class="col-md-6">
        <h2>Proximo Pronostico 1</h2>
        <div id="date-countdown"></div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row p-4">
        <div class="col-md-6" id="divPronostico2">
        <a class="navbar-brand" href="#">Agregar Pronosticos Superiores N° 2</a>
          <div class="card">
            <div class="card-body">
              
              <!-- FORM TO ADD TASKS -->
              <form id="PronosticoSuperior2">
                <input type="hidden" id="pronosticoId2">
                <div class="form-group">
                  <input type="text" id="Equipo1Superior2" placeholder="Equipo1">
                </div>   
                <div class="form-group">
                  <input type="text" id="Equipo2Superior2" placeholder="Equipo2">
                </div>   
                <div class="form-group">
                  <input type="datetime-local" id="fechaJuegoSuperior2">
                </div>   
                
                <div class="form-group">
                  <input type="text" id="LigaSuperior2" placeholder="Liga">
                </div>   
                <div class="form-group">
                  <input type="text" id="EstadioSuperior2" placeholder="Estadio">
                </div>              
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Pronostico
                </button>
              </form>
              
            </div>
          </div>
        </div>

        <div class="col-md-6" id="divItem2">
        <a class="navbar-brand" href="#">Crear Item</a>
          <div class="card">
            <div class="card-body">
              
              <!-- FORM TO ADD TASKS -->
              <form id="ItemsPronosticoSuperior2">
                <input type="hidden" id="itemPronosticoId2">
                <div class="form-group">
                  <input type="text" id="DescripcionSuperior2" placeholder="Descripcion">
                </div>   
                <div class="form-group">
                  <input type="text" id="ResutadoSuperior2" placeholder="Resultado">
                </div>    
                <div class="form-group">
                  <select>
                    <option>Selecione Un Stake</option>
                  </select>
                </div>                 
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Item
                </button>
                <button onclick="location.href='http://localhost/soccer-master/php/administrarPronosticosGratuitos.php'" type="button" class="btn btn-primary btn-block text-center">
                  Finalizar Pronostico</button>
              </form>
              
            </div>
          </div>
        </div>

        <div class="col-md-6" id="divResultado2">
        <a class="navbar-brand" href="#">Crear Resultado</a>
          <div class="card">
            <div class="card-body">
              
              <!-- FORM TO ADD TASKS -->
              <form id="PronosticoSuperiorCrearResultado2">
                <input type="hidden" id="IdPronosticoResultado2">
                <div class="form-group">
                  <textarea id="descripcionResultado2" cols="50" rows="0" placeholder="Description"></textarea>
                </div> 
                <div id="ItemsResultados2" class="form-group">
                <table class="table table-bordered table-sm">
                <thead>
                  <tr>
            
                    <td>Descripcion</td>
                    <td>Resultado</td>
                    <td>Cumple</td>
                    <td>Guardar</td>
                  </tr>
                </thead>
                <tbody id="resultadoItemsPronosticos2"></tbody>
                </table>

                </div>               
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Resultado
                </button>
              </form>
              
            </div>
          </div>
        </div>

        <!-- TABLE  -->
        <div class="col-md-6">
        <a class="navbar-brand" href="#">Pronosticos Superiores N° 2</a>
          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <td>Equipo 1</td>
                <td>Equipo 2</td>
                <td>fechaJuego</td>
                <td>Liga</td>
                <td>Resultado</td>
              </tr>
            </thead>
            <tbody id="pronosticos2"></tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row p-4">
        <div class="col-md-6">
        <a class="navbar-brand" href="#">Agregar Fecha Nuevo Pronosticos Superiores 2</a>
          <div class="card">
            <div class="card-body">
              
              <!-- FORM TO ADD TASKS -->
              <form id="NuevoPronostico2">
                <input type="hidden" id="">
                <div class="form-group">
                  <input type="date" id="fechaNuevoPronostico2" require>
                </div>    
                            
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Fecha Nuevo Pronostico
                </button>
              </form>
              
            </div>
          </div>
        </div>


        <!-- TABLE  -->
        <div class="col-md-6">
        <h2>Proximo Pronostico 2</h2>
        <div id="date-countdown2"></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row p-4">
        <div class="col-md-6" id="divPronostico3">
        <a class="navbar-brand" href="#">Agregar Pronosticos Superiores N° 3</a>
          <div class="card">
            <div class="card-body">
              
              <!-- FORM TO ADD TASKS -->
              <form id="PronosticoSuperior3">
                <input type="hidden" id="pronosticoId3">
                <div class="form-group">
                  <input type="text" id="Equipo1Superior3" placeholder="Equipo1">
                </div>   
                <div class="form-group">
                  <input type="text" id="Equipo2Superior3" placeholder="Equipo2">
                </div>   
                <div class="form-group">
                  <input type="datetime-local" id="fechaJuegoSuperior3">
                </div>   
                
                <div class="form-group">
                  <input type="text" id="LigaSuperior3" placeholder="Liga">
                </div>   
                <div class="form-group">
                  <input type="text" id="EstadioSuperior3" placeholder="Estadio">
                </div>              
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Pronostico
                </button>
              </form>
              
            </div>
          </div>
        </div>

        <div class="col-md-6" id="divItem3">
        <a class="navbar-brand" href="#">Crear Item</a>
          <div class="card">
            <div class="card-body">
              
              <!-- FORM TO ADD TASKS -->
              <form id="ItemsPronosticoSuperior3">
                <input type="hidden" id="itemPronosticoId">
                <div class="form-group">
                  <input type="text" id="DescripcionSuperior3" placeholder="Descripcion">
                </div>   
                <div class="form-group">
                  <input type="text" id="ResutadoSuperior3" placeholder="Resultado">
                </div>    
                <div class="form-group">
                  <select>
                    <option>Selecione Un Stake</option>
                  </select>
                </div>                 
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Item
                </button>
                <button onclick="location.href='http://localhost/soccer-master/php/administrarPronosticosGratuitos.php'" type="button" class="btn btn-primary btn-block text-center">
                  Finalizar Pronostico</button>
              </form>
              
            </div>
          </div>
        </div>

        <div class="col-md-6" id="divResultado3">
        <a class="navbar-brand" href="#">Crear Resultado</a>
          <div class="card">
            <div class="card-body">
              
              <!-- FORM TO ADD TASKS -->
              <form id="PronosticoSuperiorCrearResultado3">
                <input type="hidden" id="IdPronosticoResultado3">
                <div class="form-group">
                  <textarea id="descripcionResultado3" cols="50" rows="0" placeholder="Description"></textarea>
                </div> 
                <div id="ItemsResultados3" class="form-group">
                <table class="table table-bordered table-sm">
                <thead>
                  <tr>
            
                    <td>Descripcion</td>
                    <td>Resultado</td>
                    <td>Cumple</td>
                    <td>Guardar</td>
                  </tr>
                </thead>
                <tbody id="resultadoItemsPronosticos3"></tbody>
                </table>

                </div>               
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Resultado
                </button>
              </form>
              
            </div>
          </div>
        </div>

        <!-- TABLE  -->
        <div class="col-md-6">
        <a class="navbar-brand" href="#">Pronosticos Superiores N° 3</a>
          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <td>Equipo 1</td>
                <td>Equipo 2</td>
                <td>fechaJuego</td>
                <td>Liga</td>
                <td>Resultado</td>
              </tr>
            </thead>
            <tbody id="pronosticos3"></tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row p-4">
        <div class="col-md-6">
        <a class="navbar-brand" href="#">Agregar Fecha Nuevo Pronosticos Superiores 3</a>
          <div class="card">
            <div class="card-body">
              
              <!-- FORM TO ADD TASKS -->
              <form id="NuevoPronostico3">
                <input type="hidden" id="">
                <div class="form-group">
                  <input type="date" id="fechaNuevoPronostico3" require>
                </div>    
                            
                <button type="submit" class="btn btn-primary btn-block text-center">
                  Crear Fecha Nuevo Pronostico
                </button>
              </form>
              
            </div>
          </div>
        </div>


        <!-- TABLE  -->
        <div class="col-md-6">
        <h2>Proximo Pronostico 3</h2>
        <div id="date-countdown3"></div>
        </div>
      </div>
    </div>
    
  

    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>News</h3>
              <ul class="list-unstyled links">
                <li><a href="#">All</a></li>
                <li><a href="#">Club News</a></li>
                <li><a href="#">Media Center</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">RSS</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Tickets</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Online Ticket</a></li>
                <li><a href="#">Payment and Prices</a></li>
                <li><a href="#">Contact &amp; Booking</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Coupon</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Matches</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Standings</a></li>
                <li><a href="#">World Cup</a></li>
                <li><a href="#">La Lega</a></li>
                <li><a href="#">Hyper Cup</a></li>
                <li><a href="#">World League</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Social</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="row text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div>
  <!-- .site-wrap -->

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.fancybox.min.js"></script>
  <script src="../js/jquery.sticky.js"></script>
  <script src="../js/jquery.mb.YTPlayer.min.js"></script>


  <script src="../js/main.js"></script>
  <script src="../js/graficos.js"></script>
  <script src="../js/administrarPronosticosSuperiores.js"></script>
  <script src="../js/fechaSuperior.js"></script>

</body>

</html>