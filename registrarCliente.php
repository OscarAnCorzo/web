<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
	<script type="text/javascript" src="js/funciones.js"></script>
	<link rel="stylesheet" href="css/fonts/style.css"/>
	<script>
		function validarCliente()
			{ 

				var nombre = document.getElementById("nombre").value;
				var apellido1 = document.getElementById("apellido1").value;
				var apellido2 = document.getElementById("apellido2").value;
				var cedula = document.getElementById("cedula").value;
				var fechan = document.getElementById("fecha_n").value;
				var usuario = document.getElementById("usuario").value;
				var contraseña = document.getElementById("contraseña").value;
				var validar = document.getElementById("validar").value;
				var direccion = document.getElementById("direccion").value;
				var telefono = document.getElementById("telefono").value;

				var correo = document.getElementById("e-mail").value;
				var genero = document.getElementById("genero").value;
				
				var obs = document.getElementById("observaciones").value;
				var fidelizado = document.getElementById("fidelizado").value;
				
				expresionC = /\w+@+\w+\.+[a-z]/;
				
				if(nombre === "" || apellido1 === "" || apellido2 === "" || cedula === "" || fechan === "" || telefono === "" || genero === "" || fidelizado === "" || correo === "" || usuario === "" || contraseña === "" || validar === "")
				{
					alert("Uno o varios campos vacios. Por favor ingrese los datos!!!");
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
					if(!expresionC.test(correo) ){
						alert("EL E-MAIL NO ES VALIDO");
						return false;
				}else 
					if(contraseña != validar)
					{
					alert("La contraseña no coincide, por favor verifique");
						return false;
			    }else return true;
				
					
			}
	</script>
	
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
		$titulo = 'Registrar Clientes';
		cabecera($titulo);
		conectar();
		estilo();
		//$result= pg_query("select * from genero" );
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
			width: 98%;
			left:0;
		}

		#tabla2 td{
			width: 33%
		}

	</style>


</head>
<body onload="TiempoActividad()">
	
	
	<?PHP 

		encabezado_empleado();

		//$result= pg_query("select * from genero" );
	?>
		</br></br>
		
	<section id="contenido">
	<div id="tabla1">
	<form action="registrarCliente.php" name="cliente" id="cliente" method="post" onsubmit="return validarCliente();" enctype="multipart/form-data">	
		
	<table align=center width="100%" border="15" bgcolor="#F4F6F6  " bordercolor="#8d1042">
		<th align="left">	

			<table align="center" width="100%" BGCOLOR="#F4F6F6  " id="tabla2">
				<th colspan="3" >
					<h1> <center><font color="#efb810" size="6px">INGRESE LOS DATOS DEL NUEVO CLIENTE</font></center></h1>
				</th>
			<tr>
					<td></br>&nbsp <input type="text" name="nombre" id="nombre" size="20"title="NOMBRE" placeholder="Nombre"></td>
					<td></br>&nbsp <input type="text" name="apellido1" id="apellido1" size="15"TITLE="PRIMER APELLIDO" placeholder="Primer Apellido" ></td> 
					<td></br>&nbsp <input type="text" name="apellido2" id="apellido2" size="15"TITLE="SEGUNDO APELLIDO" placeholder="Segundo Apellido" ></td></tr>
				<tr><td></br>&nbsp <input type="number" name="cedula" id="cedula" size="15"TITLE="CEDULA" placeholder="Cedula" ></td>
					<td></br>&nbsp Fecha de nacimiento:&nbsp <input type="date" name="fecha_nacimiento" id="fecha_n" ></td>
					<td> </br>&nbsp <?PHP genero(); ?> </td></tr>
				<tr><td></br>:&nbsp <input type="text" name="direccion" id="direccion" maxlength="100" size="20"  TITLE="DIRECCION" placeholder="Dirección"></td>
					<td></br>&nbsp <input type="number" name="telefono" id="telefono" size="15" maxlength="12" title="TELEFONO" placeholder="Telefono" ></td>
					<td></br>&nbsp <input type="text" name="e-mail" id="e-mail" size="20"title="E-MAIL" placeholder="E-mail"></td></tr>
				<tr>
					><td></br>&nbsp  fidelizado:
					<input type="radio" name="fidelizado" id="fidelizado" value="true" >si
					<input type="radio" name="fidelizado" id="fidelizado" value="false" >no &nbsp </td>
					<td colspan="2"></br> &nbsp <input type="text" name="observaciones" id="observaciones" size="30" placeholder="observaciones"></td>
				</tr>
				<tr> <td> </br>&nbsp <input type="text" name="usuario" id="usuario" maxlength="12"title="USUARIO" placeholder="Nombre de Usuario"></td>
					<td></br>&nbsp <input type="password" name="contraseña" maxlength="12" id="contraseña" title="contraseña" placeholder="Contraseña"></td>
					<td></br>  &nbsp <input type="password" name="validar" maxlength="12" id="validar" title="confirme contraseña" placeholder="Confirmar Contraseña"></td>
				</tr>
				<tr>
					<td><input type="file" name="imagen"required></td></tr>
				
				<tr>
						<td colspan=3 align="center">
							</br></br><input type="submit" name='empleado' id="empleado"value="Registrar cliente">&nbsp&nbsp&nbsp <input type="reset" value="limpiar"></center></br></br></br></br>
						<?PHP
							if(isset($_POST['empleado']))
							{
								$nombre = $_POST["nombre"];
								$apellido1 = $_POST["apellido1"];
								$apellido2 = $_POST["apellido2"];
								$cedula = $_POST["cedula"];
								$fecha_nac = $_POST["fecha_nacimiento"];
								$genero = $_POST["genero"];
								$direccion = $_POST["direccion"];
								$tel = $_POST["telefono"];
								$correo = $_POST["e-mail"];
								$usuario = $_POST['usuario'];
								$contraseña = $_POST['contraseña'];
								$obs = $_POST["observaciones"];
								$fid = $_POST["fidelizado"];
									$ruta=$_FILES['imagen']['name'];
									$tipo=$_FILES['imagen']['type'];
									$tam=$_FILES['imagen']['size'];
										if($tam<=1000000)		
											{
												if($tipo=="image/jpeg"||$tipo=="image/jpg"||$tipo=="image/png"||$tipo=="image/gif")
													{
													$destino=$_SERVER['DOCUMENT_ROOT'].'/proyectoweb/image/';
													move_uploaded_file($_FILES['imagen']['tmp_name'],$destino.$ruta);
													}
											}
										else echo "Imagen muy grande o archivo no admitido. No se guardo";
								echo '<image src="imagenes\enviar3.png" width="500" height="100" />' ;
								
								
								$c = conectar();
								
								$into = "into";
								
								$s = "insert " . $into . " cliente(cedula, nombre, apellido1, apellido2, email, observaciones, fecha_nacimiento, fidelizado, codigo_genero, direccion, telefono, usuario, contraseña, foto)
										values ('$cedula', '$nombre', '$apellido1', '$apellido2', '$correo', '$obs', '$fecha_nac', '$fid', '$genero', '$direccion', '$tel', '$usuario', '$contraseña', '$ruta')";
										
								$r = pg_query($c, $s);
								
								
								print"
									<script languaje='JavaScript'>
									alert('datos enviados exitosamente');
									window.location.href='registrarCliente.php';
									</script>
									";	
								
							}
							
						
						?>
					</td>
				</tr>
			</tr>
			</table>
		</th>
	</table>
	</div>	
			</br></br></br>
			
			</form>
	</section>

	
	<?PHP 
		pie();
	?>
	
</body>
</html>