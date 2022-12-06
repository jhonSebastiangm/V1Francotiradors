<?php

    include '../lib/config.php';

if(isset($_POST['IdPronosticoResultado1'])) {
  $IdPronosticoResultado = $_POST['IdPronosticoResultado1']; 
  $query = "UPDATE pronosticosuperior1 SET Estado = 1 WHERE id = '$IdPronosticoResultado'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "pronosticosuperior1 Update Successfully";  

}

?>
