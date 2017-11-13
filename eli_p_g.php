<?php
  session_start();
  if($_SESSION["login"]!=1)
    header("Location: index.php");
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>ESSARE - Confirmar Eliminacion</title>
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
                                <h4 class="m-b-20 header-title">Datos del Producto</h4>

<?php
                                                    if(isset($_GET["clave"])){
                                                        $codigo = $_GET["clave"];
                                                        $nombre = $_GET["nombre"];
                                                        $marca = $_GET["marca"];
                                                        $tipo = $_GET["tipo"];
                                                        $talla = $_GET["talla"];
                                                        //echo "holaaa".$nombre;
                                                    }

                                                    if(isset($_POST["nombre"])){

                                                        $servername = "localhost";
                                                        $username = "root";
                                                        $password = "14sgpp997";
                                                        $dbname = "lindavista";
                                                        $conn = new mysqli($servername, $username, $password, $dbname);

                                                        if ($conn->connect_error) {
                                                            die("Connection failed: " . $conn->connect_error);
                                                        }else{
                                                                $codigo = $_POST["clave"];
                                                                $nombre = $_POST["nombre"];
                                                                $marca = $_POST["marca"];
                                                                $tipo = $_POST["tipo"];
                                                                $talla = $_POST["talla"];

                                                                $consulta = "DELETE FROM productos WHERE Codigo = '".$codigo."'";
                                                              
                                                                //echo $consulta;
                                                                $resultado = $conn->query($consulta);
                                                               if ($resultado==true)
                                                                {

                                                                  echo "<div class='alert alert-success alert-dismissible fade in' role='alert'>
                                                                                    <button type='button' class='close' data-dismiss='alert'
                                                                                        aria-label='Close'>
                                                                                        <span aria-hidden='true'>&times;</span>
                                                                                    </button>
                                                                                     Producto eliminado correctamente.
                                                                                </div>";
                                                                }else{

                                                                            echo "Error deleting record: " . $conn->error;
                                                                  echo "<div class='alert alert-success alert-dismissible fade in' role='alert'>
                                                                                    <button type='button' class='close' data-dismiss='alert'
                                                                                        aria-label='Close'>
                                                                                        <span aria-hidden='true'>&times;</span>
                                                                                    </button>
                                                                                     Algo ha ido mal. Producto no eliminado.
                                                                                </div>";
                                                                }
                                                              
                                                          }

                                                        $conn->close();
                                                                }
                                                            ?>

                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form-horizontal" role="form" method="post" action="eli_p_g.php">
                                          <br>
                                            <div class="form-group" hidden="" >
                                                <div class="col-md-9">
                                                    <input type="text" name="clave" class="form-control" placeholder="" value=<?php echo $codigo; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nombre(s):</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="nombre" class="form-control" readonly="" value=<?php echo $nombre; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Marca:</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="marca" class="form-control" readonly="" value=<?php echo $marca; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="example-email">Tipo:</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="tipo" class="form-control" readonly="" value=<?php echo $tipo; ?>>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Talla:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="talla" class="form-control" readonly="" value=<?php echo $talla; ?>>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                              <center>
                                                <br><br>
                                                <button type="cancel" class="btn btn-default"><a href="eli_p.php">Cancelar</a></button>
                                                <input type="submit" class="btn btn-danger btn-bordered" value="Eliminar Producto">
                                              </center>
                                            </div>

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