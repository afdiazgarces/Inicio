<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>DETALLES PRODUCTO</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<h1>DETALLES PRODUCTO</h1>
        
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
		$re=mysqli_query($conn,"select * from productos where idproducto=".$_GET['id']."")or die(mysqli_error());
		while ($f=mysqli_fetch_array($re)) {
		?>


			<div class="producto2">
			<center>
				<img src="Imagenes/<?php echo $f['imagen'];?>"><br>
				<span><?php echo $f['nombre'];?></span><br>
                <span><?php echo $f['descripcion'];?></span><br>
                <span><?php echo "$".$f['precio'];?></span><br>
				<a href="carritocompras.php?id=<?php echo $f['idproducto'] ?>">AÑARDIR AL CARRITO DE COMPRAS</a>
			</center>
		</div>
	<?php
		}
	?>
		
		<center><a href="catalogo.php">Ver catalogo</a></center>

		
	</section>
</body>
</html>