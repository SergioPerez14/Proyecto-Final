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

        <!--calendar css-->
        <link href="assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

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
                                <h4 class="header-title m-t-0">Calendario</h4>
                            </div>
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">

                                <div class="m-t-10">
                                    <div class="row m-b-30">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <a href="#" data-toggle="modal" data-target="#add-category" class="m-t-10 btn btn-lg btn-primary btn-block waves-effect m-t-20 waves-light">
                                                        <i class="fa fa-plus"></i> Crear Nuevo Evento
                                                    </a>
                                                    <div id="external-events" class="m-t-20">
                                                        <br>
                                                        <p class="text-muted">Seleccione y coloque el evento o de click en el calendario</p>
                                                        <div class="external-event bg-success" data-class="bg-success">
                                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>New Theme Release
                                                        </div>
                                                        <div class="external-event bg-info" data-class="bg-info">
                                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Mi Evento
                                                        </div>
                                                        <div class="external-event bg-warning" data-class="bg-warning">
                                                            <i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>Reunion Administrador
                                                        </div>
                                                    </div>

                                                    <!-- checkbox -->
                                                    <div class="checkbox checkbox-custom m-t-30">
                                                        <input id="drop-remove" type="checkbox">
                                                        <label for="drop-remove">
                                                            Remover despues de colocar
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div> <!-- end col-->
                                        <div class="col-md-9">
                                            <div id="calendar"></div>
                                        </div> <!-- end col -->
                                    </div>  <!-- end row -->
                                </div>

                                <!-- BEGIN MODAL -->
                                <div class="modal fade none-border" id="event-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Añadir Nuevo Evento</h4>
                                            </div>
                                            <div class="modal-body p-20"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Crear evento</button>
                                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Borrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add Category -->
                                <div class="modal fade none-border" id="add-category">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Añadir una categoria</h4>
                                            </div>
                                            <div class="modal-body p-20">
                                                <form role="form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="control-label">Nombre categoria</label>
                                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="control-label">Elije el color de la categoria</label>
                                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                <option value="success">Success</option>
                                                                <option value="danger">Danger</option>
                                                                <option value="info">Info</option>
                                                                <option value="primary">Primary</option>
                                                                <option value="warning">Warning</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END MODAL -->
                            </div>
                            <!-- end col-12 -->
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

        <!-- Jquery-Ui -->
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src='assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="assets/pages/jquery.fullcalendar.js"></script>


        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>