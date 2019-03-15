<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Insertar Fabricante</title>
</head>

<body>

<?php
include_once("config.php");

$nombre_fabricante =$_POST['nombre_fabricante'];

if(empty($nombre_fabricante) ==1 ){
	echo "Variable Vacia";
	exit;
}

$query= "INSERT INTO fabricante (nombre) VALUES (?)";

	$stmt = mysqli_prepare($mysqli, $query);
	mysqli_stmt_bind_param($stmt, "s", $nombre_fabricante);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_free_result($stmt);
	mysqli_stmt_close($stmt);

	echo "<font color='green'>Data added successfully.";
	echo "<br/><a href='panel_fabricante.php'>View Result</a>";

mysqli_close($mysqli);

?>

</body>
</html>
