<?php

  session_start();
  
  #var_dump($maxdm01);
  #echo "maxxx: ".$maxdm01;
  #echo "<br>max T: ".$maxts1;
  $string = file_get_contents("/var/www/html/dash/meters/client/production/ste.json");

      
      if ($string === false) {
        echo "No content<br>";
      }

  $outp = json_decode($string, true);
      if ($outp === null) {
          // deal with error...
        echo "Parse error<br>";
      }
    $rangeib = array();
    $rangeib = $outp;
    #echo "Range: <pre>";print_r($rangeib);echo "</pre>";
    $day1    = $rangeib['range01']['day1'];
    $month1  = $rangeib['range01']['month1'];
    $year1   = $rangeib['range01']['year1'];
    $day2    = $rangeib['range01']['day2'];
    $month2  = $rangeib['range01']['month2'];
    $year2   = $rangeib['range01']['year2'];
    $meterd  = $rangeib['range01']['meter'];
    
    $date01  = $day1. "-".$month1. "-".$year1;     
    $date02  = $day2. "-".$month2. "-".$year2;
       


?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="icon" href="images/favicon.ico" type="image/ico" />-->

  

    <title>DASHBOARD | BILLING </title>
    <!-- Favicon -->
    <link href="images/favicon.png" rel="icon" type="image/x-icon"/>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db5df82b13.js" crossorigin="anonymous"></script>


    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">




    <style type="text/css">
      .btn-warning-val{
        background-image: linear-gradient(to bottom, #ffd300, #f9d900, #f2df00, #eae507, #e2eb12);
        color: #212529;
      }
      .btn-danger-val{
        background-image: linear-gradient(to bottom, #ff0000, #e40001, #c90001, #af0002, #960000);
        color: #ffffff;
      }
      thead input {
        width: 100%;
    }

@media (min-width: 1200px) {
.modal-xlg {
  min-width: 1200px;
      width: 90%; 
  }
}
.modal-xlg {
      width: 90%; 
}

    </style>
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../src/dist/loading-bar.css"/>
<script type="text/javascript" src="../src/dist/loading-bar.js"></script>    
<!--
<link href="https://cdn.datatables.net/searchpanes/1.2.0/css/searchPanes.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" rel="stylesheet">-->
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="images/1logo.png"></a>
            </div>

            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <!--<div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>-->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  
                      <li><a href="index.php">Dashboard</a></li>
                      <li><a href="pcarga.php">Perfil de Carga</a></li>
                      <li><a href="billingdate.php">Billing</a></li>
                  
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        
            
          
        <!-- top navigation -->
        
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="background: #2a3f54">
          <!-- top tiles -->
          
          <!-- /top tiles -->
           
        <div class="row" style="background: #2a3f54">
         <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">


              
                <div class="row" style="background: #2a3f54">
                <div class="x_title">
                            <h2>Perfil de Carga <small> <?php echo $meterd; echo " Desde: ".$date01." Hasta: ".$date02;  ?></small></h2>
                </div>
                  <div class="col-md-12 col-sm-12" style="background: #2a3f54">
                    <div class="col-md-12 col-sm-12" style="display: block; margin-left: 330px; margin-right: auto;">
                      
                    </div>
                  </div>
                  <div class="x_content" style="background: #2a3f54">

                    <br />
                  <div class="card-body" style="height: 700px;">
                    <div class="chart-area"style="height: 500px;" >
                      <canvas id="chartBig1"></canvas>
                      <!--<canvas id="miGrafico"></canvas>-->
                    </div>
                  </div>
                    <div class="col-md-12 col-sm-12 ">
                      <button class=" btn btn-danger updatemax"><h4><b>DEMANDA MÁXIMA:</b><b>kW</b>  | <b>TimeStamp:</b> </h4></button>
                    </div>
                </div>
                </div>
                  

                <!-- footer content -->
          <footer>
            <div class="pull-right">
              DASHBOARD ALGESA
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->


            </div>
                      
         
          
           



             
        <!-- /page content -->

        
        </div>
      </div>
   
     <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   

    <!-- Custom Theme Scripts 
    <script src="../build/js/custom.min.js"></script>


    

    Chart JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script> 
  <script src="../assets/js/plugins/chartjs-plugin-annotation.js"></script>
    <!--<script src="../../../../virtualenvs/Cl/soapclient/perfildc/chartdata.js"></script>-->
  <script src="../assets/php/demo.js"></script>
  <script type="text/javascript">
    function updateTest() {
        $(".updatemax").load("maxdatarf.php");
    }
    setInterval(updateTest, 5000); // every 5 secs
    //updateTest(); // on load  
  </script>


   
    
   
  </body>
</html>

<script>
if(document.getElementById('ftnt_topbar_script')) {
    document.getElementById('ftnt_topbar_script').remove()
} else {
   var pluginHolder = document.createElement('div');
   document.body.appendChild(pluginHolder);
}
