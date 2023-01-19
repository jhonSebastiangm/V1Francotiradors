<?php
    include('../configuracion/config.php');

    $id = $_POST['Id'];
    $query = "UPDATE usuario SET activo = 1 WHERE id = $id";
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die('Query Failed');//DIE= TERMINA EL PROCESO BD
    }
   echo "Update Usuario Successfully";
?>