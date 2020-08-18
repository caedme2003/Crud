<?php

include 'index2.php';

$servidor="localhost";
$usuario="root";
$pass="";
$bd="equipo_futboll";



$conexion=mysqli_connect($servidor, $usuario, $pass, $bd)
	or die("error en la conexion");

	$NombreEquipo= $_POST['txtNombreEquip'];
	$LogoEquipo= $_POST['bitLogoEquipo'];
	$Pais = $_POST['txtPais'];
	$Activo =$_POST['cmbActivo'];
	$FechaAdicicion =$_POST['FechaAdic'];
	$FechaModificacion =$_POST['FechaModif'];
	

	$insertar = "INSERT into equipos values ('$NombreEquipo', '$LogoEquipo', '$Pais', '$Activo', '$FechaAdicicion', '$FechaModificacion' )";
	$resultado= mysqli_query($conexion, $insertar)
	or die("error al insertar los registros");
	mysqli_close($conexion);
	echo "Datos insertados correctamente";


?>