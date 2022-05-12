<?php 

      #include_once '../../../soap/nusoap_att.php';
      include_once '../../../../dashboard/assets/php/conexion.php';
    $string = file_get_contents("../../../../virtualenvs/Cl/soapclient/resultsscl.json");

    if ($string === false) {
      echo "No content<br>";
    }

    $arrayn = json_decode($string, true);
    if ($arrayn === null) {
        // deal with error...
      echo "Parse error<br>";
    }
    #$lim=482;
    

    	

                                   
    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }
    #$rcrt=floatval($_POST['val']);
    #	$upd="update potencia_range set Range_Critical='".$rcrt."'";
	#	mysqli_query($conexion, $upd);

    $data=0;
    $dvlimit = count($arrayn);
#echo "Limm ".$dvlimit;
    $rangept = mysqli_query($conexion, 'SELECT * FROM potencia_range');

    while ($ptr = mysqli_fetch_assoc($rangept)) {

        $rangecrt = $ptr['Range_Critical'];
        $rangewrn = $ptr['Range_Warning'];
        $rangevoltagec = $ptr['Range_Critical_T']/100;
        $rangevoltagew = $ptr['Range_Warning_T']/100;
    }
    $rangecrt=floatval($rangecrt*0.01);
    $rangewrn=floatval($rangewrn*0.01);
    #echo $rangewrn." ptdata ".$rangecrt;
    #echo "<pre>"; print_r($arrayn); echo "</pre>";
    $marginal=0;
    $normal=0;
    $critical=0;

    for ($i=0; $i < $dvlimit ; $i++) { 

   $pinstantanea=$arrayn[$i][5];
   $preservada=$arrayn[$i][0];
   

   if ($pinstantanea > ($preservada * $rangewrn) and $pinstantanea < ($preservada * $rangecrt)) {
      $classpt = "btn-warning";
      $classptr= "btn-warning-ptr";
      $marginal=$marginal+1;
   }elseif($pinstantanea > ($preservada * $rangecrt)){
      $classpt = "btn-danger";
      $classptr= "btn-danger-ptr";	
      $critical=$critical+1;
   }else{
      $classpt = "";
      $classptr="btn-normal-ptr";
      
   }
}
$normal=$dvlimit-($critical+$marginal);

      echo '
          <div class="tile_count">
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Reading</span>
              <div class="count">'.$dvlimit.'</div>
              <!--<span class="count_bottom"><i class="green">0% </i> From last Hour</span>-->
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Normales</span>
              <div class="count">'.$normal.'</div>
              <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>0% </i> From last Week</span>-->
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Críticos</span>
              <div class="count red">'.$critical.'</div>
              <!--<span class="count_bottom"><i class="red"><i class="fa fa-sort-asc"></i>0% </i> From last Week</span>-->
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Marginal</span>
              <div class="count">'.$marginal.'</div>
              <!--<span class="count_bottom"><i class="warning"><i class="fa fa-sort-desc"></i>0% </i> From last Week</span>-->
            </div>
            <!--<div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>-->
          </div>
        ';
?>