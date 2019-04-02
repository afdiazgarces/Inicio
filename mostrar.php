<?php
include("conexion.php");
$conn=conectar();

if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos service es genial." . PHP_EOL;
// echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
$sql = "select * from clientes where idcliente=123456 and clave='123456'";
$resul = mysqli_query($conn,$sql) or die (mysqli_error($conn));
while($row = mysqli_fetch_array($resul)){
    $arreglo=array(
        "status"=>true,
        "idcliente"=>$row['idcliente'],
        "clave"=>$row['clave'],
        "nombre"=>$row['nombre'],
        "apellido"=>$row['apellido'],
        "email"=>$row['email'],
        "telefono"=>$row['telefono']

    );
    }
print_r(json_encode($arreglo));
mysqli_close($conn);
?>