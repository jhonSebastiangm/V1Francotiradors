<?php
	session_start(); //Inicia una nueva sesión o reanuda la existente
	
//Evaluamos si existe la variable de sesión id_usuario, si no existe redirigimos al index
	if(empty($_SESSION["usuario"])){
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
               
                <li><a href="matches.html" class="nav-link">Resultados</a></li>
                <li><a href="matches.html" class="nav-link">Pronosticos</a></li>
                <!--<li><a href="players.html" class="nav-link">Participantes</a></li>-->
                <li><a href="blog.html" class="nav-link">Planes</a></li>
                <li><a href="logout.php" class="nav-link">Cerrar Sesion</a></li>
                <?php if($_SESSION['tipoUsuario']==1) { ?>
                <li><a href="administrar.php" class="nav-link">Administrar</a></li>
                <?php } ?>
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
  <div class="row">
  <div class="col-md-6">          
    <h2>Proximo Pronostico Basico</h2>
    <div id="date-countdown"></div>
  </div>
  <div class="col-md-6 col-md-offset-6">
    <div id="graficos">
      <h2>Aciertos.</h2>
      <figure class="horizontal"><?php echo("10");?>%</figure>
      </div>
    </div>
  </div>
  <div class="site-section bg-dark" id="PronosticBasico">
  </div>

  <div class="row">
  <div class="col-md-6">          
    <h2>Proximo Pronostico Super1</h2>
    <div id="date-countdown1"></div>
  </div>
  <div class="col-md-6 col-md-offset-6">
    <div id="graficos">
      <h2>Aciertos.</h2>
      <figure class="horizontal"><?php echo("45");?>%</figure>
      </div>
    </div>
  </div>
  <div class="site-section bg-dark" id="PronosticSuper1">
  </div>

  <div class="row">
  <div class="col-md-6">          
    <h2>Proximo Pronostico Super 2</h2>
    <div id="date-countdown2"></div>
  </div>
  <div class="col-md-6 col-md-offset-6">
    <div id="graficos">
      <h2>Aciertos.</h2>
      <figure class="horizontal"><?php echo("95");?>%</figure>
      </div>
    </div>
  </div>
  <div class="site-section bg-dark" id="PronosticSuper2">
  </div>


  <div class="row">
  <div class="col-md-6">          
    <h2>Proximo Pronostico Super 3</h2>
    <div id="date-countdown3"></div>
  </div>
  <div class="col-md-6 col-md-offset-6">
    <div id="graficos">
      <h2>Aciertos.</h2>
      <figure class="horizontal"><?php echo("85");?>%</figure>
      </div>
    </div>
  </div>
  <div class="site-section bg-dark" id="PronosticSuper3">
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
  <script src="../js/sesion.js"></script>

</body>

</html>