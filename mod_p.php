<?php
  session_start();
  if($_SESSION["login"]!=1)
    header("Location: index.php");
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>ESSARE - Modificacion Productos</title>
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
                                <h4 class="m-b-20 header-title">Modificar Producto</h4>

                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" method="POST" action="mod_p.php" role="form">
                                            <br><br>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Ingrese Clave:</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="codigo" class="form-control" placeholder="Clave de Producto">
                                                </div>
                                            </div>
                                            <br><br><br>
                                            <div class="form-group">
                                              <center>
                                                <input type="submit" class="btn btn-primary" name="btn_buscar" value="Buscar Producto"></input>
                                              </center>
                                            </div>

                                            <br><br>
                                            <?php
                                              if(isset($_POST["codigo"])){

                                                    $servername = "localhost";
                                                    $username = "root";
                                                    $password = "14sgpp997";
                                                    $dbname = "lindavista";
                                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }else{

                                                            $consulta = "SELECT Codigo, Nombre, Marca, Tipo, Talla FROM productos WHERE Codigo = '".$_POST["codigo"]."'";
                                                            //echo $consulta;
                                                            $resultado = $conn->query($consulta);
                                                            if ($resultado->num_rows>0) {
                                                                


                                                                $Array = array();
                                                                while($row = $resultado->fetch_assoc()) {
                                                                     $Array[] = $row;
                                                                 }

                                                            $cadena="mod_p_g.php?codigo='".array_values($Array[0])[0]."'&nombre='".array_values($Array[0])[1]."'&marca='".array_values($Array[0])[2]."'&tipo='".array_values($Array[0])[3]."'&talla='".array_values($Array[0])[4]."'";
                                                                  //echo $cadena;
                                                                  echo "<script>window.open(\"".$cadena."\",'_self');</script>";

                                                            }else{
                                                                echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>
                                                                            <button type='button' class='close' data-dismiss='alert'
                                                                                    aria-label='Close'>
                                                                                <span aria-hidden='true'>&times;</span>
                                                                            </button>
                                                                            <strong>Error!</strong> Producto no encontrado.
                                                                        </div>";
                                                            }
                                                    }
                                                $conn->close();

                                                //echo "<script>document.location.href='mod_u_g.php';</script>";
                                              }
                                            ?>

                                            </form>
                                            
                                    </div>




                                </div>
                                <!-- end row -->


                            </div> <!-- end col -->
                        </div> <!-- end row -->
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