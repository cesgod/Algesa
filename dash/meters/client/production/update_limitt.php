<?php
	
	include_once '../../../dashboard/assets/php/conexion.php';

                  $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
                  if ($conexion->connect_error) {
                      die("La conexion falló: " . $conexion->connect_error);
                  }
    $limit_crtt=$_POST['crtlimt'];
    $limit_wrnt=$_POST['wrnlimt'];

	$update="update potencia_range set Range_Critical_T='".$limit_crtt."', Range_Warning_T='".$limit_wrnt."' where id=1";
	mysqli_query($conexion, $update) or die(mysqli_error());
	header('Location: index.php');


?>