<?php
  session_start();
  if($_SESSION["login"]!=1)
    header("Location: index.php");
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>ESSARE - Perfil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/icono.ico">

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">

    </head>


    <body>

        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="dash.php" class="logo">
                            <img src="assets/images/ESSARE.jpg" alt="logo" class="logo-lg" />
                            <img src="assets/images/logo_sm.png" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><a href="#">Acerca De</a></li>
                                <li><a href="#">Ayuda</a></li>
                                <li><a href="#">Contacto</a></li>
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                         <input type="text" placeholder="Search..." class="form-control">
                                         <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-2.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile.php"><i class="ti-user m-r-10"></i> Perfil</a></li>
                                        <li><a href="timeline.php"><i class="mdi mdi-timelapse"></i> Timeline</a></li>
                                        <li><a href="calendar.php"><i class="mdi mdi-calendar"></i> Calendar</a></li>
                                        <li><a href="contacts.php"><i class="mdi mdi-account-multiple"></i> Contacts</a></li>
                                        <li class="divider"></li>
                                        <script type="text/javascript">
                                          function logout() {
                                              $.get("logout.php");
                                              return false;
                                            }
                                        </script>
                                        <li><a href="index.php"  onclick="logout()"><i class="ti-power-off m-r-10"></i>Salir</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="profile.php">Sergio Pérez</a>
                                    <p class="text-muted m-0">Administrator</p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="dash.php"><i class="ti-home"></i> Dashboard </a></li>

                                <li><a href="busqueda.php"><i class="fa fa-search" aria-hidden="true"></i> Realizar Busqueda </a></li>

                                <li><a href="page404.php"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Realizar Venta </a></li>

                                <li><a href="reportes.php"><i class="fa fa-file-o" aria-hidden="true"></i> Reportes </a></li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-users"></i> Usuarios <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="alta_u.php">Alta de Usuario</a></li>
                                        <li><a href="mod_u.php">Modificar Usuario</a></li>
                                        <li><a href="eli_u.php">Eliminar Usuario</a></li>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="fa fa-database"></i> Inventario <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="alta_p.php">Alta de Producto</a></li>
                                        <li><a href="mod_p.php">Modificar Producto</a></li>
                                        <li><a href="eli_p.php">Eliminar Producto</a></li>
                                        <li><a href="sur_p.php">Surtir Producto</a></li>
                                        </li>
                                    </ul>
                                </li>


                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                     <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="header-title">Timeline</h4>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="timeline">
                                    <article class="timeline-item alt">
                                        <div class="text-right">
                                            <div class="time-show first">
                                                <a href="#" class="btn btn-custom">Today</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="">2 hour ago</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>Envio del proyecto de Diseño de Interfaces</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item ">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-success"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-success">4 hours ago</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>consectetur adipisicing elit. Iusto, optio, dolorum <a href="#">John deon</a> provident rerum aut hic quasi placeat iure tempora laudantium </p>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon bg-primary"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-primary">10 hours ago</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>3 new photo Uploaded on facebook fan page</p>
                                                    <!--<div class="album">-->
                                                        <!--<a href="#">-->
                                                            <!--<img alt="" src="assets/images/small/img-1.jpg">-->
                                                        <!--</a>-->
                                                        <!--<a href="#">-->
                                                            <!--<img alt="" src="assets/images/small/img-2.jpg">-->
                                                        <!--</a>-->
                                                        <!--<a href="#">-->
                                                            <!--<img alt="" src="assets/images/small/img-3.jpg">-->
                                                        <!--</a>-->
                                                    <!--</div>-->
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-danger"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-danger">14 hours ago</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>Outdoor visit at California State Route 85 with John Boltana &
                                                        Harry Piterson regarding to setup a new show room.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-muted">19 hours ago</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>Jonatha Smith added new milestone <span><a href="#">Pathek</a></span>
                                                        Lorem ipsum dolor sit amet consiquest dio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-item alt">
                                        <div class="text-right">
                                            <div class="time-show">
                                                <a href="#" class="btn btn-custom">Yesterday</a>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-warning"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-warning">07 January 2017</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>Montly Regular Medical check up at Greenland Hospital by the
                                                        doctor <span><a href="#"> Johm meon </a></span>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon bg-primary"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-primary">07 January 2017</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>Download the new updates of Ubold admin dashboard</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-success"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-success">07 January 2017</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>Jonatha Smith added new milestone <span><a class="blue" href="#">crishtian</a></span>
                                                        Lorem ipsum dolor sit amet consiquest dio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="timeline-item alt">
                                        <div class="text-right">
                                            <div class="time-show">
                                                <a href="#" class="btn btn-custom">Last Month</a>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow-alt"></span>
                                                    <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-muted">31 December 2015</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>Download the new updates of Ubold admin dashboard</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon bg-danger"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-danger">16 Decembar 2015</h4>
                                                    <p class="timeline-date text-muted"><small>08:25 am</small></p>
                                                    <p>Jonatha Smith added new milestone <span><a href="#">prank</a></span>
                                                        Lorem ipsum dolor sit amet consiquest dio</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">90%</strong>.
                        </div>
                        <div>
                            <strong>ESSARE</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>