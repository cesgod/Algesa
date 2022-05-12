<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

  

    <title>DASHBOARD | CLYFSA </title>

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
.range-wrap {
  position: relative;
  width: 100%;
  padding: 1.5em 0; /*  Giving more room for hover  */
  /*max-width: 400px;*/
}

/* Custom Bar */
.range-wrap::before {
  content: "";
  background: linear-gradient(to right, #cae500, #e5ac00, #e51700);
  width: 100%;
  height: 8px;
  display: block;
  position: absolute;
  border-radius: 4px;
  top: 50%;
  transform: translateY(-50%);
  transition: height 100ms ease;
}

.range-wrap:hover::before {
  height: 10px;
}

/*  Hide Original */
.range {
  width: 100%;
  cursor: pointer;
  opacity: 0;
}

.bubble {
  background: white;
  border: 3px solid #cbd2da;
  position: absolute;
  border-radius: 50%;
  width: 2rem;
  height: 2rem;
  top: 50%;
  transform: translateY(-50%);
  pointer-events: none; /* Remove pointer events on Bubble so user can click on the actual thumb beaneath it!  */
  color: transparent;
  display: grid;
  place-items: center; /*  Place the number on the center  */
  font-weight: bold;
  transition: color 100ms ease, transform 100ms ease;
  user-select: none; /*  Prevent Accidentally highlighting the number while sliding the cursor  */

}

.range-wrap:hover .bubble,
.range-wrap:focus .bubble {
  color: black;
  transform: translateY(-50%) scale(1.5);
  padding: 0.1em;

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
              <a href="index.html" class="site_title"><img src="images/1logo.png"></a>
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
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
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
                    <a class="dropdown-item"  href="logsdata.php">Logs</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    <a class="dropdown-item"  href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
          <div class="row" style="display: inline-block; width: 100%;" >
          <div class="tile_count">
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Reading</span>
              <div class="count"><?php echo $lim; ?></div>
              <!--<span class="count_bottom"><i class="green">0% </i> From last Hour</span>-->
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Normales</span>
              <div class="count"><?php echo $normal; ?></div>
              <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>0% </i> From last Week</span>-->
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Críticos</span>
              <div class="count red"><?php echo $critical; ?></div>
              <!--<span class="count_bottom"><i class="red"><i class="fa fa-sort-asc"></i>0% </i> From last Week</span>-->
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Marginal</span>
              <div class="count"><?php echo $marginal; ?></div>
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
        </div>
          <!-- /top tiles -->

          <div class="row">
         <div class="col-md-12 col-sm-12 ">
              <div class="dashboard_graph">
                
              <div class="row">
                <div class="col-md-6 col-sm-4  ">
                  <h3>Rango de Potencia</h3>
                  <p><b>Critical (%)</b></p>
                  <div class="range-wrap">
                    <input type="range" class="range" step="5">
                    <output class="bubble"></output>
                  </div>
                  <p><b>Marginal (%)</b></p>
                  <div class="range-wrap">
                    <input type="range" class="range" step="5">
                    <output class="bubble"></output>
                  </div>
                  <div class="x_panel">
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
                  <h3>Rango de Tensión</h3>
                  <p><b>Critical (%)</b></p>
                  <div class="range-wrap">
                    <input type="range" class="range" step="5">
                    <output class="bubble"></output>
                  </div>
                  <p><b>Marginal (%)</b></p>
                  <div class="range-wrap">
                    <input type="range" class="range" step="5">
                    <output class="bubble"></output>
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

           



             
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            DASHBOARD AM550
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
    setInterval(autoRefresh_div, 600000); // every 10 minutes
    autoRefresh_div(); // on load
    function updateTest() {
        $(".updatemain").load("../../../virtualenvs/Cl/soap/test.php");
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

  </body>
</html>
