<ul>
	<li><a href="?tabla=niveles">Ver Niveles</a></li>
	<li><a href="?accion=agregar&tabla=niveles">Agregar Nivel</a></li>
</ul>
<?php
$enlace = mysqli_connect('localhost','root','','gym');

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

if(isset($_GET['accion']) && ($_GET['accion']=='editar' || $_GET['accion']=='agregar')) {
	include 'form.php';
} else {
	include 'list.php';
}

mysqli_close($enlace);
?>