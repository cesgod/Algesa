<?php
  session_start();
?>
<?php 
    
      $string = file_get_contents("../../../../virtualenvs/Cl/soapclient/resultsbill.json");

    if ($string === false) {
      echo "No content<br>";
    }

    $arrayn = json_decode($string, true);
    if ($arrayn === null) {
        // deal with error...
      echo "Parse error<br>";
    }     
    #echo "<pre>";print_r($arrayn);echo "</pre>";

    $dvlimit = count($arrayn);


    for ($i=0; $i < $dvlimit ; $i++) { 
     
       $ndc=$arrayn[$i][8];
       $meter=$arrayn[$i][0];
       $energyfull=number_format($arrayn[$i][1], 3, ',', '.');
       $energypc=number_format($arrayn[$i][2], 3, ',', '.');
       $energyfpc=number_format($arrayn[$i][3], 3, ',', '.');
       $reactive=number_format($arrayn[$i][4], 3, ',', '.');
       $max_demand=number_format($arrayn[$i][5], 3, ',', '.');
       $max_demand_pc=number_format($arrayn[$i][6], 3, ',', '.');
       $max_demand_fpc=number_format($arrayn[$i][7], 3, ',', '.');
        
        echo "<tr>
          <td> ".$ndc."</td>
          <td> ".$meter."</td>
          <td>".$energyfull."</td>
          <td>".$energypc."</td>
          <td>".$energyfpc."</td>
          <td>".$reactive."</td>
          <td>".$max_demand."</td>
          <td>".$max_demand_pc."</td>
          <td>".$max_demand_fpc."</td>
          </tr>";
    }  
     
?>