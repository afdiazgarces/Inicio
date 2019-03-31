<?php 
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MENU PRINCIPAL</title>

<style>

body{
	background-image:url(Imagenes/OZic8l.jpg);
}

h1{
	color:#FFF;
	text-align:center;
}

#inf{
	
	margin-left:80%;
	color:#F00;
	border:1px dashed #F99;
	margin-top:-5%;
	text-align:center;
}

#inf a{
	
	color:#FFF;
	
}

#opc{
	width:40%;
	height:28%;
	background-color:#06F;
	margin:0 auto;
	padding:10px;
	margin-top:4%;
	box-shadow:5px 5px 5px #000099;
	border-radius:5px;
}

.menos:hover{
	width:124px;
	height:124px;
}



</style>

<script src="jquery-1.11.2.min.js"> </script>
<script src="Plugins FancyBox/source/jquery.fancybox.pack.js"> </script>
<link rel="stylesheet" href="Plugins FancyBox/source/jquery.fancybox.css">

 <script>
			
		
	$(".iframe").fancybox({
				
		width:"90%",
		
		heigth:"90%",
			
		titlePosition:"outside",
		
		type:"iframe"
			
		});
		
	

	
	</script>

</head>

<body>
<h1>MENU PRINCIPAL</h1>
<div id="inf">
BIENVENIDO <?php echo "CEDULA:".$_SESSION['idcliente']?><br>
<a href="cerrarSesion.php"> CERRAR SESION</a>
</div>

<div id="opc">

<a href="catalogo.php"><img src="Imagenes/book_record_music_medical_open_school_document_euro_european-128.png" title="IR AL CATALOGO DE PRODUCTOS" class="menos"></a>

<a href="R_producto.html" class="iframe"><img src="Imagenes/self1.png" title="GESTION DE PRODUCTOS" class="menos"></a>

</div>
</body>
</html>
