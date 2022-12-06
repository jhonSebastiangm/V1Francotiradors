<?php

    include '../lib/config.php';

if(isset($_POST['Equipo1Superior2'])) {
  $Equipo1Superior2 = $_POST['Equipo1Superior2'];
  $Equipo2Superior2 = $_POST['Equipo2Superior2'];
  $fechaJuegoSuperior2 = $_POST['fechaJuegoSuperior2'];
  $LigaSuperior2 = $_POST['LigaSuperior2'];
  $EstadioSuperior2 = $_POST['EstadioSuperior2'];
  $querypronosticosuperior2 = "INSERT INTO pronosticosuperior2(Equipo1, Equipo2, fechaJuego, Liga, Estadio) VALUES ('$Equipo1Superior2', '$Equipo2Superior2', '$fechaJuegoSuperior2', '$LigaSuperior2', '$EstadioSuperior2')";
  $resultsuperior = mysqli_query($connection, $querypronosticosuperior2);

  if (!$resultsuperior) {
    die('querypronosticosuperior2 Failed.');
  }

  echo "pronosticosuperior2 Added Sucessfully";  

}

?>
