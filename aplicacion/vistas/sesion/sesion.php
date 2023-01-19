<?php
session_start(); //Inicia una nueva sesión o reanuda la existente

//Evaluamos si existe la variable de sesión id_usuario, si no existe redirigimos al index
if (empty($_SESSION["NombreUsuario"])) {
  header("Location: ../login/login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pronosticos &mdash; Website by rxolab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

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
              <img class="logo" alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <?php if ($_SESSION['tipoUsuario'] == 1) { ?>
                  <li><a href="../../php/administrar.php" class="nav-link">Administrar</a></li>
                <?php } ?>
                <li><a href="../aplicacion/vistas/login/login.php" class="nav-link">Inicio/Registro</a></li>
                <li><a href="logout.php" class="nav-link">Cerrar Sesion</a></li>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span class="icon-menu h3 text-white"></span></a>
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



      <!-- <div class="col-lg-4 mb-4">
        <div class="custom-media d-block">
          <div class="img mb-4">
            <a href="single.html"><img src="${franco.ruta}" alt="Image" class="img-fluid"></a>
          </div>
          <div class="text">
            
            <h3 class="mb-4"><a href="#">${franco.nombre}</a></h3>
            <div id="graficos">
              <h2>Aciertos.</h2>
              <figure class="horizontal"><?php echo ("85"); ?>%</figure>
            </div>
            
             
            <button class="btn btn-primary">Ingresar</button>
          </div>
        </div>
      </div> -->







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
      <select class="form-control" id="frecuencia">
        <option value="1">Ultimo</option>
        <option value="2">Mes</option>
        <option value="3">Completo</option>
      </select>
    <div class="row">
      <div class="col-sm-4 DivBonitos" style="background-color:lavender;"> <input type="text" id="Banco" name="Banco" class="input_user textoNegro" placeholder="Banco"></div>
      <div class="col-sm-4 DivBonitos" style="background-color:lavenderblush;"> <input type="text" id="ValorApuesta" name="ValorApuesta" class="input_user textoNegro" placeholder="Valor Apuesta" disabled> </div>
      <div class="col-sm-4 DivBonitos" style="background-color:lavender;"> <input type="text" id="Ganancia" name="Ganancia" class="input_user textoNegro" placeholder="Ganancia" disabled> </div>
    </div>



    <table class="table">
      <thead>
        <th>Tipo Pronostico</th>
        <th>Descripcion</th>
        <th>Cuota</th>
        <th>Estado</th>
        <th>Ejemplo</th>
      </thead>
      <tbody id="pronosticos">
      </tbody>

    </table>
  </div>
  </div>

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
              </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://www.smartmoneysystemnow.com" target="_blank">Smart Money System Now</a>
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