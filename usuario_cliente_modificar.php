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
	<script>
	function validar()
		{
			var pass= document.getElementById("contraseña").value;
			var pass2=document.getElementById("contraseña2").value;
			if(pass!=pass2){
				alert("los campos contraseña no coincide, por favor verifique");
				return false;
			}return tru;
		}
	</script>
</head>
<body onload="TiempoActividad()">


	<?PHP
		encabezado_cliente();
	?>
	</br></br>

	<section id="contenido">
		<form action="usuario_cliente_modificar.php" name="cliente" id="cliente" method="post" onsubmit="return validar();" enctype="multipart/form-data">
		<div id="tabla1">
		<table align="center" bgcolor="white" width="100%" border=8px bordercolor=#8d1042>
			<td>
				<table border=0 align="center" width="100%" cellspacing="7px">
					<th colspan="4">
						</br><font color="#efb810" size="6px"> Datos - Información Personal</font></br></br>
					</th>
					
					<tr>
						<td class=uno ></br> <b>Rol:</b>  </td>
						<td ></br><?PHP echo $_SESSION['rol']; ?> </td>
						<td colspan="2" rowspan=4 align=center class="dos"> <image src="image\<?PHP echo $registro['foto'];?>" width=200px height=155px/> </td>
						
					</tr>
					
					<tr>
						<td > </br><b>Nombre:</b> </td>
						<td > </br><?PHP echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido1'] . ' ' . $_SESSION['apellido2']; ?> </td>
					</tr>
					
					<tr>
						<td > </br><b>Usuario:</b> </td>
						<td > </br><input type="text" name="usuario" id="usuario" maxlength="12" value="<?PHP echo $_SESSION['usuario']; ?>" title="USUARIO" required></td> </td>
					</tr>
					
					<tr>
						<td > </br><b>Contraseña:</b> </td>
						<td > </br><input type="password" name="contraseña" id="contraseña" maxlength="12" value="<?PHP echo $registro['contraseña']; ?>" title="CONTRASEÑA" required></td> </td>
					</tr>
					<tr>
						<td > </br><b>Valide contraseña:</b> </td>
						<td > </br><input type="password"id="contraseña2" maxlength="12" value="<?PHP echo $registro['contraseña']; ?>" title="repita contraseña" required></td> </td>
					<td colspan="2" align="center">Cambiar Imagen de perfil:</BR><input type="file" name="imagen"></td></tr>

					<tr> <td colspan="4" align="center"> </br><hr class="linea" width="80%" /> </br> </td> </tr>

					<tr>
						<td > </br> <b>Cedula:</td>
						<td></b><?PHP echo $_SESSION['cedula'];?></td>
						<td > </br><b>Correo electronico:</b> </td>
						<td > </br><input type="text" name="e-mail" id="e-mail" size="20" value="<?PHP echo $registro['email']; ?>" title="E-MAIL"> </td>
					</tr>
					
					<tr>
						<td > </br><b>Dirección:</b> </td>
						<td > </br><input type="text" name="direccion" id="direccion" maxlength="100" size="20" value="<?PHP echo $registro['direccion']; ?>" TITLE="DIRECCION"></td>
						<td ></br> <b>Genero:</b>  </td>
						<td > </br><?PHP echo $registro['genero']; ?> </td>
					</tr>

					<tr>
						<td > </br><b>Telefono:</b> </td>
						<td > </br><input type="number" name="telefono"value="<?PHP echo $registro['telefono']; ?>" id="telefono" size="15" maxlength="12" title="TELEFONO" ></td>
						<td ></br> <b>Fecha de nacimiento:</b>  </td>
						<td > </br><?PHP echo $registro['fecha_nacimiento']; ?> </td>
					</tr>
				</table>
			</td>
		</table>
		</div>
		
		<?php
			if(isset($_POST['cliente']))
							{
								//$cedula = $_POST["cedula"];
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
																$sql1= "UPDATE cliente SET  direccion='".$direccion."',telefono=".$tel.",usuario='".$usuario."',contraseña='".$contraseña."',email='".$correo."',foto='".$ruta."' where cedula= '".$_SESSION['cedula']."';";
																$result1 = pg_query($c,$sql1);
																print"
																	<script languaje='JavaScript'>
																	alert('datos actualizados exitosamente');
																	window.location.href='usuario_cliente.php';
																	</script>
																	";
															}
														else echo "<script>alert('Formato archivo no reconocido. Debe ser jpeg, jpg, png o gif !!!');</script>";
													}
												else echo "<script>alert('Tamaño de imagen excede el limite Debe elegir una de menor tamaño!!!');</script>";
											}
										else {
												$sql1= "UPDATE cliente SET  direccion='".$direccion."',telefono=".$tel.",usuario='".$usuario."',contraseña='".$contraseña."',email='".$correo."' where cedula= '".$_SESSION['cedula']."';";
												$result1 = pg_query($c,$sql1);
												print"
													<script languaje='JavaScript'>
													alert('datos actualizados exitosamente');
													window.location.href='usuario_cliente.php';
													</script>";
											}
							
							}
			
								
								
								
		?>
		</br></br>
		<p align="center">
		<a href="usuario_cliente.php"><input type=button value="atras"></a>&nbsp&nbsp&nbsp <input type="submit" value="Actualizar datos personales."name='cliente' id="cliente"></br></br>
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