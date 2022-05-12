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
$month=$_POST['period'];
$_SESSION['month']=$month;

$mes=$_SESSION['month'];
    if ($mes=='Ene') {
     $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Ene/databill.json");
    }else if ($mes=='Feb') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Feb/databill.json");
    }else if ($mes=='Mar') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Mar/databill.json");
    }else if ($mes=='Apr') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Apr/databill.json");
    }else if ($mes=='May') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/May/databill.json");
    }else if ($mes=='Jun') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Jun/databill.json");
    }else if ($mes=='Aug') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Aug/databill.json");
    }else if ($mes=='Sep') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Sep/databill.json");
    }else if ($mes=='Oct') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Oct/databill.json");
    }else if ($mes=='Nov') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Nov/databill.json");
    }else if ($mes=='Dic') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Dic/databill.json");
    }else if ($mes=='Ene21') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Ene21/databill.json");
    }else if ($mes=='Feb21') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Feb21/databill.json");
    }else if ($mes=='Mar21') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Mar21/databill.json");
    }else if ($mes=='Apr21') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Apr21/databill.json");
    }else if ($mes=='May21') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/May21/databill.json");
    }else if ($mes=='Jun21') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Jun21/databill.json");
    }else if ($mes=='Jul21') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Jul21/databill.json");
    }else if ($mes=='Aug21') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Aug21/databill.json");
    }else if ($mes=='Sep21') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Sep21/databill.json");
    }else if ($mes=='Oct21') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Oct21/databill.json");
    }else if ($mes=='Nov21') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Nov21/databill.json");
    }else if ($mes=='Dic21') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Dic21/databill.json");
    }else if ($mes=='Ene22') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Ene22/databill.json");
    }else if ($mes=='Feb22') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Feb22/databill.json");
    }else if ($mes=='Mar22') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Mar22/databill.json");
    }else if ($mes=='Apr22') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Apr22/databill.json");
    }else if ($mes=='May22') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/May22/databill.json");
    }else if ($mes=='Jun22') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Jun22/databill.json");
    }else if ($mes=='Jul22') {
      $stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/Jul22/databill.json");
    }

    

    echo "Month: ".$mes;
#$stringv = file_get_contents("../../../virtualenvs/Cl/soapclient/billing/May/databill.json");

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
#die();
#echo "<br>";
#echo "Total: ".$lim."<br>";
$arrayn=array();
for ($i=0; $i < $limit; $i++) { 
	#echo $myArray[0][$i]." - ";
	if ($cont<8) {
		$arrayn[$a][] = floatval($myArray[0][$i]);
		$cont=$cont+1;
		#echo $myArray[0][$i].' - ';
	}else{
    $arrayn[$a][] = $myArray[0][$i];
		$cont = 0;
		$a=$a+1;
		#$i=$i-1;
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
#die();

#echo "<br> Vol1: ".$volm;
#echo "<br>V3: ".$voln;
#$_SESSION['arrayn'] = $arrayn;
$fp = fopen('resultsbill.json', 'w');
fwrite($fp, json_encode($arrayn));
fclose($fp);
#$limit = count($arrayn);
#echo "Limit: ".$limit;

#$myArray['a'] = explode(',', $json_string);
#echo "<pre>"; print_r($arrayn[3][0]); echo "</pre>";
#echo "<pre>"; print_r($arrayn); echo "</pre>";
header('Location: ../../../dash/meters/client/production/billing.php');
?>