<!DOCTYPE html>
<html lang="es">
<head>
	
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
		$titulo = 'Registro_Envio';
		cabecera($titulo);
		estilo();
		$c = conectar();
	?>

	<style type="text/css">
    	#contenido{
			display: block;
			width: 88%;
			height: 600px;
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
			margin-left: 14%;
			
			width: 70%;
		}


		#tabla2 td{
			width: 33%;
		}


    </style>
</head>
<body onload="TiempoActividad()">
	
	<?php
	
		encabezado_admin();
		conectar();
		$result1=pg_query("select * from cliente");
		$result2=pg_query("select * from producto");
		$result3=pg_query("select * from transporte");
	?>
	</br></br>
	<section id="contenido">
	<form name="envio" id="envio" method="post" action="envio.php" onsubmit="return validarRemesa();">
	<div class="cuerpo">
	<table align=center  id="tabla2" >
		<tr><th colspan="3"><h1> <center><font color="brown" size="6">Envio</font></center></h1></th></tr>
		<tr>
			<td></br><input type="number" name="codigo" id="codigo" placeholder="Codigo"title="CODIGO"required ></td>
			<td>
				</br>Cedula del Cliente:&nbsp<select name="cedula_cliente" id="cedula_cliente">
						<option></option>
					<?php
							while($row = pg_fetch_array($result1)) { 
							$codigo = $row["cedula"] ;
							$nombre = $row['nombre'];
							echo "<option value=".$codigo.">".$codigo." - ".$nombre."</option>"; 
						}
					?>
					</select>
			</td>
			<td>
				</br>Codigo del Producto:&nbsp<select name="cod_producto" id="cod_producto">
						<option></option>
					<?php
							while($row = pg_fetch_array($result2)) { 
							$codigo = $row["codigo"] ;
							echo "<option value=".$codigo.">".$codigo."</option>"; 
						}
					?>
					</select>
			</td>
		</tr>

		<tr>
			<td>
				</br>Codigo del Transporte:&nbsp<select name="cod_transporte" id="cod_transporte">
						<option></option>
					<?php
							while($row = pg_fetch_array($result3)) { 
							$codigo = $row["codigo"] ;
							echo "<option value=".$codigo.">".$codigo."</option>"; 
						}
					?>
					</select>
			</td>
			<td></br>&nbsp Fecha de salida: &nbsp <input type="date" name="fecha_salida" id="fecha_salida" placeholder="Fecha de Salida" title="Fecha de Salida"required></td>
			<td></br>&nbsp Fecha de Llegada: &nbsp <input type="date" name="fecha_llegada" id="fecha_llegada" placeholder="Fecha de Llegada" title="Fecha de Llegada"required></td>
		</tr>
		<tr>
			<td></br><input type="text" name="lugar_salida"  id="lugar_salida" size="50" placeholder="Lugar de Salida" title="Lugar de Salida" required maxlength="100"></td>
			<td></br><input type="text" name="lugar_llegada"  id="lugar_llegada" size="50" placeholder="Lugar de Llegada" title="Lugar de Llegada" required maxlength="100"></td>
		</tr>
		
		<tr><td colspan="3"></br></br><a href="registrar.php"><input type="button" value="Volver"></a>&nbsp<input type="submit" name="envio" id="envio" value="Registrar Envio">&nbsp <input type="reset" value="Borrar"></td></tr>
	</table></div>
	
	<?php 
		if(isset($_POST['envio']))
		{
			$var = $_POST["codigo"];
			$var2 = $_POST["fecha_llegada"];
			$var3 = $_POST["fecha_salida"];
			$var4 = $_POST["lugar_llegada"];
			$var5 = $_POST["lugar_salida"];
			$var6 = $_POST["cedula_cliente"];
			$var7 = $_POST["cod_producto"];
			$var8 = $_POST["cod_transporte"];
		
		$conectar = conectar();
		
		$adi = "insert into envio(codigo, fecha_llegada ,fecha_salida, lugar_llegada, lugar_salida, cedula_cliente, cod_producto, cod_transporte)
			values('$var','$var2','$var3','$var4','$var5','$var6','$var7','$var8')";
		
		$insertar=pg_query($conectar,$adi);
		echo "<script>alert('Envio registrado con exito!!!');</script>";
		
		}
	?>
	

	</form></section>
	
	<?php
	pie();
	?>
	
	
</body>
</html>