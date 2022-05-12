
<?php
session_start();
?>

<?php

include 'conexion.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
$password = hash('sha256', $password);
 
$sql = "SELECT * FROM $tbl_name WHERE user = '$username'";


$result = $conexion->query($sql);


if ($result->num_rows > 0) {   
echo "good";  }
	
 
  $row = $result->fetch_array(MYSQLI_ASSOC);
 // if (password_verify($password, $row['password'])) { 
if ($password==$row['pass']) { 

 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (20 * 6000);

    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=inicio.php>Panel de Control</a>"; 
    
    if ($_SESSION['username']=='clyfsa') {
      
      header('Location: ../index.php');
    
  }else { 
    header('Location: ../login.php');//redirecciona a la pagina del usuario
   }
 }else { 
    header('Location: ../login.php');//redirecciona a la pagina del usuario
   }
 mysqli_close($conexion); 
 ?>