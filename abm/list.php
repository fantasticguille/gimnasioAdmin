<?php
if(!isset($_GET['tabla']))
	exit;

$query = "select * from {$_GET['tabla']}";
$result = mysqli_query ($enlace, $query);

if($result) {
	echo "<table>";
	while($registro = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>{$registro['id']}</td>";
		echo "<td>{$registro['descripcion']}</td>";
		echo "</tr>";
	}
	echo "</table>";
}

?>