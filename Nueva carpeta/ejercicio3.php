<HTML LANG="es">

<HEAD>
   <TITLE>Consulta de noticias</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">

<?PHP
// Incluir bibliotecas de funciones
   include ("lib/fecha.php");
?>

</HEAD>

<BODY>

<H1>Consulta de noticias</H1>

<?PHP



   
   // Datos de la base de datos
   $usuario = "root";
   $password = "";
   $servidor = "localhost";
   $basededatos = "lindavista";
   
   // creaci�n de la conexi�n a la base de datos con mysql_connect()
   $conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
   
   // Selecci�n del a base de datos a utilizar
   $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
   // establecer y realizar consulta. guardamos en variable.
   $consulta = "SELECT * FROM noticias";
   $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
   
   // Motrar el resultado de los registro de la base de datos
   // Encabezado de la tabla
   echo "<table borde='2'>";
   echo "<tr>";
   echo "<th>id</th>";
   echo "<th>titulo</th>";
   echo "<th>texto</th>";
   echo "<th>categoria</th>";
   echo "<th>fecha</th>";
   echo "</tr>";
   
   // Bucle while que recorre cada registro y muestra cada campo en la tabla.
   while ($columna = mysqli_fetch_array( $resultado ))
   {
      echo "<tr>";
      echo 
      "<td>" . $columna['id'] . "</td><td>" . $columna['titulo'] . "</td><td>" . $columna['texto'] . "</td><td>" . $columna['categoria'] . "</td><td>" . $columna['fecha'] . "</td>"
      ;
      echo "</tr>";
   }
   
   echo "</table>"; // Fin de la tabla
   // cerrar conexi�n de base de datos
   mysqli_close( $conexion );












?>

</BODY>
</HTML>
