<style>

body{background-color:#000;}
h1{
	color:#F00;
	text-align:center;
	margin-top:140px;
	
}
p{
	font-family:"sans-serif";
	color:#FFF;
	font-size:24px;
	font-weight:bolder;
	margin-top:150px;
	text-align:center;
	}

</style>
<?php
include("conexion.php");
$conn=conectar();


$nom=$_POST['nombre'];
$ape=$_POST['descripcion'];
$tel=$_POST['imagen'];
$ema=$_POST['precio'];


if(isset($_POST['guardar'])){

$sql="insert into productos values('','$nom','$ape','$tel',$ema)";
$resultado=mysqli_query($sql,$conn);

}

if(!$resultado){
	
	echo "
	<html>
	<body>
	$sql
	<h1>EXISTE UN ERROR AL REGISTRAR EL PRODUCTO</h1>
	
	
	";
	
}else{
	
	echo "

	
	<h1>PRODUCTO REGISTRADO</h1>
	
		</body>
	</html>
	";
	
}


?>