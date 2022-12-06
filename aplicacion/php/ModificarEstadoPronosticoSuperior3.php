<?php

    include '../lib/config.php';

if(isset($_POST['IdPronosticoResultado3'])) {
  $IdPronosticoResultado3 = $_POST['IdPronosticoResultado3']; 
  $query = "UPDATE pronosticosuperior3 SET Estado = 1 WHERE id = '$IdPronosticoResultado3'";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query Failed.');
  }
  echo "pronosticosuperior3 Update Successfully";  

}

?>
