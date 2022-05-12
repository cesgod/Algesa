<?php
	
	include_once '../../../dashboard/assets/php/conexion.php';

                  $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
                  if ($conexion->connect_error) {
                      die("La conexion falló: " . $conexion->connect_error);
                  }
    $limit_crt=$_POST['crtlim'];
    $limit_wrn=$_POST['wrnlim'];

	$update="update potencia_range set Range_Critical='".$limit_crt."', Range_Warning='".$limit_wrn."' where id=1";
	mysqli_query($conexion, $update) or die(mysqli_error());
	header('Location: index.php');


?>