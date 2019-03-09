<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
	<link rel="stylesheet" href="css/fonts/style.css"/>
	<script type="text/javascript" src="js/funciones.js"></script>

	<script>
			function validarEliminar()
			{
				var respuesta=confirm('Realmente desea eliminar sus datos??? ACEPTAR para eliminar o CANCELAR para permanecer en esta pagina');
				if(respuesta==true)
				{
					return true;
				}
				else
				{
				return false;
				window.location.href='usuario_cliente.php';	
				}
			}
		</script>	
   
   <?PHP 
		
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
		$titulo = 'PERFIL';
		cabecera($titulo);
		estilo();

		$c = conectar();
		$s = "select *, g.nombre as genero from cliente c inner join genero g on c.cod_genero = g.codigo where c.cedula = ". $_SESSION['cedula'] . ";";

		$r = pg_query($c, $s);
		$registro = pg_fetch_array($r);
		
	?>

	<style type="text/css">
		
		#contenido{
			display: block;
			width: 88%;
			height: 800px;
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
			background: red;
			text-align: center;
			width: 65%;
		}

		#tabla1 .uno{
			width: 24%;
		}

		#tabla1 .dos{
			width: 52%;
		}

	</style>

</head>
<body onload="TiempoActividad()">
	
	<?PHP
		encabezado_cliente();
	?>
	</br></br>

		<!--<form action="usuario_cliente.php" name="cliente" id="cliente" method="post">-->
	<section id="contenido">
		<div id=tabla1 >	
		<table align="center" bgcolor="white" width="100%" border=8px bordercolor=#47425d>
			<td>
				<table border=0 align="center" width="100%" cellspacing="7px">
					<th colspan="4">
						</br><font color="#efb810" size="6px"> Datos - Información Personal</font></br></br>
					</th>
					
					<tr>
						<td class="uno"></br> <b>Rol:</b>  </td>
						<td ></br><?PHP echo $_SESSION['rol']; ?> </td>
						<td colspan=2 rowspan=3 align=center class="dos"> <image src="image\<?PHP echo $registro['foto']; ?>" width=200px height=155px/> </td>
						
					</tr>
					
					<tr>
						<td > </br><b>Nombre:</b> </td>
						<td > </br><?PHP echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido1'] . ' ' . $_SESSION['apellido2']; ?> </td>
					</tr>
					
					<tr>
						<td > </br><b>Usuario:</b> </td>
						<td > </br><?PHP echo $_SESSION['usuario']; ?></td> </td>
					</tr>
				
					<tr> <td colspan="4" align="center"> </br><hr class="linea" width="80%" /> </br> </td> </tr>
					
					<tr>
						<td ></br> <b>Cedula:</b>  </td>
						<td > </br><?PHP echo $_SESSION['cedula']; ?></td>
						
						<td > </br><b>Correo electronico:</b> </td>
						<td > </br><?PHP echo $registro['email']; ?> </td>
					</tr>
					
					<tr>
						<td > </br><b>Dirección:</b> </td>
						<td > </br><?PHP echo $registro['direccion']; ?></td>
						
						<td ></br> <b>Genero:</b>  </td>
						<td > </br><?PHP echo $registro['genero']; ?> </td>
					</tr>

					<tr>
						<td > </br><b>Telefono:</br></b> </td>
						<td > </br><?PHP echo $registro['telefono']; ?></br></td>
						<td ></br> <b>Fecha de nacimiento:</br></b>  </td>
						<td > </br><?PHP echo $registro['fecha_nacimiento']; ?></br> </td>
					</tr>
				</table>
			</td>
		</table>
		</div>
		</br></br>
		<p align=center><a href="usuario_cliente_modificar.php"><input type="submit" value="Actualizar datos personales"></a></p>
		<form action="usuario_cliente.php" name="eliminar" id="eliminar" method="post" onsubmit="return validarEliminar();"></br>
		<p align=center><input type="submit" value="Eliminar su usuario"name="eliminar" id="eliminar">
		</form>
		</p></br></br> 
			<!--</form>-->

		<?php
			if(isset($_POST['eliminar']))
							{
									$sql1= "DELETE FROM cliente WHERE cedula='".$_SESSION['cedula']."'";
									$result1 = pg_query($c,$sql1);
							
							print"
								<script languaje='JavaScript'>
								alert('datos eliminados exitosamente');
								window.location.href='salir.php';
								</script>
								";
							
							}
			
								
								
								
		?>
	</section>
        <?PHP 
			pie();
		?>
  </body>
  </html>