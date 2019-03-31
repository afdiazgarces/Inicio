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

$id=$_POST['idcliente'];
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$tel=$_POST['telefono'];
$ema=$_POST['email'];
$con=$_POST['contraseña'];

if(isset($_POST['guardar'])){

$sql="insert into clientes values($id,'$nom','$ape',$tel,'$ema','$con')";
$resultado=mysqli_query($conn,$sql);

}

if(!$resultado){
	
	echo "
	<html>
	<body>
	
	<h1>EXISTE UN ERROR AL REGISTRAR EL CLIENTE</h1>
	
	
	";
	
}else{
	
	echo "

	
	<h1>CLIENTE REGISTRADO</h1> <p>YA PUEDES INGRESAR!<p>
	
		</body>
	</html>
	";
	
}


?>