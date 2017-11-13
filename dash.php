<?php
  session_start();
  if($_SESSION["login"]!=1)
    header("Location: index.php");
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>ESSARE - DashBoard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/icono.ico">

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">

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
                                         <input type="text" placeholder="Buscar..." class="form-control">
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
                                    <p class="text-muted m-0">Administrador</p>
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


                                            <?php

                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "14sgpp997";
                                                    $dbname = "lindavista";
                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }else{

                                                            $consulta_productos = "SELECT count(*) FROM productos";
                                                            $consulta_usuarios = "SELECT count(*) FROM usuarios";
                                                            $consulta_ventas = "SELECT count(*) FROM ventas";
                                                            $consulta_marcas = "SELECT count(*) FROM marcas";
                                                            //echo $consulta;
                                                            $resultado_productos = $conn->query($consulta_productos);
                                                            $resultado_usuarios = $conn->query($consulta_usuarios);
                                                            $resultado_ventas = $conn->query($consulta_ventas);
                                                            $resultado_marcas = $conn->query($consulta_marcas);
                                                            if ($resultado_productos->num_rows>0) {
                                                                
                                                                $Array = array();
                                                                while($row = $resultado_productos->fetch_assoc()) {
                                                                     $Array[] = $row;
                                                                 }

                                                                    $cadena_productos=array_values($Array[0])[0];
                                                                    //echo $cadena;
                                                                    //echo "<script>window.open(\"".$cadena."\",'_self');</script>";

                                                            }

                                                            if ($resultado_usuarios->num_rows>0) {
                                                                
                                                                $Array = array();
                                                                while($row = $resultado_usuarios->fetch_assoc()) {
                                                                     $Array[] = $row;
                                                                 }

                                                                    $cadena_usuarios=array_values($Array[0])[0];
                                                                    //echo $cadena;
                                                                    //echo "<script>window.open(\"".$cadena."\",'_self');</script>";

                                                            }

                                                            if ($resultado_ventas->num_rows>0) {
                                                                
                                                                $Array = array();
                                                                while($row = $resultado_ventas->fetch_assoc()) {
                                                                     $Array[] = $row;
                                                                 }

                                                                    $cadena_ventas=array_values($Array[0])[0];
                                                                    //echo $cadena;
                                                                    //echo "<script>window.open(\"".$cadena."\",'_self');</script>";

                                                            }
                                                            if ($resultado_marcas->num_rows>0) {
                                                                
                                                                $Array = array();
                                                                while($row = $resultado_marcas->fetch_assoc()) {
                                                                     $Array[] = $row;
                                                                 }

                                                                    $cadena_marcas=array_values($Array[0])[0];
                                                                    //echo $cadena;
                                                                    //echo "<script>window.open(\"".$cadena."\",'_self');</script>";

                                                            }                                                            
                                                    }
                                                $conn->close();
                                            ?>


								<div class="card-box widget-inline">
									<div class="row">
										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-primary mdi mdi-access-point-network"></i> <b data-plugin="counterup"><?php echo $cadena_ventas; ?></b></h3>
												<p class="text-muted">Total de Ventas</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-custom mdi mdi-airplay"></i> <b data-plugin="counterup"><?php echo $cadena_productos; ?></b></h3>
												<p class="text-muted">Productos Totales</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-info mdi mdi-black-mesa"></i> <b data-plugin="counterup"><?php echo $cadena_usuarios; ?></b></h3>
												<p class="text-muted">Total de Usuarios</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center b-0">
												<h3 class="m-t-10"><i class="text-danger mdi mdi-cellphone-link"></i> <b data-plugin="counterup"><?php echo $cadena_marcas; ?></b></h3>
												<p class="text-muted">Marcas de Zapatos</p>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
                        <!--end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0">Total de Ingresos</h4>
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Series A</h5>
                                            </li>
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-muted"></i>Series B</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="dashboard-bar-stacked" style="height: 300px;"></div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="m-t-0">Analisis de Ventas</h4>
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Mobiles</h5>
                                            </li>
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-info"></i>Tablets</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="dashboard-line-chart" style="height: 300px;"></div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Contactos</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover mails m-0 table table-actions-bar">
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 95px;">
                                                        <div class="checkbox checkbox-primary checkbox-single m-r-15">
                                                            <input id="action-checkbox" type="checkbox">
                                                            <label for="action-checkbox"></label>
                                                        </div>
                                                        <!--<div class="btn-group dropdown">-->
                                                            <!--<button type="button" class="btn btn-default btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>-->
                                                            <!--<ul class="dropdown-menu" role="menu">-->
                                                                <!--<li><a href="#">Action</a></li>-->
                                                                <!--<li><a href="#">Another action</a></li>-->
                                                                <!--<li><a href="#">Something else here</a></li>-->
                                                                <!--<li class="divider"></li>-->
                                                                <!--<li><a href="#">Separated link</a></li>-->
                                                            <!--</ul>-->
                                                        <!--</div>-->
                                                    </th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Products</th>
                                                    <th>Start Date</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox2" type="checkbox">
                                                            <label for="checkbox2"></label>
                                                        </div>

                                                        <img src="assets/images/users/avatar-2.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Tomaslau
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">tomaslau@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="" class="text-dark"><b>356</b></a> </b>
                                                    </td>

                                                    <td>
                                                        01/11/2003
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox1" type="checkbox">
                                                            <label for="checkbox1"></label>
                                                        </div>

                                                        <img src="assets/images/users/avatar-1.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Chadengle
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">chadengle@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="" class="text-dark"><b>568</b></a> </b>
                                                    </td>

                                                    <td>
                                                        01/11/2003
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox3" type="checkbox">
                                                            <label for="checkbox3"></label>
                                                        </div>

                                                        <img src="assets/images/users/avatar-3.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Stillnotdavid
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">stillnotdavid@dummy.com</a>
                                                    </td>
                                                    <td>
                                                        <b><a href="" class="text-dark"><b>201</b></a> </b>
                                                    </td>

                                                    <td>
                                                        12/11/2003
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox4" type="checkbox">
                                                            <label for="checkbox4"></label>
                                                        </div>

                                                        <img src="assets/images/users/avatar-4.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Kurafire
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">kurafire@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="" class="text-dark"><b>56</b></a> </b>
                                                    </td>

                                                    <td>
                                                        14/11/2003
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox5" type="checkbox">
                                                            <label for="checkbox5"></label>
                                                        </div>

                                                        <img src="assets/images/users/avatar-5.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Shahedk
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">shahedk@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="" class="text-dark"><b>356</b></a> </b>
                                                    </td>

                                                    <td>
                                                        20/11/2003
                                                    </td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="checkbox checkbox-primary m-r-15">
                                                            <input id="checkbox6" type="checkbox">
                                                            <label for="checkbox6"></label>
                                                        </div>

                                                        <img src="assets/images/users/avatar-6.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm" />
                                                    </td>

                                                    <td>
                                                        Adhamdannaway
                                                    </td>

                                                    <td>
                                                        <a href="#" class="text-muted">adhamdannaway@dummy.com</a>
                                                    </td>

                                                    <td>
                                                        <b><a href="" class="text-dark"><b>956</b></a> </b>
                                                    </td>

                                                    <td>
                                                        24/11/2003
                                                    </td>

                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="map" style="height:500px; width:1000"></div>


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

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
		<script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

        <script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWiI5HVzAoMvq89H0egAIvxTgXml1tyB0&callback=initMap" async defer></script>

    </body>
</html>