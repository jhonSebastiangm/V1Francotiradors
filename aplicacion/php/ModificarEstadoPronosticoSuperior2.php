<?php

    include '../lib/config.php';

if(isset($_POST['IdPronosticoResultado2'])) {
  $IdPronosticoResultado2 = $_POST['IdPronosticoResultado2']; 
  $query = "UPDATE pronosticosuperior2 SET Estado = 1 WHERE id = '$IdPronosticoResultado2'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "pronosticosuperior2 Update Successfully";  

}

?>
