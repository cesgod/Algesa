<?php

  
  $stringv = file_get_contents("../../../../virtualenvs/Cl/soapclient/databill.json");

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
#echo "Total: ".$limit."<br>";
$arrayn=array();
for ($i=0; $i < $limit; $i++) { 
  #echo $myArray[0][$i]." - ";
  if ($cont==0) {
      $arrayn[] = $myArray[0][$i];
      $list=$list+1;
      $cont=$cont+1;
  }else{
    $cont=$cont+1;
  }
  if ($cont==8) {
    $cont=0;
  }
  

}
  #echo "<pre>"; print_r($arrayn); echo "</pre>";

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
                    <ul class="nav child_menu">
                      <li><a href="index.php">Dashboard</a></li>
                      <li><a href="pcarga.php">Perfil de Carga</a></li>
                      <li><a href="billing.php">Billing</a></li>
                    </ul>
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
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->
           
        <div class="row">
         <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">


              
                <div class="row">
                <div class="x_title">
                            <h2>Facturación <small> Medidores ALGESA</small></h2>
                </div>
                  <div class="col-md-12 col-sm-12">
                    <div class="col-md-12 col-sm-12" style="display: block; margin-left: 330px; margin-right: auto;">
                      <img src="images/0logo.png" width="300px"><br>
                    </div>
                  </div>
                  <div class="x_content">

                    <br />

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="../../../../virtualenvs/Cl/soapclient/testbill.php" method="POST">
                     
                     
                      
                      
                      
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Periodo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <select class="form-control" id="period" name="period">
                            <option value="Ene">Enero 2020</option>
                            <option value="Feb">Febrero 2020</option>
                            <option value="Mar">Marzo 2020</option>
                            <option value="Apr">Abril 2020</option>
                            <option value="May">Mayo 2020</option>
                            <option value="Jun">Junio 2020</option>
                            <option value="Jul">Julio 2020</option>
                            <option value="Aug">Agosto 2020</option>
                            <option value="Sep">Septiembre 2020</option>
                            <option value="Oct">Octubre 2020</option>
                            <option value="Nov">Noviembre 2020</option>
                            <option value="Dic">Diciembre 2020</option>
                            <option value="Ene21">Enero 2021</option>
                            <option value="Feb21">Febrero 2021</option>
                            <option value="Mar21">Marzo 2021</option>
                            <option value="Apr21">Abril 2021</option>
                            <option value="May21">Mayo 2021</option>
                            <option value="Jun21">Junio 2021</option>
                            <option value="Jul21">Julio 2021</option>
                            <option value="Aug21">Agosto 2021</option>
                            <option value="Sep21">Septiembre 2021</option>
                            <option value="Oct21">Octubre 2021</option>
                            <option value="Nov21">Noviembre 2021</option>
                            <option value="Dic21">Diciembre 2021</option>
                            <option value="Ene22">Enero 2022</option>
                            <option value="Feb22">Febrero 2022</option>
                            <option value="Mar22">Marzo 2022</option>
                            <option value="Apr22">Abril 2022</option>
                          </select>
                         
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button class="btn btn-primary" type="button">Cancelar</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Solicitar</button>
                        </div>
                      </div>

                    </form>
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
   
    <!-- jQuery -->
    
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- ECharts -->
    <script src="../vendors/echarts/dist/echarts.min.js"></script>

    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>




    
    
   
  </body>
</html>
<script>
if(document.getElementById('ftnt_topbar_script')) {
    document.getElementById('ftnt_topbar_script').remove()
} else {
   var pluginHolder = document.createElement('div');
   document.body.appendChild(pluginHolder);
}