<?php

function conectar(){
	
$usuario="root";
$clave="";
$servidor="localhost";
$bd="car_compras";

$conn=mysql_connect($servidor,$usuario,$clave) or die ("EXISTE UN ERROR AL CONECTAR!");
mysql_select_db($bd,$conn) or die("ERROR AL SELECCIONAR LA BASE DE DATOS!");

return $conn;
	
}

?>