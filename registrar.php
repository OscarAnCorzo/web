<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="css/fonts/style.css"/>
	<script type="text/javascript" src="js/funciones.js"></script>

	<?PHP
		session_start();
		if($_SESSION['rol']==''){
			header("Location: usuarios.php");
			die();
			}
		include("funciones.php");
		//encabezado();
		$titulo = 'Registrar';
		cabecera($titulo);
		estilo();
	?>

	<style type="text/css">
		
		#contenido{
			display: block;
			width: 88%;
			height: 2800px;
			margin-top: 73px;
			padding-top: 2%;
			padding-right: 6%;
			padding-left: 6%; 
			background: white;
			text-align: center;
		}

		#tabla1{
			position: relative;
			display: inline-block;
			background: white;
			text-align: center;
			width: 95%;
		}

		a{
			text-decoration: none;
		}

	</style>

</head>
<body onload="TiempoActividad()">
	
	
	<?PHP encabezado_admin(); ?>
	
	</br> </br> 
	
	<section id="contenido">
		<div id="tabla1">
	<table 	bgcolor="white" width="100%" align="center" border="10" bordercolor="#8d1042">
		<th>
			<table bgcolor="white" width="100%" align="center" >
				<th colspan=4> <font color="#efb810" size="6px" ></br> FORMULARIOS </font> </th>
				<tr> 
					<td align="center" ></br>
						<a href="cliente-js.php" target="_blank">
							<font color="black" >CLIENTE</font>
						</a></br> </br> </br>
						<a href="cliente-js.php" target="_blank" title="clientes" > 
							<image src="imagenes\clientes.jpg" width="150" height="100"/> 
						</a> 
						
					</td>
					
					<td align="center" rowspan="2">
						
						<a href="empleado-js.php" target="_blank">
							<font color="BLACK"> </br> </br>EMPLEADOS </font>
						</a> </br> </br>
						<a href="empleado-js.php" target="_blank" title="empleados"> 
							<image src="imagenes\empleado.jpg" title="empledos" width="150" height="150"/>
						</a> 
					</td>
					
					<td align="center"></br>
						
							<a href="producto.php" target="_blank">
								<font color="black" >PRODUCTO</font>
							</a></br> </br>
							<a href="producto.php" target="_blank" title="referencias" > 
								<image src="imagenes\ref.png" width="150" height="100"/> 
							</a> 
						
					</td>
					
					
				</tr>
				
				<tr> 
					<td align="center"></br>
						<a href="envio.php" target="_blank">
							<font color="BLACK"> </br> </br> ENVIO </font>
						</a> </br> </br>
						<a href="envio.php" target="_blank" title="pagos"> 
							<image src="imagenes\remesa.jpg" width="150" height="150"/>
						</a> 
					</td>
					
					<td align="center"></br>
						<a href="envio_producto-js.php" target="_blank">
							<font color="BLACK"> </br> </br> ENVIO - PRODUCTO </font>
						</a> </br> </br>
						<a href="envio_producto-js.php" target="_blank" title="pagos"> 
							<image src="imagenes\pedidos.png" width="150" height="150"/>
						</a> 
					</td>
					
				</tr>
					
				
				
				
			</table>
		</th>	
	</table>		
	</div>
	</section>
	
	<?PHP 
		pie();
	?>
	
	
</body>
</html>
