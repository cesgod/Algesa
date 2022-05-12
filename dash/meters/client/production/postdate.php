<?php

	session_start();

  ?>
			<?php  
				
				$commands = escapeshellcmd('/var/www/html/virtualenvs/Cl/soapclient/perfildc/getfate.py');
				$outputs = shell_exec($commands);
				#echo "<pre>"; print_r($outputs); echo "</pre>";
				#phpinfo();
				#die();
				$stringvs = file_get_contents("/var/www/html/dash/meters/client/production/dummycomp.json");

				    
				    if ($stringvs === false) {
				      echo "No content<br>";
				    }

				$outputs = json_decode($stringvs, true);
				    if ($outputs === null) {
				        // deal with error...
				      echo "Parse error<br>";
				    }
				$max01=0;
				$maxts1=0;
				$cont=0;
				$a=0;
				
				$myArrays[$a] = $outputs;
				$limit = count($myArrays[0]);
				#echo "Limit: ".$limit;
				$arrayn=array();
				for ($i=0; $i < $limit; $i++) { 
					#echo $myArrays[0][$i]." - ";
					if ($cont<1) {
						#$newdate= strtotime($myArrays[0][$i]);
						#$newdate= gmdate("d-m-Y H:i",$newdate);
						$arrayn['date'][] = $myArrays[0][$i];
						$cont=$cont+1;
					#echo " - ".$newdate." - ";	
					}else {
						$arrayn['data'][] = $myArrays[0][$i];
						if ($myArrays[0][$i]>$max01) {
							$max01 = $myArrays[0][$i];
							$i=$i-1;
							$maxts1 = $myArrays[0][$i];
							$i=$i+1;
						}
						$cont=0;
					}
				}
				include 'php/conexion.php';
				$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
				if ($conexion->connect_error) {
				    die("La conexion falló: " . $conexion->connect_error);

				}
				$meter=$_SESSION['meter01'];
				#echo "Meter: ".$meter." - - - - ";
				$potenciac   = 0;
				$potenciacon = mysqli_query($conexion, 'SELECT * FROM potencia WHERE MeterID ="' . $meter . '"');

				while ($pcon = mysqli_fetch_assoc($potenciacon)) {
				    $potenciac = $pcon['pcontratada'];
				}
				$arrayn['pcont'][] = $potenciac;
				$_SESSION['max01'] = $max01;
				$_SESSION['maxts1'] = $maxts1;
				$valores   = array_values($arrayn);
				echo json_encode($valores);
				#echo "<pre>"; print_r($arrayn); echo "</pre>";
				#die();
			?>
		