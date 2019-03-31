<?php
session_start();

if(isset($_SESSION['username'])){
	
header("Location: menu.php");
	
}

?>

<!DOCTYPE html>
<html>

<head>


  <meta charset="UTF-8">

  <title>Login Tienda Tecnologica</title>

    <link rel="stylesheet" href="css/style.css">
   
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

  <div id="wrap">
  <div id="regbar">
    <div id="navthing">
      <h2><a href="#" id="loginform">INGRESA!</a> | <a href="R_usuario.html" class="iframe" id="alguito" >REGISTRATE!</a></h2>
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
   <form method="post" action="validarEntrada.php">
             <label>NOMBRE USUARIO</label>
             <input type="text" id="username" name="idcliente"/>
             <label name="password">CONTRASEÑA</label>
             <input type="password" id="passowrd" name="clave"/>
             <input type="submit" value="Login" />
	</form>
         
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

<div id="nombres">
<p>Andres Felipe Diaz</p>
</div>
  <script src="js/index.js"></script>






</body>

</html>