<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<table  class="tabla-ver">
     <tr>
         <td><b>Socio/s:</b></td><td><b>Emprendimiento</b></td><td><b>Productos</b></td><td><b>Mail</b></td><td><b>Celular</b></td><td><b>Direccion</b></td>
     </tr>
<?php
include("db.php");
$cantidad = "SELECT * FROM emprendimiento";
$resultado = mysqli_query($conexion,$cantidad);
    while ($row = $resultado->fetch_array()) {  
      $nombre_emp = $row['nombre_emp'];
      $socio_1 = $row['socio_1'];
      $socio_2 = $row['socio_2'];
      $productos = $row['productos'];
      $mail = $row['mail'];
      $celular = $row['celular'];
      $direccion = $row['direccion'];
   ?>
   <!-- <h3>Emprendimiento: <?php //echo $nombre_emp;  ?> </h3> -->
   <!-- <h3>Socios: <?php //echo $socio_1; echo " . "; echo $socio_2;  ?>  </h3> -->
<?php
     echo"<tr>
             
            <td>$socio_1 , $socio_2</td><td>$nombre_emp </td><td>$productos</td><td>$mail</td><td>$celular</td><td>$direccion</td>
             
             </tr>";
      }
?>

</table>
</body>
</html>