

<?php

include("conexion.php");
$conn=conectar();

$id=$_POST['idcliente'];
$clave=$_POST['clave'];
$sql="select * from clientes where idcliente=$id and clave='$clave'";
echo $sql;
$resultado=mysql_query($sql,$conn);

if(mysql_num_rows($resultado)>0){
	
	session_start();
	$_SESSION['idcliente']=$_POST['idcliente'];
	?>
    
    <script>
	
	window.location="menu.php";
	
	</script>
    
    <?php
	
}else{
	
	?>
    
    <script>
	
	alert("DATOS DE ACCESO INCORRECTOS !!");
	window.location="index.php";
	
	</script>
    
    <?php
	
}


?>