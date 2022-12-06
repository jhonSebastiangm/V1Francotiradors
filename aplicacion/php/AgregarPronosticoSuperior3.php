<?php

    include '../lib/config.php';

if(isset($_POST['Equipo1Superior3'])) {
  $Equipo1Superior3 = $_POST['Equipo1Superior3'];
  $Equipo2Superior3 = $_POST['Equipo2Superior3'];
  $fechaJuegoSuperior3 = $_POST['fechaJuegoSuperior3'];
  $LigaSuperior3 = $_POST['LigaSuperior3'];
  $EstadioSuperior3 = $_POST['EstadioSuperior3'];
  $querypronosticosuperior3 = "INSERT INTO pronosticosuperior3(Equipo1, Equipo2, fechaJuego, Liga, Estadio) VALUES ('$Equipo1Superior3', '$Equipo2Superior3', '$fechaJuegoSuperior3', '$LigaSuperior3', '$EstadioSuperior3')";
  $resultsuperior = mysqli_query($connection, $querypronosticosuperior3);

  if (!$resultsuperior) {
    die('querypronosticosuperior3 Failed.');
  }

  echo "pronosticosuperior3 Added Sucessfully";  

}

?>
