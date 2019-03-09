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
		$titulo = 'Registro_Productos';
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
			width: 50%
		}


    </style>

</head>
<body onload="TiempoActividad()" >
	
	<?php
		
		encabezado_admin();
		conectar();
		$result2 = pg_query("select * from catalogo");
	?>
	</br></br>
	<section id="contenido">
	<form name="producto" id="producto" method="post" action="producto.php" ">
	<div class="cuerpo">
	<table align=center  width="100%" id="tabla2">
		<tr><th colspan="2"><h1> <center><font color="#efb810" size="6">PRODUCTO</font></center></h1></td></tr>	
		<tr><td></br><input type="number" name="codigo" id="codigo" placeholder="Codigo" title="CODIGO"required></td>
			<td></br><input type="text" name="nombre" id="nombre" placeholder="Nombre" title="NOMBRE" required></td></tr> 
		<tr><td></br><input type="text" name="descripcion" id="descripcion"placeholder="Descripcion"title="DESCRIPCION"required></td>
			<td></br><b>Fecha de elaboracion:</b>&nbsp<input type="date" name="fecha_elaboracion" id="fecha_elaboracion" placeholder="Fecha de Elaboracion" title="FECHA DE ELABORACION" required></td>
		</tr>
			<td></br><input type="number" name="talla" id="talla" placeholder="Talla" title="TALLA"required></td>
			<td></br><input type="number" name="valor" id="valor" placeholder="Valor" title="VALOR"required></td>
		<tr>
			<td><!--/br><input type="number" name="codigo_capellada" id="codigo_capellada"placeholder="cod capellada"title="cod capellada"required-->
					</br>Codigo Catalogo:&nbsp<select name="cod_catalogo" id="cod_catalogo">
						<option></option>
					<?php
							while($row = pg_fetch_array($result2)) { 
							$codigo = $row["codigo"] ;
							$nombre = $row['nombre'];
							echo "<option value=".$codigo.">".$codigo." - ".$nombre."</option>"; 
						}
					?>
					</select></br></br></br>
				</td>
		</tr>
			
		
		<tr><td colspan="2" align="CENTER"></br><a href="registrar.php"><input type="button" value="Volver"></a>&nbsp<input type="submit" name="producto" id="producto" value="Registrar Producto">&nbsp <input type="reset" value="Borrar"></td></tr>
	</table></div>
	</form></section>
	
	<?php 
	if(isset($_POST['producto']))
		{
			$codigo = $_POST["codigo"];
			$nombre =$_POST["nombre"];
			$descripcion =$_POST["descripcion"];
			$fecha = $_POST["fecha_elaboracion"];
			$talla =$_POST["talla"];
			$valor =$_POST["valor"];
			$cod_catalogo = $_POST["cod_catalogo"];
					
		$conex = conectar();
		
		$validar = "insert into producto( codigo, nombre, descripcion, fecha_elaboracion, talla, valor, cod_catalogo)
			values('$codigo','$nombre','$descripcion','$fecha','$talla','$valor','$cod_catalogo')";
			
		$guardar=pg_query($conex,$validar);
		
		echo "<script>alert('Producto registrado con exito!!!');</script>";
		
		
		}


	pie();
	?>
	
</body>
</html>