<?php

    include '../lib/config.php';

if(isset($_POST['Equipo1Superior1'])) {
  $Equipo1Superior1 = $_POST['Equipo1Superior1'];
  $Equipo2Superior1 = $_POST['Equipo2Superior1'];
  $fechaJuegoSuperior1 = $_POST['fechaJuegoSuperior1'];
  $LigaSuperior1 = $_POST['LigaSuperior1'];
  $EstadioSuperior1 = $_POST['EstadioSuperior1'];
  $querypronosticosuperior1 = "INSERT INTO pronosticosuperior1(Equipo1, Equipo2, fechaJuego, Liga, Estadio) VALUES ('$Equipo1Superior1', '$Equipo2Superior1', '$fechaJuegoSuperior1', '$LigaSuperior1', '$EstadioSuperior1')";
  $resultsuperior = mysqli_query($connection, $querypronosticosuperior1);

  if (!$resultsuperior) {
    die('querypronosticosuperior1 Failed.');
  }

  echo "pronosticosuperior1 Added Successfully";  

}

?>
