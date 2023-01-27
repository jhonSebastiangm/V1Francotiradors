<?php

  include '../configuracion/config.php';

  $PrimerDiaDelMes = _data_last_month_day();
  $UltimoDiaDelMes = _data_first_month_day();

  $query = "SELECT * from pronosticobasico WHERE Estado=0 AND fechaJuego BETWEEN '$PrimerDiaDelMes' AND '$UltimoDiaDelMes'";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'tipoPronostico' => $row['tipoPronostico'],
      'fechaJuego' => $row['fechaJuego'],
      'Liga' => $row['Liga'],
      'url' => $row['url'],
      'Estado' => $row['Estado'],
      'cuota' => $row['cuota'],
      'id' => $row['id']
    );
  }



    /** Actual month last day **/
    function _data_last_month_day() { 
        $month = date('m');
        $year = date('Y');
        $day = date("d", mktime(0,0,0, $month+1, 0, $year));
   
        return date('Y-m-d', mktime(0,0,0, $month, $day, $year));
    };
   
    /** Actual month first day **/
    function _data_first_month_day() {
        $month = date('m');
        $year = date('Y');
        return date('Y-m-d', mktime(0,0,0, $month, 1, $year));
    }


  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
