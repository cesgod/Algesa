<?php  
  session_start();
?>
<?php 

      include_once '../../../../soapclient/nusoap_att.php';
      include_once '../../../../dashboard/assets/php/conexion.php';
    $string = file_get_contents("../../../../virtualenvs/Cl/soapclient/resultsscl.json");

    if ($string === false) {
      echo "No content<br>";
    }

    $arrayn = json_decode($string, true);
    if ($arrayn === null) {
        // deal with error...
      echo "Parse error<br>";
    }
    #$lim=482;
    #$marginal=$_SESSION['volm'];
    #$normal=$_SESSION['voln'];
    #$critical=$_SESSION['volc'];

      

                                   
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }
    #$rcrt=floatval($_POST['val']);
    # $upd="update potencia_range set Range_Critical='".$rcrt."'";
  # mysqli_query($conexion, $upd);

    $data=0;
    $dvlimit = count($arrayn);

    $rangept = mysqli_query($conexion, 'SELECT * FROM potencia_range');

    while ($ptr = mysqli_fetch_assoc($rangept)) {

        $rangecrt = $ptr['Range_Critical'];
        $rangewrn = $ptr['Range_Warning'];
        $rangevoltagec = $ptr['Range_Critical_T']/100;
        $rangevoltagew = $ptr['Range_Warning_T']/100;
    }
    $rangecrt=floatval($rangecrt*0.01);
    $rangewrn=floatval($rangewrn*0.01);
    #echo $rangewrn." ptdata ".$rangecrt;
    #echo "<pre>"; print_r($arrayn); echo "</pre>";
    for ($i=0; $i < $dvlimit ; $i++) { 
    $classw="btn-normal-tr";
      if ($am550att[$i][1]['Name']<>'ReadingMeterAccessService') {
    $class_events=rand(2,3);
    if (  $class_events ==1) {
      $class_events='id';
    }elseif ($class_events==2) {
      $class_events='events';
    }else{
      $class_events='events';
    }
    $c_events=rand(1,20);
    $t_events='';
    $d_events='';


    $query = mysqli_query($conexion, 'SELECT * FROM events ORDER BY '.$class_events.'  LIMIT '.$c_events.'');

    while ($r = mysqli_fetch_assoc($query)) {

        $t_events = $r['id'];
        $d_events = $r['Events'];
    }

    #echo '<pre>'; print_r($t_events); echo '</pre>';
    #echo '<pre>'; print_r($d_events); echo '</pre>';
      
   $idd=$arrayn[$i][4];
   $nuser=$arrayn[$i][3];
   $nmeter=$arrayn[$i][0];
   $pinstantanea=$arrayn[$i][6];
   $preservada=$arrayn[$i][1];
   $pd=$arrayn[$i][2];
   #$barrio=$arrayn[$i][6];
   #$idalim=$arrayn[$i][1];
   #$minute=$arrayn[$i][15];
   #echo "Minute:".strlen($arrayn[$i][15]).":";
   #$minutelim=strlen($arrayn[$i][15]);
   #if ($minutelim==1) {
   #  $minute="00:00";
   #}
  
   #$lsc=$arrayn[$i][11]."/".$arrayn[$i][12]."/".$arrayn[$i][13]." ".$arrayn[$i][14].":".$minute;
   $ndc=$arrayn[$i][5];
   $lsc=$arrayn[$i][10];
   #$lsc=date("Y/m/d H:i:s", strtotime('-2 hours'));
   $date = strtotime($lsc);
   #$lsc  =$date;
   #$date = , strtotime('+1 hours') 
   $lsc=date('m/d/Y H:i', strtotime('-3 hours',$date));
   #$lsc=date_format($lsc,"Y/m/d H:i:s");
      #date_default_timezone_set('America/Asuncion');
      #$lsc=date("m-d-Y H:i:s");
      #$lsc = date("d/m/Y H:i:s", strtotime('+1 hours'));
      
      $v1=$arrayn[$i][7];
      $v2=$arrayn[$i][8];
      $v3=$arrayn[$i][9];
      if ($v1>(220*$rangevoltagec+220) or $v1<220-($rangevoltagec*220)) {
        $classvol1="btn-danger";
        $classw="btn-danger-tr";
      }if ($v2>(220*$rangevoltagec+220) or $v2<220-($rangevoltagec*220)) {
        $classvol2="btn-danger";
        $classw="btn-danger-tr";
      }if ($v3>(220*$rangevoltagec+220) or $v3<220-($rangevoltagec*220)) {
        $classvol3="btn-danger";
        $classw="btn-danger-tr";
      }if (($v1>=(220*$rangevoltagew+220)) and ($v1<220*$rangevoltagec+220) or ($v1>(220-($rangevoltagec*220))) and ($v1<(220-($rangevoltagew*220)))) {
        $classvol1="btn-warning";
        $classw="btn-warning-tr";
      }if (($v2>=(220*$rangevoltagew+220)) and ($v2<220*$rangevoltagec+220) or ($v2>(220-($rangevoltagec*220))) and ($v2<(220-($rangevoltagew*220)))) {
        $classvol2="btn-warning";
        $classw="btn-warning-tr";
      }if (($v3>=(220*$rangevoltagew+220)) and ($v3<220*$rangevoltagec+220) or ($v3>(220-($rangevoltagec*220))) and ($v3<(220-($rangevoltagew*220)))) {
        $classvol3="btn-warning";
        $classw="btn-warning-tr";
      }if($v1<(220*$rangevoltagew+220) and $v1>(220-($rangevoltagew*220))) {
        $classvol1="";
      }if($v2<(220*$rangevoltagew+220) and $v2>(220-($rangevoltagew*220))) {
        $classvol2="";
      }if($v3<(220*$rangevoltagew+220) and $v3>(220-($rangevoltagew*220))) {
        $classvol3="";
      }
   if ($pinstantanea > ($preservada * $rangewrn) and $pinstantanea < ($preservada * $rangecrt)) {
      $classpt = "btn-warning";
      $classptr= "btn-warning-ptr";
   }elseif($pinstantanea > ($preservada * $rangecrt)){
      $classpt = "btn-danger";
      $classptr= "btn-danger-ptr";
      $insertnrecord="INSERT INTO alertlogs (ID, N_Usuario, N_Medidor, P_Contratada, P_Instantanea, LastSC, Pd, Barrio, Alimentador, V1, V2, V3, Alerts) VALUES ('".$idd."', '".$nuser."','".$nmeter."', '".$preservada."', '".$pinstantanea."', '".$lsc."', '".$pd."', '".$barrio."', '".$idalim."', '".$v1."', '".$v2."', '".$v3."', '".$d_events."')";
    #mysqli_query($conexion, $insertnrecord);
  
   }else{
      $classpt = "";
      $classptr="btn-normal-ptr";
   }
      $alertas=" - "." - - -";
      echo "<tr class='".$classw." ".$classptr."' >
        <td> ".$ndc."</td>
        <td> ".$idd."</td>
        
        <td>".$nmeter."</td>
        <td>".$preservada."</td>
        <td class='".$classpt."'>".$pinstantanea."</td>
        <td>".$lsc."</td>
        
        <td>".$pd."</td>
        <td class='".$classvol1."'>".$v1."</td>
        <td class='".$classvol2."'>".$v2."</td>
        <td class='".$classvol3."'>".$v3."</td>
        <td><p style='font-size:10px;'>".$d_events."</p></td>
        </tr>";
        
    }
      
      }


?>