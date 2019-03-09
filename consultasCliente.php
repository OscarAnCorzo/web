<!DOCTYPE html>
<html lang="es">
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
		include("funciones.php");
		//encabezado();
		$titulo = 'Consultas_Clientes';
		cabecera($titulo);
		estilo();
		
	?>

	<style type="text/css">
		
		#contenido{
			display: block;
			width: 88%;
			height: 850px;
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
			width: 85%;
		}

		#tabla{
			text-align: center;
		}

		#s2{
			background: white;
			width:70%;
		}
	</style>

	<script>

    	function limpiar() {
			var d = document.getElementByName("limpiar1");
			while (d.hasChildNodes())
			d.removeChild(d.firstChild);
		}

    	function tres(dato) {
		    if (dato == "cliente") {	
		    	var tabla = "cliente";
		    	document.cookie = "tabla = " + tabla;

				document.getElementById("s2").innerHTML = '</br><section id="s2" align="left" ></br></br><form method="post" action="consultasCliente.php" name="columnas" id="dos">Seleccione los datos de los clientes que desea consultar: </br><input type="checkbox" id="usuario" name="usuario" value="usuario" /> usuario </br><input type="checkbox" id="contraseña" name="contraseña" value="contraseña" /> contraseña </br><input type="checkbox" id="cedula" name="cedula" value="cedula" /> cedula </br><input type="checkbox" id="nombre" name="nombre" value="nombre" /> nombre </br><input type="checkbox" id="apellido1" name="apellido1" value="apellido1" /> apellido1 </br><input type="checkbox" id="apellido2" name="apellido2" value="apellido2" /> apellido2 </br><input type="checkbox" id="telefono" name="telefono" value="telefono" /> telefono </br><input type="checkbox" id="email" name="email" value="email" /> e-mail </br><input type="checkbox" id="fecha_nacimiento" name="fecha_nacimiento" value="fecha_nacimiento" /> fecha de nacimiento </br><input type="checkbox" id="codigo_genero" name="codigo_genero" value="codigo_genero" /> genero </br><input type="checkbox" id="direccion" name="direccion" value="direccion" /> direccion </br><input type="checkbox" id="fidelizado" name="fidelizado" value="fidelizado" /> fidelizado </br><input type="checkbox" id="observaciones" name="observaciones" value="observaciones" /> observaciones </br><input type="submit" name="nombre_columnas" from="dos"/>  </form></br></br></section>';
			}else if (dato == "nada") {
				document.getElementById("s2").innerHTML = 'UPS!!!, SELECCIONE UNA TABLA POR FAVOR.';
			}else document.getElementById("s2").innerHTML ='UPS!!, SELECCIONE UNA TABLA POR FAVOR.';


		}



    </script>

</head>
<body TEXT="black" onload="TiempoActividad()">
	
	<?PHP encabezado_empleado(); ?>
		</br> </br>
	
	<section id="contenido">	
	<div id="tabla1">
	<table bgcolor="white" align="center" width="100%" height="auto" border="15px" bordercolor="#8d1042" cellpadding="10px" id="tabla">
		<th align="center">
			</br><font color="#efb810" size="6px"> Consultas </font></br>
		
			</br>
			<form action="consultasClienteIndividual.php" name="consultaCliente" id="consultaCliente" method="post">
			buscar cliente por numero de documento: &nbsp <input type="number" max="999999999999" id="cedula" name="cedula" required></br></br>
			<input type="submit" name="consultaCliente"id="consultaCliente">
			
			
			<?PHP
				if(isset($_POST['consultaCliente'])){
					$cedula = $_POST["cedula"];
					$sql1="Select* from cliente where cedula='$cedula'";
					$conectar = conectar();
					$result1 = pg_query($conectar,$sql1);
					$numrows5 = pg_numrows($result1);
						if  ($row1 = pg_fetch_array($result1)){
											$nombre = $row1["nombre"];
											$apellido1 = $row1["apellido1"];
											$apellido2 = $row1["apellido2"];
											$cedula = $row1["cedula"];
											$fecha_nac = $row1["fecha_nacimiento"];
											$genero = $row1["codigo_genero"];
											$direccion = $row1["direccion"];
											$tel = $row1["telefono"];
											$correo = $row1["email"];
											$usuario = $row1['usuario'];
											$contraseña = $row1['contraseña'];
											$obs = $row1["observaciones"];
											$fid = $row1["fidelizado"];
										}
					if  ($numrows5!=0) 
												
							
							echo "<h1><P align='center'> LOS  DATOS DEL CLIENTE SON:</p></h1>";
							echo "<table width='50%' align='center'>";
							echo "<tr>";
								echo "<td>";
									echo "CEDULA";
								echo "</td>";
								echo "<td >";
									echo $cedula;
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>";
									echo "NOMBRE";
								echo "</td>";
								echo "<td >";
									echo $nombre;
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>";
									echo "PRIIMER APELLIDOS";
								echo "</td>";
								echo "<td >";
									echo $apellido1;
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td >";
									echo "SEGUNDO APELLIDO";
								echo "</td>";
								echo "<td >";
									echo $apellido2;
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td >";
									echo "E_MAIL";
								echo "</td>";
								echo "<td >";
									echo $correo;
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td >";
									echo "CONTRASEÑA";
								echo "</td>";
								echo "<td>";
									echo $contraseña;
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td >";
									echo "FECHA DE NACIMIENTO";
								echo "</td>";
								echo "<td >";
									echo $fecha_nac;
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td >";
							echo "FIDELIZADO";
							echo "</td>";
							echo "<td >";
							echo $fid ;
							echo "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td >";
							echo "GENERO";
							echo "</td>";
							echo "<td >";
							echo $genero;
							echo "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td >";
							echo "DIRECCION";
							echo "</td>";
							echo "<td >";
							echo $direccion;
							echo "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td >";
							echo "TELEFONO";
							echo "</td>";
							echo "<td >";
							echo $tel;
							echo "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td >";
							echo "USUARIO";
							echo "</td>";
							echo "<td >";
							echo $usuario;
							echo "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td >";
							echo "OBSERVACIONES";
							echo "</td>";
							echo "<td>";
							echo $obs;
							echo "</td>";
							echo "</tr>";
							
								
										
				}										
						
				?>
				</form>
			</br></br></br>
			<section id="s1">
				Mostrar listado de clientes???:&nbsp <select id="nombre" name="nombre" onchange="tres(this.value)"> 
					<option value="nada">  </option>
					<option value="cliente"> Todos los clientes </option></select>

			</br>
			</section>
			</br></br></br>

			<section id="s2" align="left">

			</section>

			<?PHP
				if(isset($_COOKIE["tabla"])){
					$tabla  = $_COOKIE["tabla"];
				}else $tabla = "no ha seleccionado ninguna tabla.";

				//formulario($tabla);
				
				if(isset($_POST['nombre_columnas'])){			
				if($tabla == "cliente"){

										$l = ""; 

										if(isset($_POST["cedula"])){
										$cedula =  $_POST["cedula"];
										}else $cedula = null;

										
										if(isset($_POST["nombre"])){
										$nombre = $_POST["nombre"];
										}else $nombre = null;

										
										if(isset($_POST["apellido1"])){
										$apellido1 = $_POST["apellido1"];
										}else $apellido1 = null;

										
										if(isset($_POST["apellido2"])){
										$apellido2 = $_POST["apellido2"];
										}else $apellido2 = null;

										
										if(isset($_POST["fecha_nacimiento"])){
										$fecha_nacimiento = $_POST["fecha_nacimiento"];
										}else $fecha_nacimiento = null;

										
										if(isset($_POST["email"])){
										$email = $_POST["email"];
										}else $email = null;

										
										if(isset($_POST["codigo_genero"])){
										$codigo_genero = $_POST["codigo_genero"];
										}else $codigo_genero = null;

										
										if(isset($_POST["fidelizado"])){
										$fidelizado = $_POST["fidelizado"];
										}else $fidelizado = null;

										
										if(isset($_POST["direccion"])){
										$direccion = $_POST["direccion"];
										}else $direccion = null;

										
										if(isset($_POST["telefono"])){
										$telefono = $_POST["telefono"];
										}else $telefono = null;						

										
										if(isset($_POST["observaciones"])){
										$obs = $_POST["observaciones"];
										}else $obs = null;

										if(isset($_POST["usuario"])){
										$usuario = $_POST["usuario"];
										}else $usuario = null;

										if(isset($_POST["contraseña"])){
										$contraseña = $_POST["contraseña"];
										}else $contraseña = null;

									

										$s = [$cedula, $nombre, $apellido1, $apellido2, $telefono, $email, $fecha_nacimiento, $codigo_genero, $direccion, $fidelizado, $obs, $usuario, $contraseña];
										$o = count($s);
												
										$c=100;
										

										for($i=0; $i<$o; $i++){
											if(!($s[$i] == null)){
												$c = $i;
												$l = $s[$i];
												$i = $o;
											}
										}

										if( $c == 100){
											echo '<script> document.getElementById("s2").innerHTML = "</br></br>No seleccionó ninguna columna.</br></br>";</script>';
											exit();
										}else{ 
												for($i = $c + 1; $i<$o; $i++){
														if(!($s[$i] == null)){
														$l = $l .", ". $s[$i];
													}
												}		

												//$a = [];						

												$conectar = conectar();

												$sql = "select ".$l. " from cliente;";

												$r = pg_query($conectar, $sql);
												echo '<section id="s2">';
												echo '</br></br><b> CLIENTE </b></br>';
												echo '<TABLE BORDER=1 align="center">
														<TR>';
												if($cedula != null)	echo '<TD>&nbsp'.$cedula.' </TD>';
												if($nombre != null)	echo '<TD>&nbsp'.$nombre.'</TD>';
												if($apellido1 != null)	echo '<TD>&nbsp'.$apellido1.' </TD>';
												if($apellido2 != null)	echo '<TD>&nbsp'.$apellido2.' </TD>';					
												if($telefono != null)	echo '<TD>&nbsp'.$telefono.' </TD>';
												if($email != null)	echo '<TD>&nbsp'.$email.' </TD>';
												if($fecha_nacimiento != null)	echo '<TD>&nbsp'.$fecha_nacimiento.' </TD>';
												if($codigo_genero != null)	echo '<TD>&nbsp'.$codigo_genero.' </TD>';
												if($direccion != null)	echo '<TD>&nbsp'.$direccion.' </TD>';
												if($fidelizado != null)	echo '<TD>&nbsp'.$fidelizado.' </TD>';		
												if($obs != null)	echo '<TD>&nbsp'.$obs.' </TD>';
												if($usuario != null)	echo '<td> &nbsp'.$usuario.' </td>';
												if($contraseña != null)	echo '<td> &nbsp'.$contraseña.' </td>';
							
												echo '</TR>';
												
												tabla($o, $r, $conectar);
												echo '</table> </br></br> </section>';

											}
									}
				}		
					
					
			?>
			
						
			</br></br></br></br>
				
			
		</th>
	</table>
	</div>
	</section>
	

	<?PHP 
		pie();
	?>
	
</body>
</html>