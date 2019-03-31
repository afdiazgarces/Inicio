<?php

function conectar(){
	
$usuario="root";
$clave="password";
$servidor="mysql";
$bd="car_compras";

$conn=mysqli_connect($servidor,$usuario,$clave,$bd) or die ("EXISTE UN ERROR AL CONECTAR!");

return $conn;
	
}

?>