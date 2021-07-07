<!DOCTYPE html>
<html>
<head>
	<title>Registro de Productores</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
		<meta http-equiv="Expires" content="0">
  	<meta http-equiv="Last-Modified" content="0">
  	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  	<meta http-equiv="Pragma" content="no-cache">
</head>
<body>
<!-- <body background="fondo.jpg"> -->
	<!-- <img src="fondo.jpg"> -->
<div class="tabla">
	<h1 class="titulo">Emprendedores-Artesanos</h1>
	<h2>Ingrese los Datos del Emprendimiento</h2>
	<div class="formulario">
		<form method="POST">
		<input type="text" name="nombre_emp" placeholder="  Emprendimiento"><br><br>
		<input type="text" name="productos" placeholder="  Productos"><br><br>
		<input type="text" name="rubro" placeholder="  Rubro"><br><br>
		<input type="text" name="nombre_socio_1" placeholder="  Responsable"><br><br>
		<!-- <input type="text" name="nombre_socio_2" placeholder="  Responsable"><br><br> -->
		<input type="text" name="celular" placeholder="  Celular"><br><br>
		<input type="text" name="social" placeholder="  Red Social"><br><br>
		<input type="text" name="mail" placeholder="  E-Mail"><br><br>
		<input type="text" name="domicilio" placeholder="  Direccion"><br><br>	
		<input type="submit" name="enviar" value=" Registrar">
		<br><br>
		</form>
		<button><a href="ver.php" target="_blank" class="boton-ver">Ver Inscriptos</a></button>
		<!-- <button><a href="#" class="boton-ver">Iniciar Sesion</a></button> -->
		</div>
		<div class="pie">
		<p>Instituto San Jose - Quines, San Luis - Argentina 2021</p>		
		</div>
</div>	
<?php
include("db.php");
if (isset($_POST['enviar'])) {
	if (strlen($_POST['nombre_emp']) >= 1 ){
		$nombre_emp = $_POST['nombre_emp'];//-------------
		$productos = $_POST['productos'];//-------------
		$rubro = $_POST['rubro'];//-------------
		$nombre_socio_1 = $_POST['nombre_socio_1'];//-------------
		$nombre_socio_2 = $_POST['nombre_socio_2'];//-------------
		$celular= $_POST['celular'];//-------------
		$social = $_POST['social'];//-------------
		$mail = $_POST['mail'];
		$domicilio = $_POST['domicilio'];//-------------

$consulta = "INSERT INTO `emprendimiento`(`nombre_emp`, `productos`, `rubro`, `redsocial`, `direccion`, `celular`, `socio_1`, `socio_2`, `mail`) VALUES ('$nombre_emp','$productos','$rubro','$social','$domicilio','$celular','$nombre_socio_1','$nombre_socio_2','$mail')";

// echo $consulta;

 // echo $consulta;
$resultado = mysqli_query($conexion,$consulta);
		if ($resultado) {
				echo "<script>alert('Operacion Exitosa');</script>";
		} else {
			echo "<script>alert('Operacion NO exitosa');</script>";
		}
}else{
	echo "<script>alert('Complete');</script>";
}
}
?>
</body>
</html>