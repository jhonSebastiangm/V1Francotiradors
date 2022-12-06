<?php

    include '../lib/config.php';

if(isset($_POST['fechaNuevoPronostico'])) {
  $fechaNuevoPronostico = $_POST['fechaNuevoPronostico'];
  $queryfechapronosticobasico = "INSERT INTO fechapronosticobasico(fecha) VALUES ('$fechaNuevoPronostico')";
  $result = mysqli_query($connection, $queryfechapronosticobasico);

  if (!$result) {
    die('queryfechapronosticobasico Failed.');
  }

  echo "queryfechapronosticobasico Added Successfully";  

}

?>
