<?php

    include '../configuracion/config.php';

if(isset($_POST['IdPronosticoResultado'])) {
  $IdPronosticoResultado = $_POST['IdPronosticoResultado']; 
  $query = "UPDATE pronosticobasico SET Estado = 1 WHERE id = '$IdPronosticoResultado'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "pronosticogratuito Update Successfully";  

}

?>
