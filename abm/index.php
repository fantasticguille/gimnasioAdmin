<?php

$enlace = mysqli_connect('localhost','root','','gym');

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

if($_GET['accion']=='editar' !! $_GET['accion']=='agregar') {
	include 'form.php';
} else {
	include 'list.php';
}

?>