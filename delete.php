<?php
include("config.php");
include("session.php");

$matricula = $_GET['matricula'];


$sql = "DELETE FROM semestral WHERE nombres='$nombres'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>