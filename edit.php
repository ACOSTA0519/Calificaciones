<?php
	include("session.php");
	include("config.php");
	$Matricula= $_GET['Matricula'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>
<div class="icon-bar">
  <a href="home.php"><i class="fa fa-home"></i></a> 
  <a href="users.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Actualizar</h2>
<hr/>

<form action="update.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM semestral WHERE matricula ='$Matricula'");
	while($row = mysqli_fetch_array($result))
	{
	echo"<input type='hidden' matricula='matricula' value='{$row['matricula']}' required>";
    echo"<input type='text' placeholder='Nombres' name='nombres' value='{$row[nombres]}' required>";
    echo"<input type='text' placeholder='Apellidos' name='apellidos' value='{$row['apellidos']}' required>";
    echo"<input type='text' placeholder='calificacion' name='calificacion' value='{$row['calificacion']}' required>";
  
    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
  </div>
</form>