<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>CATALOGO/COMPRAS</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<h1>CATALOGO</h1>
        
		<a href="carritocompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
    <div id="inf">
BIENVENIDO <?php echo "CEDULA: ".$_SESSION['idcliente']?><br>
<a href="cerrarSesion.php"> CERRAR SESION</a>
</div>
	<section>
		
	<?php
		include("conexion.php");
		$conn=conectar();
		$re=mysql_query("select * from productos",$conn)or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>


			<div class="producto">
			<center>
				<img src="Imagenes/<?php echo $f['imagen'];?>"><br>
				<span><?php echo $f['nombre'];?></span><br>
				<a href="detalle.php?id=<?php echo $f['idproducto'] ?>">ver</a>
			</center>
		</div>
	<?php
		}
	?>
		
		
<center><a href="menu.php">Ver menu</a></center>
		
	</section>
</body>
</html>