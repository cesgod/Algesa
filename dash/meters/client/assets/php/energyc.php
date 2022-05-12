<?php
session_start();

include '../../production/php/conexion.php';
$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);

}

$date1 = $_SESSION["idate"];
#echo "Date: ".$date1;
$date01 = $date1;
$date1 = date("m-d-Y", strtotime($date1));
$date2 = $_SESSION["fdate"];
$date02 = $date2;
$date2 = date("m-d-Y", strtotime($date2));
$meter = $_SESSION["meter"];
#Potencia Contratada
$potenciac   = 0;
$potenciacon = mysqli_query($conexion, 'SELECT * FROM potencia WHERE Meter ="' . $meter . '"');

while ($pcon = mysqli_fetch_assoc($potenciacon)) {
    $potenciac = $pcon['pcontratada'];
}
$graphp      = $potenciac;

#echo "meter: ".$meter;
?>