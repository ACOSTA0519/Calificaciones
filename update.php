<?php
include("config.php");
include("session.php");

$matricula = $_POST['matricula'];
$nombres= $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$calificacion= $_POST['calificacion'];


$sql = "UPDATE semestral SET matricula='$matricula',nombres='$nombres', apellidos='$apellidos', calificacion='$calificacion'
WHERE matricula='$matricula'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>