<?php  
    session_start();
?>
<?php
    #include_once '../virtualenvs/Cl/soap/test.php';
$volc=$_SESSION['volc'];
$volm=$_SESSION['volm'];
$voln=$_SESSION['voln'];
$ptc=$_SESSION['ptc'];
$ptm=$_SESSION['ptm'];
$ptn=$_SESSION['ptn'];
    $gresult = array();
    $gresult['marginal'] = $volm;
    $gresult['critical'] = $volc;
    $gresult['normal'] = $voln;
    $gresult['pmarginal'] = $ptm;
    $gresult['pcritical'] = $ptc;
    $gresult['pnormal'] = $ptn;
    $valores   = array_values($gresult);

    echo json_encode($valores);
 
?>