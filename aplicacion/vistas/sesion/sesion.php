<?php
	session_start(); //Inicia una nueva sesión o reanuda la existente
	
//Evaluamos si existe la variable de sesión id_usuario, si no existe redirigimos al index
	if(empty($_SESSION["NombreUsuario"])){
		header("Location: ../login/login.php");
	}

  
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pronosticos  &mdash; Website by rxolab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../../../web/fonts/icomoon/style.css">

  <link rel="stylesheet" href="../../../web/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../../../web/css/jquery-ui.css">
  <link rel="stylesheet" href="../../../web/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../../../web/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../../../web/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../../../web/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../../../web/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../../../web/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../../../web/css/aos.css">

  <link rel="stylesheet" href="../../../web/css/style.css">



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
              <img src="../../../web/images/logo.png" alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
               
                <li><a href="../php/resultados.php" class="nav-link">Resultados</a></li>
                <li><a href="../php/pronosticos.php" class="nav-link">Pronosticos</a></li>
                <li><a href="../players.html" class="nav-link">Participantes</a></li>
                <li><a href="../blog.html" class="nav-link">Planes</a></li>
                <?php if($_SESSION['tipoUsuario'] == 1) { ?>   
                 <li><a href="../../php/administrar.php" class="nav-link">Administrar</a></li>
                <?php } ?>   
                <li><a href="logout.php" class="nav-link">Cerrar Sesion</a></li>
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

  <div class="container site-section">
      <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading">Francotiradores</h2>
        </div>
      </div>
      <div class="row" style="text-align: center;">



      <div class="col-lg-4 mb-4">
          <div class="custom-media d-block">
            <div class="img mb-4">
              <a href="single.html"><img src="${franco.ruta}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="text">
              <!--<span class="meta">May 20, 2020</span> -->
              <h3 class="mb-4"><a  href="#">${franco.nombre}</a></h3>
              <div id="graficos">
              <h2>Aciertos.</h2>
              <figure class="horizontal"><?php echo("85");?>%</figure>
              </div>
               <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
             <p><a href="#">Read more</a></p> -->
              <button class="btn btn-primary">Ingresar</button>
              <!--<a href="#" class="btn btn-primary">Ingresar</a> -->
            </div>
          </div>
        </div>
 

   

   

       
        <div id="contenedorFrancotiradores"></div>
       

        

      </div>

      <!-- <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <div class="custom-pagination">
            <a href="#">1</a>
            <span>2</span>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
          </div>
        </div>
      </div> -->
      <table class="table">
      <thead>
    <th>Banco</th>
  </thead>

  <tbody>
    <tr>
      <td data-label="Banco"> <input type="text" id="Banco" name="Banco" class="form-control input_user textoNegro"  placeholder="Banco">  </td>
    </tr>
  </tbody>
      </table>

      <table class="table">
  <thead>
    <th>Descripcion</th>
    <th>Cuota</th>
    <th>Estado</th>
  </thead>
  <tbody id="pronosticos">
 </tbody>
 <input type="text" id="ValorApuesta" name="ValorApuesta" class="form-control input_user textoNegro"  placeholder="Valor Apuesta" disabled>
</table>
    </div>


   <div class="col-md-6">
          <h2>Proximo Pronostico</h2>
          <div id="date-countdown"></div>
  </div>
 

  <div class="site-section bg-dark" id="PronosticBasico">
    
  </div>
  
  <div class="container">
          
          <div class="row">
            <div class="col-12 title-section">
              <h2 class="heading">PRONOSTICO SUPERIOR #1</h2>
            </div>
            <div class="col-lg-12 mb-12">
            <div class="d-flex team-vs">
            <span class="score">4-1</span>
            <div class="team-1 w-50">
              <div class="team-details w-100 text-center">
                <img src="../../../web/images/logo_1.png" alt="Image" class="img-fluid">
                <h3>LA LEGA <span>(win)</span></h3>
                <ul class="list-unstyled">
                  <li>Anja Landry (7)</li>
                  <li>Eadie Salinas (12)</li>
                  <li>Ashton Allen (10)</li>
                  <li>Baxter Metcalfe (5)</li>
                </ul>
              </div>
            </div>
            <div class="team-2 w-50">
              <div class="team-details w-100 text-center">
                <img src="../../../web/images/logo_2.png" alt="Image" class="img-fluid">
                <h3>JUVENDU <span>(loss)</span></h3>
                <ul class="list-unstyled">
                  <li>Macauly Green (3)</li>
                  <li>Arham Stark (8)</li>
                  <li>Stephan Murillo (9)</li>
                  <li>Ned Ritter (5)</li>
                </ul>
              </div>
            </div>
          </div>
            </div>        
              
          </div>
  </div>








  </div>

  <div class="site-section bg-dark" id="PronosticSuper1">
  </div>
  <div class="site-section bg-dark" id="PronosticSuper2">
  </div>
  <div class="site-section bg-dark" id="PronosticSuper3">
  </div>

<section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">VIDEOS</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Estas son las herramientas que necesitaras para iniciar tu camino como emprendedor</p>
        </div>
      </div>
	   <div class="row">
	    <div class="col-md-3" style="margin-right: 50px;">
   <div class="container wow fadeInUp">
  <iframe width="270" height="150" src="https://www.youtube.com/embed/ijc5iLltNqc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
				<div style="margin-left: 15px;">
              <i href="prueba6.php" class="fa fa-download"><a href="prueba6.php">DESCARGAR</a></i> 
            </div>
        </div>
	
		

    </div>

	
	
  </section>
  
<footer class="footer-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="https://www.smartmoneysystemnow.com" target="_blank">Smart Money System Now</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div>
  <!-- .site-wrap -->

  <script src="../../../web/js/jquery-3.3.1.min.js"></script>
  <script src="../../../web/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../../web/js/jquery-ui.js"></script>
  <script src="../../../web/js/popper.min.js"></script>
  <script src="../../../web/js/bootstrap.min.js"></script>
  <script src="../../../web/js/owl.carousel.min.js"></script>
  <script src="../../../web/js/jquery.stellar.min.js"></script>
  <script src="../../../web/js/jquery.countdown.min.js"></script>
  <script src="../../../web/js/bootstrap-datepicker.min.js"></script>
  <script src="../../../web/js/jquery.easing.1.3.js"></script>
  <script src="../../../web/js/aos.js"></script>
  <script src="../../../web/js/jquery.fancybox.min.js"></script>
  <script src="../../../web/js/jquery.sticky.js"></script>
  <script src="../../../web/js/jquery.mb.YTPlayer.min.js"></script>


  <script src="../../../web/js/main.js"></script>
  <script src="../../../web/js/graficos.js"></script>
  <script src="../../../web/js/sesion.js"></script>

</body>

</html>