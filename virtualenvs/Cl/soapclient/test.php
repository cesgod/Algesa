<?php  
	session_start();
?>
<?php
#$command = escapeshellcmd('pysoapp.py');
#$output = shell_exec($command);
#$outp = json_encode($output);
#$json_string = json_encode($output, JSON_PRETTY_PRINT);
#echo "<pre>"; print_r($output[3]); echo "</pre>";
#var_dump(json_decode($json_string));
#var_dump(json_decode($json_string, true));
$stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/data.json");

    if ($stringv === false) {
      echo "No content<br>";
    }

$output = json_decode($stringv, true);
    if ($output === null) {
        // deal with error...
      echo "Parse error<br>";
    }

$cont=0;
$a=0;
$myArray[$a] = $output;
#echo "<pre>"; print_r($myArray); echo "</pre>";
$limit = count($myArray[0]);
#echo "<br>";
#echo "Total: ".$lim."<br>";
$arrayn=array();
for ($i=0; $i < $limit; $i++) { 
	#echo $myArray[0][$i]." - ";
	if ($cont<11) {
		if ($cont>9) {
			$arrayn[$a][] = substr($myArray[0][$i], 0, 16);
			$cont=$cont+1;
		}else {
			$arrayn[$a][] = $myArray[0][$i];
		$cont=$cont+1;
		}
	}else{
		$cont = 0;
		$a=$a+1;
		$i=$i-1;
	}

}
#$limit = count($arrayn);
$nlimit=count($arrayn);
#echo "Limit: ",$nlimit;
$volc=0;
$volm=0;
$voln=0;
$ptm=0;
$ptc=0;
$ptn=0;
$pinstantanea=0;
$preservada=0;
$v1=0;
$v2=0;
$v3=0;
$pinstantanea=$arrayn[0][5];
#echo "P: ".$pinstantanea;
#echo "<pre>"; print_r($arrayn); echo "</pre>";
#die();
for ($i=0; $i < $nlimit; $i++) { 
	$pinstantanea=$arrayn[$i][5];
	$preservada=$arrayn[$i][0];
	$v1=$arrayn[$i][6];
	$v2=$arrayn[$i][7];
	$v3=$arrayn[$i][8];
	if ($v1>(220*1.1) or $v2>(220*1.1) or $v3>(220*1.1)) {
		$volc=$volc+1;
	}else if (($v1>=(220*1.05) and ($v1<242)) or ($v2>=(220*1.05) and ($v2<242)) or ($v3>=(220*1.05) and ($v3<242))) {
		$volm=$volm+1;
	}else{
		$voln=$voln+1;
	}

	if ($pinstantanea > ($preservada * 0.85) and $pinstantanea < ($preservada * 0.9)) {
	$ptm = $ptm+1;
	}elseif($pinstantanea > ($preservada * 0.9)){
	$ptc = $ptc+1;
	}else{
	$ptn = $ptn+1;
	}
	#echo "<br>V1: ".$volc;
	#echo "<br>V2: ".$volm;
	#echo "<br>V3: ".$voln;
}
$voln=$nlimit-($volc+$volm);
$ptn=$nlimit-($ptc+$ptm);
$_SESSION['volc']=$volc;
$_SESSION['volm']=$volm;
$_SESSION['voln']=$voln;
$_SESSION['ptc']=$ptc;
$_SESSION['ptm']=$ptm;
$_SESSION['ptn']=$ptn;
#echo "<br> Vol1: ".$volm;
#echo "<br>V3: ".$voln;
#$_SESSION['arrayn'] = $arrayn;
$fp = fopen('resultsscl.json', 'w');
fwrite($fp, json_encode($arrayn));
fclose($fp);
#$limit = count($arrayn);
#echo "Limit: ".$limit;

#$myArray['a'] = explode(',', $json_string);
#echo "<pre>"; print_r($arrayn[3][0]); echo "</pre>";
#echo "<pre>"; print_r($arrayn); echo "</pre>";
?>