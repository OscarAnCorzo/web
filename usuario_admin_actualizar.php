<!DOCTYPE html>
<html>
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
		$nombre = $_SESSION['nombre'];
		$rol = $_SESSION['rol'];
		$usuario = $_SESSION['usuario'];

		include("funciones.php");
		//encabezado();
		$titulo = 'PERFIL';
		cabecera($titulo);
		estilo();
		$c = conectar();
		$s = "select *, g.nombre as genero from empleado e inner join genero g on e.cod_genero = g.codigo where e.cedula = ". $_SESSION['cedula'] .";";

		$r = pg_query($c, $s);
		$registro = pg_fetch_array($r);
		
	?>

	<style type="text/css">
		
		#contenido{
			display: block;
			width: 88%;
			height: 1000px;
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
	<script>
	function validar()
		{
			var pass= document.getElementById("pass").value;
			var pass2=document.getElementById("pass2").value;
			if(pass!=pass2){
				alert("los campos contraseña no coincide, por favor verifique");
				return false;
			}return tru;
		}
	</script>

</head>
<body onload="TiempoActividad()">


	<?PHP
		encabezado_admin(); 
		$ep=pg_query("select * from eps");
		$es=pg_query("select * from lugar_trabajo");
	?>
	 
			</br>
		</br>

	<section id="contenido">
		<div id="tabla1">
		<form action="usuario_admin_actualizar.php" method="post" onsubmit="return validar();" enctype="multipart/form-data">
		<table align="center" bgcolor="white" width="100%" border=8px bordercolor=#47425d>
			<td>
				<table border=0 align="center" width="100%" cellspacing="7px">
					<th colspan="4">
						</br><font color="#efb810" size="6px"> Datos - Información Personal</font></br></br>
					</th>
					
					<tr>
						<td class="uno"></br> <b>Cargo:</b>  </td>
						<td ></br><?PHP echo $_SESSION['cargo']; ?> </td>
						<td colspan="2" rowspan=3 align=center class="dos"> <image src="image\<?php echo $registro['foto'];?>" width=200px height=200px/> </td>
						
					</tr>
					
					<tr>
						<td > </br><b>Nombre:</b> </td>
						<td > </br><?PHP echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido1'] . ' ' . $_SESSION['apellido2']; ?> </td>
					</tr>
					
					<tr>
						<td > </br><b>Usuario:</b> </td>
						<td > </br><input type="text" value="<?PHP echo $_SESSION['usuario']; ?>" name="user"title="usuario" maxlength="12" required</td>
					</tr>
					<tr>
						<td > </br><b>Contraseña:</b> </td>
						<td > </br><input type="password" id="pass" name="pass"value="<?PHP echo $registro['contraseña']; ?>"required title="contraseña"maxlength="12"> </td>
					<td colspan="2" rowspan="2" align="center"></br>Cambiar Imagen de perfil:</BR><input type="file" name="imagen"></td>
					</tr>
					<tr>
						<td > </br><b>Validar contraseña:</b> </td>
						<td > </br><input type="password" id="pass2"value="<?PHP echo $registro['contraseña']; ?>" title="valide contraseña"maxlength="12"> </td>
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
						<td > </br><input type="email" value="<?PHP echo $registro['email']; ?>" name="mail"maxlength="35" title="e_mail"required></td>
						
						<td ></br> <b>Tipo de sangre:</b>  </td>
						<td > </br><?PHP echo $registro['tipo_sangre']; ?> </td>
					</tr>
					
					<tr>
						<td > </br><b>Dirección:</b> </td>
						<td > </br><input type="text" value="<?PHP echo $registro['direccion']; ?>"name="dir" maxlength="100" title="direccion"></td>
						
						<td ></br> <b>Genero:</b>  </td>
						<td > </br><?PHP echo $registro['genero']; ?> </td>
					</tr>

					<tr>
						<td > </br><b>Lugar de trabajo:</b> </td>
						<td > </br><?PHP echo $registro['lugar_trabajo'];?>
								</td>
						<td ></br> <b>Salario:</b>  </td>
						<td > </br><?PHP echo $registro['salario']; ?>
								
						</td>
					</tr>

					<tr>
						<td > </br><b>Telefono:</b> </td>
						<td > </br><input type="tel" value="<?PHP echo $registro['telefono']; ?>" name="tel" title="telefono"maxlength="12"required </td>
						
						<td ></br> <b>Fecha de nacimiento:</b>  </td>
						<td > </br><?PHP echo $registro['fecha_nacimiento']; ?> </td>
					</tr>
				</table>
			</td>
		</table>
		
	</div>

		<p align="center">
		</br></br><a href="usuario_administrador.php"><input type="button" value="Volver"/></a>&nbsp&nbsp&nbsp 
		<input type="submit"value="Actualizar datos" name="enviar"></br></br>
		</p>
		</form>
	</section>
		<?php
			if(isset($_POST['enviar']))
							{
								//$cedula = $_POST["cedula"];
								$direccion = $_POST["dir"];
								$tel = $_POST["tel"];
								$correo = $_POST["mail"];
								$usuario = $_POST['user'];
								$contraseña = $_POST['pass'];
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
																$sql1= "UPDATE empleado SET  direccion='".$direccion."',telefono='".$tel."',usuario='".$usuario."',contraseña='".$contraseña."',email='".$correo."', foto='".$ruta."' where cedula='".$_SESSION['cedula']."'";
																$result1 = pg_query($c,$sql1);
																print"
																	<script languaje='JavaScript'>
																	alert('datos actualizados exitosamente');
																	window.location.href='usuario_administrador.php';
																	</script>
																	";
															}
														else echo "<script>alert('Formato archivo no reconocido. Debe ser jpeg, jpg, png o gif !!!');</script>";
													}
												else echo "<script>alert('Tamaño de imagen excede el limite Debe elegir una de menor tamaño!!!');</script>";
											}
										else {
												$sql1= "UPDATE empleado SET  direccion='".$direccion."',telefono='".$tel."',usuario='".$usuario."',contraseña='".$contraseña."',email='".$correo."' where cedula='".$_SESSION['cedula']."'";
												$result1 = pg_query($c,$sql1);
												print"
													<script languaje='JavaScript'>
													alert('datos actualizados exitosamente');
													window.location.href='usuario_administrador.php';
													</script>
													";
											}
										
					}								
		?>
        <?PHP 
			pie();
		?>
  </body>
  </html>