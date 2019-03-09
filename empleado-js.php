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
		$nombre = $_SESSION['nombre'];
		$rol = $_SESSION['rol'];
		$usuario = $_SESSION['usuario'];

		include("funciones.php");
		//encabezado();
		$titulo = 'Registrar Empleado';
		cabecera($titulo);
		estilo();
	?>

	<script>
		function validarEmpleado()
		{ 

			var nombre = document.getElementById("nombre").value;
			var apellido1 = document.getElementById("apellido1").value;
			var apellido2 = document.getElementById("apellido2").value;
			var cedula = document.getElementById("cedula").value;
			var fechan = document.getElementById("fecha_n").value;
			var fechai = document.getElementById("fecha_i").value;
			var direccion = document.getElementById("direccion").value;
			var telefono = document.getElementById("telefono").value;
			var usuario = document.getElementById("usuario").value;
			var contraseña = document.getElementById("contraseña").value;
			var correo = document.getElementById("e-mail").value;
			var genero = document.getElementById("genero").value;
			
			var factor = document.getElementById("factor").value;
			
			var obs = document.getElementById("observaciones").value;
			var validar = document.getElementById("validar").value;
			
			expresionC = /\w+@+\w+\.+[a-z]/;
 			
			if(nombre === "" || apellido1 === "" || apellido2 === "" || cedula === "" || fechan === "" || fechai === "" || telefono === "" || genero === "" || factor === "" || correo === "" || usuario === "" || contraseña === "")
			{
				alert("Uno o varios campos vacios. Por favor ingrese los datos del empleado!!!");
				return false;
			}else <!-- VALIDACIONES PARA LOS CAMPOS QUE DEBEN SER NUMERICOS--> 
				if(isNaN(cedula)){
					alert("LA CEDULA NO DEBE CONTENER LETRAS");
					return false;
				}else 
					if(isNaN(telefono)){
						alert("EL TELEFONO NO DEBE CONTENER LETRAS");
						return false;
			}else
				if(contraseña != validar)
					{
					alert("La contraseña no coincide, por favor verifique");
						return false;
				    }else 
						if(!expresionC.test(correo) ){
							alert("EL E-MAIL NO ES VALIDO");
							return false;
						}else return true;
			
				
		}
	</script>

	<style type="text/css">
		#contenido{
			display: block;
			width: 88%;
			height: 800px;
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
	?>
	</br></br>

	<section id="contenido">
	<form action="empleado-js.php" name="empleado" id="empleado" method="POST" onsubmit="return validarEmpleado();" enctype="multipart/form-data">
	 <div class="cuerpo">
	<table align=center width="100%" >
		<th align="left">	
			<table align=center width="100%" id="tabla2">
				<tr>
				<th colspan="3" >
				<h1> <center><font color="#efb810" size="6">EMPLEADO</font></center></h1></th></tr>
				<tr><td></br>&nbsp <input type="text" name="nombre" id="nombre" size="20"title="NOMBRE" placeholder="Nombre" required></td>
					<td></br>&nbsp <input type="text" name="apellido1" id="apellido1" size="15" title="PRIMER APELLIDO" placeholder="Primer Apellido" required></td> 
					<td></br>&nbsp <input type="text" name="apellido2" id="apellido2"size="15" title="SEGUNDO APELLIDO" placeholder="Segundo Apellido" required> </td></tr>
				<tr><td></br>&nbsp <input type="NUMBER" name="cedula" id="cedula" size="15" title="CEDULA" placeholder="Cedula" required></td>
					<td></br>&nbsp <input type="text" name="codigo" id="codigo" size="15"  title="CODIGO" placeholder="Codigo" required></td>
				<td></br>&nbsp <?PHP genero(); ?> </td></tr>
				<tr><td></br> &nbsp <input type="text" name="direccion" id="direccion"size="20"  title="DIRECCIÓN" placeholder="Dirección" required></td>
					<td></br>&nbsp <input type="NUMBER" name="telefono" id="telefono"size="15"  title="TELEFONO" placeholder="Telefono" required></td>
					<td></br> &nbsp <input type="text" name="e-mail" id="e-mail" size="20" title="CORREO ELECTRONICO" placeholder="Correo Electronico" required></td></tr>
				<tr><td></br>&nbsp Fecha de ingreso:&nbsp <input type="date" name="fecha_i" id="fecha_i" required></td>
					<td></br>&nbsp <input type="text" name="cargo" id="cargo" size="15"  title="CARGO" placeholder="Cargo" required></td>
					<td></br> &nbsp<input type="text" name="lugar_trabajo" id="lugar_trabajo" size="15"  title="LUGAR DE TRABAJO" placeholder="Lugar de Trabajo" required></td>
				</tr>
				<tr>
					<td></br>&nbsp Fecha de Nacimiento:&nbsp <input type="date" name="fecha_nacimiento" id="fecha_n" size="20" required></td>			
					<td></br>&nbsp <input type="text" name="tipo_sangre" id="tipo_sangre" size="15"  title="TIPO DE SANGRE" placeholder="Tipo de Sangre" required></td>
					<td></br>&nbsp <input type="number" name="salario" id="salario" size="15"  title="SALARIO" placeholder="Salario" required></td>
				</tr>
				<tr>
					<td colspan="2"> </br>  &nbsp <input type="text" name="observaciones" id="observaciones" size="15"title="OBSERVACIONES" placeholder="Observaciones"></td>
				</tr>
				<tr><td> </br>&nbsp <input type="text" name="usuario" id="usuario" maxlength="12" title="USUARIO" placeholder="Nombre de Usuario" required></td>
					

				<td colspan="2"></br>&nbsp Imagen de Perfil: &nbsp <input type="file" name="imagen" required></td></tr>
				<tr>
					<td> </br>&nbsp <input type="password" name="contraseña" maxlength="12" id="contraseña"title="CONTRASEÑA" placeholder="Contraseña" required></td>
					<td ></br> &nbsp <input type="password" name="validar" maxlength="12" id="validar"title="confirme contraseña" placeholder="Confirmar Contraseña" required></td>
				</tr>

				<tr>
					<td colspan=3 align="center">
						</br></br><a href="registrar.php"><input type="button" value="volver"></a>&nbsp&nbsp&nbsp
						<input type="submit" name="empleado" id="empleado"value="Registrar Empleado">&nbsp&nbsp&nbsp <input type="reset" value="Limpiar"></center></br><br>
						
						<?PHP
							if(isset($_POST["empleado"]))
							{	$codigo = $_POST["codigo"];
								$nombre = $_POST["nombre"];
								$apellido1 = $_POST["apellido1"];
								$apellido2 = $_POST["apellido2"];
								$cedula = $_POST["cedula"];
								$fecha_nac = $_POST["fecha_nacimiento"];
								$genero = $_POST["genero"];
								$direccion = $_POST["direccion"];
								$tel = $_POST["telefono"];
								$correo = $_POST["e-mail"];
								$fecha_i = $_POST["fecha_i"];
								$cargo = $_POST["cargo"];
								$lugar = $_POST["lugar_trabajo"];
								$obs = $_POST["observaciones"];
								$tipo_sangre = $_POST["tipo_sangre"];
								$salario = $_POST["salario"];
								$usuario = $_POST['usuario'];
								$contraseña = $_POST['contraseña'];
									$ruta=$_FILES['imagen']['name'];
									$tipo=$_FILES['imagen']['type'];
									$tam=$_FILES['imagen']['size'];
										

												if($tam<=1000000)		
													{
														if($tipo=="image/jpeg"||$tipo=="image/jpg"||$tipo=="image/png"||$tipo=="image/gif")
															{
															$destino=$_SERVER['DOCUMENT_ROOT'].'/proyectoweb/image/';
															move_uploaded_file($_FILES['imagen']['tmp_name'],$destino.$ruta);
																//echo '<image src="imagenes\enviar3.png" width="500" height="100" />' ;
																$c = conectar();
																$s = "insert into empleado(cedula, nombre, apellido1, apellido2, fecha_nacimiento, fecha_ingreso, email, observaciones, tipo_sangre, cargo, direccion, cod_genero, lugar_trabajo, telefono, usuario, contraseña, foto, codigo, salario)
																	values ('$cedula', '$nombre', '$apellido1', '$apellido2', '$fecha_nac', '$fecha_i', '$correo', '$obs', '$tipo_sangre', '$cargo', '$direccion', '$genero', '$lugar', '$tel', '$usuario', '$contraseña', '$ruta', '$codigo', '$salario')";
																$r = pg_query($c, $s);
																echo "<script>alert('Empleado registrado con exito!!!');</script>";
															}
														else echo "<script>alert('Formato archivo no reconocido. Debe ser jpeg, jpg, png o gif !!!');</script>";
													}
												else echo "<script>alert('Tamaño de imagen excede el limite Debe elegir una de menor tamaño!!!');</script>";

											
	
								
								
							}
						?>
					
					</br></br>
					
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