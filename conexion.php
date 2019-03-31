<?php

function conectar(){
	
$usuario="root";
$clave="password";
$servidor="mysql";
$bd="car_compras";

$conn=mysqli_connect($servidor,$usuario,$clave) or die ("EXISTE UN ERROR AL CONECTAR!");
mysqli_select_db($bd,$conn) or die("ERROR AL SELECCIONAR LA BASE DE DATOS!");

return $conn;
	
}

?>