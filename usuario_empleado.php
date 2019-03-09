<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
    <script type="text/javascript" src="js/funciones.js"></script>
    <link rel="stylesheet" href="css/fonts/style.css"/>

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
		$s = "select *, l.nombre_lugar, s.nombre_eps, g.nombre_genero, c.nombre_cargo from empleado e inner join lugar_trabajo l on e.codigo_lugar_trabajo = l.codigo_lugar_trabajo inner join eps s on e.codigo_eps = s.codigo_eps inner join genero g on e.codigo_genero = g.codigo_genero inner join cargo c on e.codigo_cargo = c.codigo_cargo where e.cedula = '". $_SESSION['cedula'] . "';";

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
		encabezado_empleado(); 	
	?>
	</br> </br>

	<section id="contenido">
		<div id="tabla1">
			<table align="center" bgcolor="white" width="100%" border=8px bordercolor=#47425d >
				<td>
					<table border=0 align="center" width="100%" cellspacing="7px">
						<th colspan="4">
							</br><font color="#efb810" size="6px"> Datos - Información Personal</font></br></br>
						</th>
						
						<tr>
							<td class="uno"></br> <b>Cargo:</b>  </td>
							<td class="uno"></br><?PHP echo $registro['nombre_cargo']; ?> </td>
							<td colspan="2" rowspan=3 align=center class="dos"> <image src="image\<?php echo $registro['foto'];?>" width=200px height=200px/> </td>
							
						</tr>
						
						<tr>
							<td class="uno"> </br><b>Nombre:</b> </td>
							<td class="uno"> </br><?PHP echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido1'] . ' ' . $_SESSION['apellido2']; ?> </td>
						</tr>
						
						<tr>
							<td class="uno"> </br><b>Usuario:</b> </td>
							<td class="uno"> </br><?PHP echo $_SESSION['usuario']; ?> </td>
						</tr>

						<tr> <td colspan="4" align="center"> </br><hr class="linea" width="80%" /> </br> </td> </tr>

						<tr>
							<td ></br> <b>Cedula:</b>  </td>
							<td > </br><?PHP echo $registro['cedula']; ?> </td>
							<td ></br> <b>Fecha de ingreso:</b>  </td>
							<td > </br><?PHP echo $registro['fecha_ingreso']; ?> </td>
						</tr>
						
						<tr>
							<td > </br><b>Correo electronico:</b> </td>
							<td > </br><?PHP echo $registro['email']; ?> </td>
							<td ></br> <b>Tipo de sangre:</b>  </td>
							<td > </br><?PHP echo $registro['grupo_sanguineo_rh']; ?> </td>
						</tr>
						
						<tr>
							<td > </br><b>Dirección:</b> </td>
							<td > </br><?PHP echo $registro['direccion']; ?> </td>
							<td ></br> <b>Genero:</b>  </td>
							<td > </br><?PHP echo $registro['nombre_genero']; ?> </td>
						</tr>

						<tr>
							<td > </br><b>Lugar de trabajo:</b> </td>
							<td > </br><?PHP echo $registro['nombre_lugar']; ?> </td>
							<td ></br> <b>Eps:</b>  </td>
							<td > </br><?PHP echo $registro['nombre_eps']; ?> </td>
						</tr>

						<tr>
							<td > </br><b>Telefono:</b></br> </td>
							<td > </br><?PHP echo $registro['telefono']; ?> </br></td>
							<td ></br> <b>Fecha de nacimiento:</b> </br> </td>
							<td > </br><?PHP echo $registro['fecha_nacimiento']; ?></br> </td>
						</tr>
					</table>
				</td>
			</table>
		</div>

		<p align="center">
		</br></br><a href="modificarEmpleado.php"><input type="submit" value="Actualizar datos personales."/></a></br></br>
		</p>

	</section>	

        <?PHP 
			pie();
		?>
  </body>
  </html>