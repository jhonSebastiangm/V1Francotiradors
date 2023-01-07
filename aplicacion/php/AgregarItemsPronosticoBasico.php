<?php

    include '../configuracion/config.php';

if(isset($_POST['Descripcion'])) {
    $queryObtenerId = "SELECT * FROM pronosticobasico ORDER BY id DESC LIMIT 1";
    $resultObtenerId = mysqli_query($connection, $queryObtenerId);
  
    while($row = mysqli_fetch_array($resultObtenerId)) {
        $idPronosticoBasico = $row['id']; 
    }

    $Descripcion = $_POST['Descripcion'];
    $Resutado = $_POST['Resutado'];
    $queryitemspronosticogratuito = "INSERT INTO itemspronosticobasico(Descripcion, Resutado, idPronosticoBasico) VALUES ('$Descripcion', '$Resutado','$idPronosticoBasico')";
    $result = mysqli_query($connection, $queryitemspronosticogratuito);

    if (!$result) {
        die('queryitemspronosticobasico Failed.');
    }

    echo "queryitemspronosticobasico Added Successfully";  

}

?>
