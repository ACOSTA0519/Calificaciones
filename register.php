<?php
include("config.php");
include("session.php");

$matricula= $_POST['matricula'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['Apellidos'];
$calificacion = $_POST['Calificacion'];

$sql = "INSERT INTO semestral(matricula, nombres, apellidos, calificacion) 
VALUES('$matricula', '$nombres', '$apellidos', '$calificacion')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
	echo 'window.location="index.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
?>