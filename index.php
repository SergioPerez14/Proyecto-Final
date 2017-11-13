<?php
  session_start();
  if($_SESSION["login"]==NULL){
      $_SESSION["login"]=-1;
  }
  if($_SESSION["login"]==1)
    header("Location: dash.php");
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>ESSARE - Log In</title>
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

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 card-box">
                                <div class="text-center">
                                    <h2 class="text-uppercase m-t-0 m-b-30">
                                        <a href="index.php" class="text-success">
                                            <span><img src="assets/images/ESSARElg.jpg" alt="" width="260" height="60"></span>
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" action="#" method="post">

                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="emailaddress">Usuario</label>
                                                <input class="form-control" type="" id="" name="usuario" placeholder="Usuario">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group m-b-20">
                                            <div class="col-xs-12">
                                                <label for="password">Contraseña</label>
                                                <input class="form-control" type="password" id="" name="contra" placeholder="Contraseña">
                                            </div>
                                        </div>
                                        <br>
                                        <?php
                                            $servername = "localhost";
                                            $username = "root";
                                            $password = "14sgpp997";
                                            $dbname = "lindavista";
                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }else{

                                                if(isset($_POST["btn"])){

                                                    $consulta = "Select * from usuarios where Username = '".$_POST["usuario"]."' and Password = '".$_POST["contra"]."'";
                                                    $resultado = $conn->query($consulta);
                                                    if ($resultado->num_rows>0) {
                                                        $_SESSION["login"]=1;
                                                        echo "<script>document.location.href='dash.php';</script>";
                                                    }else{
                                                        echo "<div class='alert alert-danger alert-dismissible fade in' role='alert'>
                                                                    <button type='button' class='close' data-dismiss='alert'
                                                                            aria-label='Close'>
                                                                        <span aria-hidden='true'>&times;</span>
                                                                    </button>
                                                                    <strong>Error!</strong> Usuario o contraseña incorrectos.
                                                                </div>";
                                                    }

                                                }
                                            }
                                        $conn->close();
                                        ?>
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                            	<!--<a href="dash.html"><button type="" class="btn btn-lg btn-block" style="background-color:#000000">Iniciar Sesión</button></a>-->
                                            	<input type="submit" class="btn btn-lg btn-primary btn-block" name="btn" value="Iniciar Sesion"></input>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->

                            <br>
                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Version 1.0</p>
                                </div>
                            </div>

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->



        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>