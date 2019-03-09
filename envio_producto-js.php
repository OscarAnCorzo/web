<!DOCTYPE html>
<html lang="es">
<head>
	
	
	
	<meta charset="utf-8" name="keywords" content="Zapatos, sandalias, moda, belleza, zapatillas, tacones, calzado"/> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="css/fonts/style.css"/>
	<script type="text/javascript" src="js/funciones.js"></script>
	<?php
	session_start();
		if($_SESSION['rol']==''){
			header("Location: usuarios.php");
			die();
			}
		$nombre = $_SESSION['nombre'];
		$rol = $_SESSION['rol'];
		$usuario = $_SESSION['usuario'];

		include("funciones.php");
		//encabezado();
		$titulo = 'Registro Envio - Producto';
		cabecera($titulo);
		estilo();
		$c = conectar();
	?>

	<style type="text/css">
		#contenido{
			display: block;
			width: 88%;
			height: 400px;
			margin-top: 73px;
			padding-top: 6%;
			padding-right: 6%;
			padding-left: 6%; 
			background: white;

		}

		#tabla1{
			position: relative;
			display: inline-block;
			background: red;
			text-align: center;
			width: 95%;

		}

		input[type="radio"]{
			width: 10%;

		}

		h1{
			font-family: 'Pinyon Script', cursive;
		}

		.cuerpo{
			display: block;
			float: none;
			margin-left: 16%;
			
			width: 70%;
		}

		
		#tabla2 td{
			width: 33%
		}


	</style>

</head>
<body onload="TiempoActividad()">
	
	<?PHP 
		encabezado_admin();
		conectar();
		$result= pg_query("select * from envio" );
		$result1= pg_query("select * from producto" );
	?>
		 </br> </br>
		 
<section id="contenido">	
	<form action="envio_producto-js.php" name="envio_producto" id="envio_producto" method="post" onsubmit="return validarPago();" >
	<div class="cuerpo">
	<table align="center" width="100%" >
		<th align="left">
			<table align="center"  width="100%" id="tabla2">		
				<th colspan="3">	
					<h1> <center><font color="brown" size="6">Envio - Producto</font></center></h1>
				</th>	
				<tr>
					<td align="left"></br></br>&nbsp <input type="number" name="codigo" id="codigo" size="12" placeholder="Codigo" title="Codigo" ></br></td>
					<td></br>
						</br>Codigo del Envio:&nbsp<select name="cod_envio" id="cod_envio">
								<option></option>
								<?php
										while($row = pg_fetch_array($result)) { 
										$codigo = $row["codigo"] ;
										echo "<option value=".$codigo.">".$codigo."</option>"; 
									}
								?>
								</select>
					</td>
					
					<td>
						</br></br>Codigo del Producto:&nbsp<select name="cod_producto" id="cod_producto">
								<option></option>
							<?php
									while($row = pg_fetch_array($result1)) { 
									$codigo = $row["codigo"] ;
									echo "<option value=".$codigo.">".$codigo."</option>"; 
								}
							?>
							</select>
					</td>
				</tr>
				<tr >	
					<td align="center" colspan="3"></br></br></br>
						<a href="registrar.php"><input type="button" value="Volver"></a>&nbsp&nbsp&nbsp<input type="submit" name="envio_producto" id="envio_producto" value="Registrar Envio - Producto">&nbsp <input type="reset" value="Borrar"></br>
				
						<?PHP
							if(isset($_POST["envio_producto"]))
							{	$codigo = $_POST["codigo"];
								$cod_envio = $_POST["cod_envio"];
								$cod_producto = $_POST["cod_producto"];
								
								
							
								$c = conectar();
								
								$s = "insert into producto_envio(codigo, cod_envio, cod_producto)
										values('$codigo', '$cod_envio', '$cod_producto')";
								
								$r = pg_query($c, $s);
								echo "<script>alert('Envio - Producto registrado con exito!!!');</script>";
							}
						?>
				</br></br>
						</td>
				</tr>
			</table>		
		</th>
	</table>
	</div>				
	</form>
</section>
	
	

	
	
	<?PHP 
		pie();
	?>	
</body>

</html>