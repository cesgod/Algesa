<?php

include '../../production/php/conexion.php';
include 'energyc.php';
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);

}
#echo "meter: ".$meter;
$gquery = mysqli_query($conexion, 'SELECT * from asdf ORDER BY STR_TO_DATE(Time_Stamp,"%d/%m/%Y %T") ASC');

$timest  = array();
$gresult = array();
$presult = array();
$hour    = '00:00';
#$date = '23-10-2019';
#echo $date.'date';
while ($r = mysqli_fetch_assoc($gquery)) {
    $gtimes        = $r['Time_Stamp'];
    $gtimes        = str_replace('/', '-', $gtimes);
    $newDateString = date_create_from_format('m-d-Y', $gtimes);
    $gnewDate      = date("m-d-Y", strtotime($gtimes));
    $gnewhour      = date("i:s", strtotime($gtimes));
    #echo 'New'.$gnewDate.'<br>';
    #echo 'ms'.$gnewhour.'---';
    #echo "old".$gtimes.'  ';
    #echo "DATE ".$dateof.'<br>';
    #echo "Date:". $_SESSION["idate"];
    if ($gnewDate >= $date1 and $gnewDate <= $date2) {
        #echo "pass1";
        #if ($gnewhour == $hour) {
            #echo "pass2";
            if ($database == 'thedash') {
            # code...
            
            $gresult['datap'][][][][][][][][] = str_replace(',', '.', $r[$meter]);
            $gresult['dataa'][][][][][][][][] = str_replace(',', '.', $r['30880338_Alimentador1']);
            $gresult['datab'][][][][][][][][] = str_replace(',', '.', $r['30880339_Alimentador2']);
            $gresult['datac'][][][][][][][][] = str_replace(',', '.', $r['30880340_Alimentador3']);
            $gresult['datad'][][][][][][][][] = str_replace(',', '.', $r['30880341_Alimentador4']);
            $gresult['datae'][][][][][][][][] = str_replace(',', '.', $r['Alimentador5_Network']);
            $gresult['dataf'][][][][][][][][] = str_replace(',', '.', $r['30880343_Alimentador6']);
            $nh      = date("d-M H:i", strtotime($gtimes));
            $gresult['datag'][][][][][][][][] = $nh;
            #echo 'Date: '.$gnewDate.'  '.$nh.'<br>';

        #echo $r['Time_Stamp'];
        }else{
            $gresult['datap'][][]= str_replace(',', '.', $r[$meter]);
            $nh      = date("d-M H:i", strtotime($gtimes));
            $gresult['datag'][][] = $nh;
            #echo 'Date: '.$gnewDate.'  '.$nh.'<br>';
        }  
        #}
        #echo $r['Time_Stamp'].'<br>';
        #$times = str_replace('-', '/', $times);;
        #echo $times;
           

    }

}

$gresult['datapc'] = $graphp;
$valores   = array_values($gresult);
#$valoresp  = array_values($presult);
#$timest = array_values($times);

#mysqli_close($conexion);
echo json_encode($valores);
#echo json_encode($valoresp);

?>