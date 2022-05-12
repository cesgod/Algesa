
<?php 

    #include_once '../../../soap/nusoap_att.php';

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

  

    <title>DASHBOARD | CLIENT </title>
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
                      <li><a href="billingdate.php">Billing</a></li>
                    </ul>
                  </li>
                  <!--<li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">General Form</a></li>
                      <li><a href="form_advanced.html">Advanced Components</a></li>
                      <li><a href="form_validation.html">Form Validation</a></li>
                      <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>-->
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../../production/login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        

          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xlg modal-dialog-centered">
              <div class="modal-content">
                <h2>EventLogs</h2>
                <h3>Excesos de Potencia</h3>
                <?php

                  include_once '../../../../dashboard/assets/php/conexion.php';

                  $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
                  if ($conexion->connect_error) {
                      die("La conexion falló: " . $conexion->connect_error);
                  
                  $datealerts=date('m/d/Y');
                  var_dump($datealerts);
                  #$mem=0;
                  #if ($mem==1) {
                    
                  }
                  $querylg = mysqli_query($conexion, 'SELECT * FROM alertlogs Limit 100');
                  $queryptl = mysqli_query($conexion, 'SELECT * FROM potencia_range');
                  while ($ctrl = mysqli_fetch_assoc($queryptl)) {
                    $crt_limit=$ctrl['Range_Critical'];
                    $wrn_limit=$ctrl['Range_Warning'];
                    $crt_limitt=$ctrl['Range_Critical_T'];
                    $wrn_limitt=$ctrl['Range_Warning_T'];
                  }
                  echo "Limit".$wrn_limit;
                  echo '

                              <table id="datatable" class="table table-striped table-bordered dataTables" style="width:100%;">
                                <thead>
                                  <tr>
                                    
                                    <th>ID</th>
                                    <th>Número de Usuario</th>
                                    <th>Número de Medidor</th>
                                    <th>Potencia Contratada</th>
                                    <th>Potencia Instantánea</th>
                                    <th>Last Successfull Connection</th>
                                    <th>PD</th>
                                    <th>Barrio</th>
                                    <th>Alimentador</th>
                                    <th>V1</th>
                                    <th>V2</th>
                                    <th>V3</th>
                                    <th>Alertas</th>
                                  </tr>
                                </thead>
                                <tbody class="">
                  ';
                  while ($q = mysqli_fetch_assoc($querylg)) {

                    echo "<tr class=''>
                            <td>".$q['ID']."</td>
                            <td>".$q['N_Usuario']."</td>
                            <td>".$q['N_Medidor']."</td>
                            <td>".$q['P_Contratada']."</td>
                            <td>".$q['P_Instantanea']."</td>
                            <td>".$q['LastSC']."</td>
                            <td>".$q['Pd']."</td>
                            <td>".$q['Barrio']."</td>
                            <td>".$q['Alimentador']."</td>
                            <td>".$q['V1']."</td>
                            <td>".$q['V2']."</td>
                            <td>".$q['V3']."</td>
                            <td><p style='font-size:10px;'>".$q['Alerts']."</p></td>
                          </tr>";
                  }
                    echo '
                          </tbody>
                        </table>
                    ';

                #}
                ?>
              </div>
            </div>
          </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">Usuario
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target=".bd-example-modal-lg">Logs</button>
                    <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#limptn">Límite Potencia</button>
                    <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#limtns">Límite Tensión</button>
                    <a class="dropdown-item"  href="../../production/login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <!--<li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>-->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row countdata" style="display: inline-block; width: 100%;" >
          
        </div>
          <!-- /top tiles -->
           
          <div class="row">
         <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">
                <div class="modal fade" id="limptn" tabindex="-1" role="dialog" aria-labelledby="limptnLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="limptnLabel">Parameters</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="update_limit.php" method="POST">
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Marginal (%)</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="wrn-text-p" name="wrnlim" required="" <?php echo('value="'.$wrn_limit.'"');?>>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Critical (%)</label>
                                <div class="col-sm-6">
                                  <input type="number" class="form-control" id="crt-text-p" name="crtlim" required="" <?php echo('value="'.$crt_limit.'"');?>>
                                </div>
                              </div>
                          
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="submit_check" disabled >Update</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="limtns" tabindex="-1" role="dialog" aria-labelledby="limtnsLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="limtnsLabel">Parameters</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="update_limitt.php" method="POST">
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Marginal (+/-)</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="crt-text-t" name="wrnlimt" required="" <?php echo('value="'.$wrn_limitt.'"');?>>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Critical (+/-)</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="wrn-text-t" name="crtlimt" required="" <?php echo('value="'.$crt_limitt.'"');?>>
                                </div>
                              </div>
                          
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="submit_checkt" disabled >Update</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

              <div class="row">
                <div class="col-md-6 col-sm-4  ">
                  <!--<div class="x_panel">

                    <div class="container" style="background: #eeeeee">
                      <div>
                        <p><b>Critical (%)</b></p>
                      </div>
                      <div>
                        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#limptn" data-whatever="@mdo" style="float: right;"><i class="fas fa-sliders-h"></i></button>
                      </div>
                    </div>



                    
                  </div>-->
                  <div class="x_panel">
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Critico (%)</label>
                      <div class="col-sm-2">
                        <input type="text" readonly class="form-control" <?php echo('value="'.$crt_limit.'"');?>>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Marginal (%)</label>
                      <div class="col-sm-2">
                        <input type="text" readonly class="form-control" <?php echo('value="'.$wrn_limit.'"');?>>
                      </div>
                    </div>
                    <div class="x_title">
                      <h2>Potencia Graph    </h2>
                      <table border="0" cellspacing="5" cellpadding="5">
                        <tbody><tr>
                            <td><button class="ptrnormal btn btn-info">Normales</button></td>
                             <td><button class="ptrwarning btn btn-warning">Marginales</button></td>
                            <td><button class="ptrdanger btn btn-danger">Críticos</button></td>
                            <td><button class="ptrall btn btn-light"><span>All</span></button></td>
                        </tr>
                        </tbody>
                      </table> 
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Settings 1</a>
                              <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div id="echart_pie" style="height:350px;"></div>

                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-sm-4  ">
                 <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Critico (+/-)</label>
                      <div class="col-sm-2">
                        <input type="text" readonly class="form-control"  <?php echo('value="'.$crt_limitt.'"');?>>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Marginal (+/-)</label>
                      <div class="col-sm-2">
                        <input type="text" readonly class="form-control" <?php echo('value="'.$wrn_limitt.'"');?>>
                      </div>
                    </div>
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Tensión Graph    </h2>
                      <table border="0" cellspacing="5" cellpadding="5">
                        <tbody><tr>
                            <td><button class="trnormal btn btn-info">Normales</button></td>
                             <td><button class="trwarning btn btn-warning">Marginales</button></td>
                            <td><button class="trdanger btn btn-danger">Críticos</button></td>
                            <td><button class="trall btn btn-light"><span>All</span></button></td>
                        </tr>
                        </tbody>
                      </table>   
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Settings 1</a>
                              <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div id="echart_pie_II" style="height:350px;"></div>

                    </div>
                  </div>
                </div>

                </div>

                 <!--DATATABLES-->
                 <!--<script type="text/javascript">
                 var table = $('#datatable-buttons').DataTable().ajax.reload();
                   
                  setInterval( function () {
                      table.ajax.reload();
                  }, 10000 );
                </script>-->
           

          <div class="row"></div>
            <div class="col-md-6 col-sm-6 ">
              
            </div>
          </div>

          <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>AM550 <small>ESTADO DE MEDIDORES TRIFÁSICOS</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                         <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                
                                                       
                              <table id="datatable-buttons" class="table table-striped table-bordered dataTables" style="width:100%;">
                                <thead>
                                  <tr>
                                    <th>Cliente</th>
                                    <th>ID</th>
                                    <th>Número de Medidor</th>
                                    <th>Potencia Contratada</th>
                                    <th>Potencia Instantánea</th>
                                    <th>Last Successfull Connection</th>
                                    <th>PD</th>
                                    <th>V1</th>
                                    <th>V2</th>
                                    <th>V3</th>
                                    <th>Alertas</th>
                                  </tr>
                                </thead>
                                <tbody class="wholedata">
                                </tbody>
                                </table>
                                </div>
                                </div>
                      </div>
                  </div>
                </div>
              </div>  
          </div>
          <div class="modal fade" id="pdcind" tabindex="-1" role="dialog" aria-labelledby="limptnLabel" aria-hidden="true">
            <div class="modal-dialog modal-xlg modal-dialog-centered">
              <div class="col-md-12 col-sm-12  ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Perfil de Carga</h2>
                      <!--<ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Settings 1</a>
                              <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>-->
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                     


                      
                          <div class="x_content">
                            <canvas id="lineChart"></canvas>
                          </div>
                      



                    </div>
                  </div>
                </div>
              </div>
            </div> 
           



             
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            DASHBOARD ALGESA
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <div class="updatemain"></div>
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




    <script type="text/javascript">
    function autoRefresh_div() {
        $(".wholedata").load("alldata.php");
    }
     function autoRefresh_divup() {
        $(".countdata").load("countdata.php");
    }
    setInterval(autoRefresh_divup, 600000); // every 10 minutes
    setInterval(autoRefresh_div, 600000); // every 10 minutes
    autoRefresh_divup(); // on load
    autoRefresh_div(); // on load
    function updateTest() {
        $(".updatemain").load("../../../../virtualenvs/Cl/soapclient/test.php");
    }
    setInterval(updateTest, 60000); // every 1 minutes
    updateTest(); // on load  

    $('.trnormal').click(function() {
         $('.btn-warning-tr').hide();
         $('.btn-danger-tr').hide();
         $('.btn-normal-tr').show();
      });
      $('.trwarning').click(function() {
         $('.btn-warning-tr').show();
         $('.btn-danger-tr').hide();
         $('.btn-normal-tr').hide();
      });
      $('.trdanger').click(function() {
         $('.btn-warning-tr').hide();
         $('.btn-danger-tr').show();
         $('.btn-normal-tr').hide();
      });
      $('.trall').click(function() {
         $('.btn-warning-tr').show();
         $('.btn-danger-tr').show();
         $('.btn-normal-tr').show();
      });
      $('.ptrnormal').click(function() {
         $('.btn-warning-ptr').hide();
         $('.btn-danger-ptr').hide();
         $('.btn-normal-ptr').show();
      });
      $('.ptrwarning').click(function() {
         $('.btn-warning-ptr').show();
         $('.btn-danger-ptr').hide();
         $('.btn-normal-ptr').hide();
      });
      $('.ptrdanger').click(function() {
         $('.btn-warning-ptr').hide();
         $('.btn-danger-ptr').show();
         $('.btn-normal-ptr').hide();
      });
      $('.ptrall').click(function() {
         $('.btn-warning-ptr').show();
         $('.btn-danger-ptr').show();
         $('.btn-normal-ptr').show();
      });

      function datatableupd() {
        setTimeout(
          function() {
            init_DataTables();
          }, 6000);
      }
      datatableupd();
      var frst = document.querySelector("#wrn-text-p");
      var secnd = document.querySelector("#crt-text-p");
      var fwrn = document.querySelector("#wrn-text-t");
      var fcrt = document.querySelector("#crt-text-t");
      function blr(){
        var ab = frst.value;
        var vc = secnd.value;
        if(ab == "" && vc == ""){
        $("#submit_check").attr("disabled", "disabled");
        }
        else if(ab >= vc){
        $("#submit_check").attr("disabled", "disabled");
        }
        else if(vc >= ab){
        $("#submit_check").removeAttr("disabled");
        }
      }
      

      
      function tblr(){
        var abt = fwrn.value;
        var vct = fcrt.value;
        if(abt == "" && vct == ""){
        $("#submit_checkt").attr("disabled", "disabled");
        }
        else if(abt >= vct){
        $("#submit_checkt").attr("disabled", "disabled");
        }
        else if(vct >= abt){
        $("#submit_checkt").removeAttr("disabled");
        }
      }
      fcrt.addEventListener("blur",tblr);
      secnd.addEventListener("blur",blr);



    </script>
    
   <!-- <script type="text/javascript">
  
  function dis(){
    xmlhttp= new XMLHttpRequest();
    xmlhttp.open("GET","alldata.php",false);
    xmlhttp.send(null);
    document.getElementById("wholedata").innerHTML=xmlhttp.responseText;
  }
  dis();
  setInterval(function(){
    dis();
  },60000);
</script>-->

<!--
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>-->
    <!--<script type="text/javascript">
              $(document).ready(function() {
                  $('#datatable-buttons').DataTable({
                      "scrollX": true,
                      pageLength: 1000,
                      lengthMenu: [50, 100, 500],
                      dom: 'Bfrtip',
                      buttons: [
                          'copyHtml5',
                          'csvHtml5',
                      {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'A1'
                      }],
                      
                  });
              } );
              



            </script>
<script type="text/javascript">
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( $('#min').val(), 10 );
        var max = parseInt( $('#max').val(), 10 );
        var age = parseFloat( data[9] ) || 0; // use data for the age column
 
        if ( ( isNaN( min ) && isNaN( max ) ) ||
             ( isNaN( min ) && age <= max ) ||
             ( min <= age   && isNaN( max ) ) ||
             ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
    var table = $('#datatable-buttons').DataTable();
     
    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').keyup( function() {
        table.draw();
    } );
} );
</script>-->
<!--<script type="text/javascript">
 

const allRanges = document.querySelectorAll(".range-wrap");
allRanges.forEach((wrap) => {
  const range = wrap.querySelector(".range");
  const bubble = wrap.querySelector(".bubble");

  range.addEventListener("input", () => {
    setBubble(range, bubble);
  });

  // setting bubble on DOM load
  setBubble(range, bubble);

});

function setBubble(range, bubble) {
  const val = range.value;

  const min = range.min || 0;
  const max =  range.max || 100;

  const offset = Number(((val - min) * 100) / (max - min));

  bubble.textContent = val;

  // yes, 14px is a magic number
  bubble.style.left = `calc(${offset}% - 14px)`;
  $.ajax({
       type: "POST",
       url: "alldata.php",
       data: {val},
       success: function(msg){
         $(".wholedata").load("alldata.php");
         console.log(val);
       }
     }); 
}
     

</script>-->
  </body>
</html>
<script>
if(document.getElementById('ftnt_topbar_script')) {
    document.getElementById('ftnt_topbar_script').remove()
} else {
   var pluginHolder = document.createElement('div');
   document.body.appendChild(pluginHolder);
}
