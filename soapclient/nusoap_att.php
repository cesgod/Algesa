<?php
  include_once 'nsoap.php';
$soapclientatt = new SoapClient("http://clvmweb.clyfsa.com:81/SEP2WebServices/ManagementService.svc?singleWsdl");


$critical=0;
$marginal=0;
$normal=0;
for ($i=0; $i < $lim ; $i++) { 
    $nameatt=($array['QueryGroupMembersResult']['Devices']['DeviceReference'][$i]['Name']);
    #echo $nameatt." - ";
     $params =  array(
        'deviceReference'     => array(
            'Name' => $nameatt,
        ),
        'queryAll'            => 'false',
    ); 
    $response = $soapclientatt->QueryDeviceAttributes($params); 
    $arrayatt = json_decode(json_encode($response), true);
    $raw = $arrayatt['QueryDeviceAttributesResult']['AttributeGroup'][3]['Attributes']['AttributeInfo'];
    $am550att[$i] = $raw;
    $v1=rand(190,250);
    $v2=rand(190,250);
    $v3=rand(190,250);






    if ($v1>(220*1.1) || $v2>(220*1.1) || $v3>(220*1.1)) {
	   $critical=$critical+1;
    }
    if (($v1>=(220*1.05) and ($v1<242)) or ($v2>=(220*1.05) and ($v2<242)) or ($v3>=(220*1.05) and ($v3<242))) {
	   $marginal=$marginal+1;
    }
    if ($v1<(220*1.05) and $v2<(220*1.05) and $v3<(220*1.05)) {
	   $normal=$normal+1;
    }
}

 


#echo $nameatt;


#$name 	=  '28200000';

/*
$response = $soapclientatt->QueryDeviceAttributes($params);
$arrayatt = json_decode(json_encode($response), true);
$lim = $arrayatt['QueryDeviceAttributesResult']['AttributeGroup'][3]['Attributes']['AttributeInfo'];*/





#$alldata = (array) json_decode($response);
#echo '<pre>'; print_r(json_encode($response, JSON_PRETTY_PRINT)); echo '</pre>';
#echo '<pre>'; print_r($am550att); echo '</pre>';

#$alldata = json_encode($response, JSON_PRETTY_PRINT);


#echo json_encode($response[0], JSON_PRETTY_PRINT);
#echo "<pre>".$response."</pre>";
#var_dump($response);

?>