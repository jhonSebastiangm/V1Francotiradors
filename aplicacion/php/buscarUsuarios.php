<?php
    include('../configuracion/config.php');
    $query = "SELECT * FROM usuario where activo=0";
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die('Query Failed'. mysqli_error($connection));
    }

    $json = array();
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'Nombreusuario' => $row['Nombreusuario'],
                'correo' => $row['correo'],
                'id' => $row['id']
            );
        }
        $jsonString = json_encode($json);
        echo $jsonString;

?>