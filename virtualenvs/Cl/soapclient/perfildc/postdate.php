<?php

	session_start();

  ?>
			<?php  
				
				$commands = escapeshellcmd('/var/www/html/Charts_Data/dash-master/getfate.py');
				$outputs = shell_exec($commands);
				#echo "<pre>"; print_r($output); echo "</pre>";
				
				$stringvs = file_get_contents("/var/www/html/Charts_Data/dash-master/dummycomp.json");

				    
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
						$newdate= strtotime($myArrays[0][$i]);
						$newdate= gmdate("d-m-Y H:i",$newdate);
						$arrayn['date'][] = $newdate;
						$cont=$cont+1;
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
				
				$_SESSION['max01'] = $max01;
				$_SESSION['maxts1'] = $maxts1;
				$valores   = array_values($arrayn);
				echo json_encode($valores);
				#echo "<pre>"; print_r($arrayn); echo "</pre>";
				#die();
			?>
		