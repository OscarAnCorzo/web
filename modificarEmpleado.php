<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
		<script type="text/javascript" src="js/funciones.js"></script>
		<script>
		function validar()
		{
			var pass= document.getElementById("pass").value;
			var pass2=document.getElementById("pass2").value;
			if(pass!=pass2){
				alert("los campo contraseña no coincide, por favor verifique");
				return false;
			}return tru;
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
		$s = "select *, l.nombre_lugar, s.nombre_eps, g.nombre_genero, c.nombre_cargo from empleado e inner join lugar_trabajo l on e.codigo_lugar_trabajo = l.codigo_lugar_trabajo inner join eps s on e.codigo_eps = s.codigo_eps inner join genero g on e.codigo_genero = g.codigo_genero inner join cargo c on e.codigo_cargo = c.codigo_cargo where e.cedula = '". $_SESSION['cedula'] . "';";

		$r = pg_query($c, $s);
		$registro = pg_fetch_array($r);
		
	?>

	<link rel="stylesheet" href="css/fonts/style.css"/>
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
		<form action="modificarEmpleado.php" name="empleado" id="empleado" method="POST" onsubmit="return validar();" enctype="multipart/form-data">
		<div id="tabla1">
			<table align="center" bgcolor="white" width="100%" border=8px bordercolor=#47425d>
				<td>
					<table border=0 align="center" width="100%" cellspacing="7px">
						<th colspan="4">
							</br><font color="#efb810" size="6px"> Datos - Información Personal</font></br></br>
						</th>
						
						<tr>
							<td class="uno"></br> <b>Cargo:</b>  </td>
							<td ></br><?PHP echo $registro['nombre_cargo']; ?> </td>
							<td colspan="2" rowspan=3 align=center class="dos"> <image src="image\<?php echo $registro['foto'];?>" width=200px height=200px/> </td>
							
						</tr>
						
						<tr>
							<td > </br><b>Nombre:</b> </td>
							<td > </br><?PHP echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido1'] . ' ' . $_SESSION['apellido2']; ?> </td>
						</tr>
						
						<tr>
							<td > </br><b>Usuario:</b> </td>
							<td > </br><input type="text" name="usuario" id="usuario"maxlength="12" value="<?PHP echo $_SESSION['usuario']; ?>" title="USUARIO" required> </td>
						</tr>
						<tr>
							<td > </br><b>Contraseña:</b> </td>
							<td > </br><input type="password" name="contraseña" id="pass" maxlength="12"value="<?PHP echo $registro['contraseña']; ?>" title="CONTRASEÑA"required></td>
						<td colspan="2" rowspan="2" align="center"></br>Cambiar Imagen de perfil:</BR><input type="file" name="imagen"></td></tr>
						<tr>
							<Td><b>Valide contraseña:</b></td>
							<td></br><input type="password" id="pass2" maxlength="12"value="<?PHP echo $registro['contraseña']; ?>" title="valide contraseña"required></td>
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
							<td > </br><input type="email" name="e-mail" id="e-mail" size="20" value="<?PHP echo $registro['email']; ?>" title="E-MAIL">  </td>
							<td ></br> <b>Tipo de sangre:</b>  </td>
							<td > </br><?PHP echo $registro['grupo_sanguineo_rh']; ?> </td>
						</tr>
						
						<tr>
							<td > </br><b>Dirección:</b> </td>
							<td > </br><input type="text" name="direccion" id="direccion"maxlength="100" size="20" value="<?PHP echo $registro['direccion']; ?>" TITLE="DIRECCION"> </td>
							<td ></br> <b>Genero:</b>  </td>
							<td > </br><?PHP echo $registro['nombre_genero']; ?> </td>
						</tr>

						<tr>
							<td > </br><b>Lugar de trabajo:</b> </td>
							<td > </br><?PHP echo $registro['nombre_lugar'];?></td>
							<td ></br> <b>Eps:</b>  </td>
							<td > </br><?PHP echo $registro['nombre_eps']; ?></td>
						</tr>

						<tr>
							<td > </br><b>Telefono:</b> </td>
							<td > </br><input type="number" name="telefono"value="<?PHP echo $registro['telefono']; ?>" id="telefono" size="15" maxlength="12" title="TELEFONO" > </td>
							<td ></br> <b>Fecha de nacimiento:</b>  </td>
							<td > </br><?PHP echo $registro['fecha_nacimiento']; ?> </td>
						</tr>

					</table>
				</td>
			</table>
		</div>
			
		<?PHP
							if(isset($_POST['empleado']))
							{	
								
								$direccion = $_POST["direccion"];
								$tel = $_POST["telefono"];
								$correo = $_POST["e-mail"];
								$usuario = $_POST['usuario'];
								$contraseña = $_POST['contraseña'];
									$ruta=$_FILES['imagen']['name'];
									$tipo=$_FILES['imagen']['type'];
									$tam=$_FILES['imagen']['size'];
										if($ruta!=''){
											if($tam<=1000000)		
													{
														if($tipo=="image/jpeg"||$tipo=="image/jpg"||$tipo=="image/png"||$tipo=="image/gif")
															{
															$destino=$_SERVER['DOCUMENT_ROOT'].'/proyectoweb/image/';
															move_uploaded_file($_FILES['imagen']['tmp_name'],$destino.$ruta);
																//echo '<image src="imagenes\enviar3.png" width="500" height="100" />' ;
																$sql1= "UPDATE empleado SET  direccion='".$direccion."',telefono='".$tel."',usuario='".$usuario."',contraseña='".$contraseña."',email='".$correo."', foto='".$ruta."' where cedula='".$registro['cedula']."'";
																$result1 = pg_query($c,$sql1);
																print"
																	<script languaje='JavaScript'>
																	alert('datos actualizados exitosamente');
																	window.location.href='usuario_empleado.php';
																	</script>
																	";
															}
														else echo "<script>alert('Formato archivo no reconocido. Debe ser jpeg, jpg, png o gif !!!');</script>";
													}
												else echo "<script>alert('Tamaño de imagen excede el limite Debe elegir una de menor tamaño!!!');</script>";
											}
										else {
											//echo '<image src="imagenes\enviar3.png" width="500" height="100" />' ;
											$sql1= "UPDATE empleado SET  direccion='".$direccion."',telefono='".$tel."',usuario='".$usuario."',contraseña='".$contraseña."',email='".$correo."' where cedula='".$registro['cedula']."'";
											$result1 = pg_query($c,$sql1);
											print"
												<script languaje='JavaScript'>
												alert('datos actualizados exitosamente');
												window.location.href='usuario_empleado.php';
												</script>
												";
											}
							}
						?>

		<p align="center">
		</br></br><a href="usuario_empleado.php"><input type="button" value="Atras"/></a>&nbsp&nbsp&nbsp <input type="submit" value="actualizar datos"name='empleado' id="empleado"></br></br>
		</p>
		</form>
	</section>

 </br></br></br></br></br>
        </br></br></br></br></br>

        <?PHP 
			pie();
		?>
  </body>
  </html>