<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<title>Inicio/Home</title>
	</head>
	<body>
	    <?php  session_start(); ?>
	    
		<?php 
		include('BarraMenuAdmin.php');
		 ?>
		<?php  

		if(isset($_SESSION['usuario']))
             {  $nombre=$_SESSION['usuario'];
				echo("<h1>BIENVENIDO: $nombre</h1>  ");
			 }
		 
	    else {  header("Location:GUILogin.php"); }
		?> 
<img src="../Imagenes/zaha.jpg" style="width:100%; height:100%; position:absolute; left:0px;top:0px; z-index:-1" />
		<div class="container">
			<div class="row">				
				<div class="col-md-12">
					<div class="col-md-2"></div>
					<div class="col-md-8" style="text-align: center;">
						<h1 >Sistema Control de Facturas...</h1>
						<p>
						
							<!--<img width="90%" src="../Imagenes/baku.jpg">!-->
						</p>
					</div>
					<div class="col-md-2|"></div>					
				</div>
			</div>
		</div>
	</body>
</html>
