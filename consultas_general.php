<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="css/fonts/style.css"/>
	<script type="text/javascript" src="js/funciones.js"></script>
	<?PHP
		session_start();
		include("funciones.php");
		//encabezado();
		$titulo = 'Consultas General Basica';
		cabecera($titulo);
		estilo();
	?>

	<style type="text/css">
		
		#contenido{
			display: block;
			width: 88%;
			height: 900px;
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
			border: 15px outset #8d1042;
		}

		#s1{
			font-size: 19px;
		}

		#s2{
			background: white;
			width:78%;
			display: inline-block;
			
			
		}

		#s2 > form{
			width: 100%;
			
			position: relative;
			text-align: left;
			right: 0%;
			line-height: 150%;
			font-size: 19px;

		}

		input[type="checkbox"]{
			width: 4%;

		}

		#consulta{
			border-collapse: collapse;
			width: 100%;
		}

		#consulta td, #th{
			border: 1px solid #ddd;
    		padding: 8px;
		}

		#consulta tr:nth-child(even){background-color: #f2f2f2;}

		#consulta tr:hover {background-color: #ddd;}

		#th{
		    padding-top: 12px;
		    padding-bottom: 12px;
		    text-align: center;
		    background: #48C9B0;
		    color: white;
		    font-size: 17px;
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

				document.getElementById("s2").innerHTML = '</br></br><form method="post" action="consultas_general.php" name="columnas" id="dos">Seleccione las columnas de Cliente a las cuales le quiere consultar los datos: </br></br><p align="left"><input type="checkbox" id="usuario" name="usuario" value="usuario" /> usuario </br><input type="checkbox" id="contraseña" name="contraseña" value="contraseña" /> contraseña </br><input type="checkbox" id="cedula" name="cedula" value="cedula" /> cedula </br><input type="checkbox" id="nombre" name="nombre" value="nombre" /> nombre </br><input type="checkbox" id="apellido1" name="apellido1" value="apellido1" /> apellido1 </br><input type="checkbox" id="apellido2" name="apellido2" value="apellido2" /> apellido2 </br><input type="checkbox" id="telefono" name="telefono" value="telefono" /> telefono </br><input type="checkbox" id="email" name="email" value="email" /> e-mail </br><input type="checkbox" id="fecha_nacimiento" name="fecha_nacimiento" value="fecha_nacimiento" /> fecha de nacimiento </br><input type="checkbox" id="codigo_genero" name="codigo_genero" value="codigo_genero" /> genero </br><input type="checkbox" id="direccion" name="direccion" value="direccion" /> direccion </br><input type="checkbox" id="fidelizado" name="fidelizado" value="fidelizado" /> fidelizado </br><input type="checkbox" id="puntos" name="puntos" value="puntos" /> puntos </br> </br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" name="nombre_columnas" from="dos" /> </p> </form></br></br>';

			}else if (dato == "envio") {
				var tabla = "envio";
				document.cookie = "tabla = " + tabla;

				document.getElementById("s2").innerHTML = '</br></br><form method="post" action="consultas_general.php" name="columnas" id="dos">Seleccione las columnas de Envio a las cuales le quiere consultar los datos: </br></br><input type="checkbox" id="codigo" name="codigo" value="codigo" /> codigo </br><input type="checkbox" id="fecha_salida" name="fecha_salida" value="fecha_salida" /> fecha_salida </br><input type="checkbox" id="fecha_llegada" name="fecha_llegada" value="fecha_llegada" /> fecha_llegada </br><input type="checkbox" id="lugar_salida" name="lugar_salida" value="lugar_salida" /> lugar_salida </br><input type="checkbox" id="lugar_llegada" name="lugar_llegada" value="lugar_llegada" /> lugar_llegada </br><input type="checkbox" id="cod_producto" name="cod_producto" value="cod_producto" /> cod_producto </br><input type="checkbox" id="cod_transporte" name="cod_transporte" value="cod_transporte" /> cod_transporte  </br><input type="checkbox" id="cedula_cliente" name="cedula_cliente" value="cedula_cliente" /> cedula_cliente </br></br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" name="nombre_columnas" from="dos"/> </form></br></br>';
			}else if (dato == "producto") {
				var tabla = "producto";
				document.cookie = "tabla = " + tabla;

				document.getElementById("s2").innerHTML = '</br></br><form method="post" action="consultas_general.php" name="columnas" id="dos">Seleccione las columnas de Producto a las cuales le quiere consultar los datos: </br></br><input type="checkbox" id="codigo" name="codigo" value="codigo" /> codigo </br><input type="checkbox" id="nombre" name="nombre" value="nombre" /> nombre </br><input type="checkbox" id="descripcion" name="descripcion" value="descripcion" /> descripcion </br><input type="checkbox" id="fecha_elaboracion" name="fecha_elaboracion" value="fecha_elaboracion" /> fecha_elaboracion </br><input type="checkbox" id="talla" name="talla" value="talla" /> talla </br><input type="checkbox" id="valor" name="valor" value="valor" /> valor </br><input type="checkbox" id="cod_catalogo" name="cod_catalogo" value="cod_catalogo" /> cod_catalogo </br></br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" name="nombre_columnas" from="dos"/> </form></br></br>';
			}else if (dato == "empleado") {
				var tabla = 'empleado'
				document.cookie = "tabla = " + tabla;

				document.getElementById("s2").innerHTML = '</br></br><form method="post" action="consultas_general.php" name="columnas" id="dos">Seleccione las columnas de Empleado a las cuales le quiere consultar los datos: </br></br><input type="checkbox" id="codigo" name="codigo" value="codigo" /> codigo </br><input type="checkbox" id="usuario" name="usuario" value="usuario" /> usuario </br><input type="checkbox" id="contraseña" name="contraseña" value="contraseña" /> contraseña </br><input type="checkbox" id="cedula" name="cedula" value="cedula" /> cedula </br><input type="checkbox" id="nombre" name="nombre" value="nombre" /> nombre </br><input type="checkbox" id="apellido1" name="apellido1" value="apellido1" /> apellido1 </br><input type="checkbox" id="apellido2" name="apellido2" value="apellido2" /> apellido2 </br><input type="checkbox" id="fecha_ingreso" name="fecha_ingreso" value="fecha_ingreso" /> fecha de ingreso </br><input type="checkbox" id="telefono" name="telefono" value="telefono" /> telefono </br><input type="checkbox" id="email" name="email" value="email" /> e-mail </br><input type="checkbox" id="fecha_nacimiento" name="fecha_nacimiento" value="fecha_nacimiento" /> fecha de nacimiento </br><input type="checkbox" id="cod_genero" name="cod_genero" value="cod_genero" /> genero </br><input type="checkbox" id="direccion" name="direccion" value="direccion" /> direccion </br><input type="checkbox" id="cargo" name="cargo" value="cargo" /> cargo </br><input type="checkbox" id="lugar_trabajo" name="lugar_trabajo" value="lugar_trabajo" /> lugar de trabajo </br><input type="checkbox" id="tipo_sangre" name="tipo_sangre" value="tipo_sangre" /> tipo de sangre </br><input type="checkbox" id="puntos" name="puntos" value="puntos" /> puntos </br><input type="checkbox" id="observaciones" name="observaciones" value="observaciones" /> observaciones </br></br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" name="nombre_columnas" from="dos"/> </form></br></br>';
			}else if (dato == "producto_envio") {
				var tabla = "producto_envio";
				document.cookie = "tabla = " + tabla;
				document.getElementById("s2").innerHTML = '</br></br><form method="post" action="consultas_general.php" name="columnas" id="dos">Seleccione las columnas de Producto_Envio a las cuales le quiere consultar los datos: </br></br><input type="checkbox" id="codigo" name="codigo" value="codigo" /> codigo </br><input type="checkbox" id="cod_producto" name="cod_producto" value="cod_producto" /> cod_producto </br><input type="checkbox" id="cod_envio" name="cod_envio" value="cod_envio" /> cod_envio </br></br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" name="nombre_columnas" from="dos"/> </form></br></br></br></br>';
			}else if (dato == "nada") {
				document.getElementById("s2").innerHTML = 'UPS!!!, SELECCIONE UNA TABLA POR FAVOR.';
			}else document.getElementById("s2").innerHTML ='UPS!!, SELECCIONE UNA TABLA POR FAVOR.';


		}



    </script>

</head>
<body TEXT="black" onload="TiempoActividad()">
	
	<?PHP encabezado_admin(); ?>
	</br></br>
	
	<section id="contenido">
		<div id="tabla1">	</br></br>
	<table bgcolor="white" align="center" width="100%" height="auto" id="tabla" border=0>
		<th align="center">
			<font color="#efb810" size="6px" > Consultas </font>
		

			
			<section id="s1">
			</br>
			
				&nbsp Seleccione la tabla que desea consultar: &nbsp <select id="nombre" name="nombre" onchange="tres(this.value)"> 
					<option value="nada">  </option>
					<option value="producto"> Producto </option>
					<option value="cliente"> Cliente </option>
					<option value="envio"> Envio </option>
					<option value="empleado"> Empleado </option>
					<option value="producto_envio"> Producto_envio </option>
					</select>

			</br>
			</section>
			</br></br>
		</th>
		<tr>
			<td align="center">
			<section id="s2">

			</section>

			<?PHP
				if(isset($_COOKIE["tabla"])){
					$tabla  = $_COOKIE["tabla"];
				}else $tabla = "no ha seleccionado ninguna tabla.";

				//formulario($tabla);
				
				if(isset($_POST['nombre_columnas'])){
					// esto es para el formulario de envio.
					if($tabla == "envio"){

						$l = ""; 

						if(isset($_POST["codigo"])){
						$codigo = $_POST["codigo"];
						//$l = $l . ", ".$factura;
						}else $codigo = null;

						if(isset($_POST["fecha_salida"])){
						$fecha_salida = $_POST["fecha_salida"];
						//$l = $l . ", ".$fecha;
						}else $fecha_salida = null;

						if(isset($_POST["fecha_llegada"])){
						$fecha_llegada = $_POST["fecha_llegada"];
						//$l = $l . ", ".$subtotal;
						}else $fecha_llegada = null;

						if(isset($_POST["lugar_salida"])){
						$lugar_salida = $_POST["lugar_salida"];
						//$l = $l . ", ".$iva;
						}else $lugar_salida = null;

						if(isset($_POST["lugar_llegada"])){
						$lugar_llegada = $_POST["lugar_llegada"];
						//$l = $l . ", ".$total;
						}else $lugar_llegada = null;

						if(isset($_POST["cod_producto"])){
						$cod_producto = $_POST["cod_producto"];
						//$l = $l . ", ".$descuento;
						}else $cod_producto = null;

						if(isset($_POST["cedula_cliente"])){
						$cedula_cliente =  $_POST["cedula_cliente"];
						//$l = $l . ", ".$cedula;
						}else $cedula_cliente = null;

						if(isset($_POST["cod_transporte"])){
						$cod_transporte = $_POST["cod_transporte"];
						//$l = $l . ", ".$obs;
						}else $cod_transporte = null;

						//echo "select ".$l. " from nombre";

						$s = [$codigo, $fecha_salida, $fecha_llegada, $lugar_salida, $lugar_llegada, $cod_producto, $cod_transporte, $cedula_cliente ];
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

								$sql = "select ".$l. " from envio;";

								$r = pg_query($conectar, $sql);
								echo '<section id="s2" >';
								echo '</br></br><b> ENVIO </b></br>';
								echo '<TABLE BORDER=1 align="center" id="consulta">
										<TR>';
								if($codigo != null)	echo '<TD id="th">&nbsp'.$codigo.' </TD>';
								if($fecha_salida != null)	echo '<TD id="th">&nbsp'.$fecha_salida.'</TD>';
								if($fecha_llegada != null)	echo '<TD id="th">&nbsp'.$fecha_llegada.' </TD>';
								if($lugar_salida != null)	echo '<TD id="th">&nbsp'.$lugar_salida.' </TD>';		
								if($lugar_llegada != null)	echo '<TD id="th">&nbsp'.$lugar_llegada.' </TD>';		
								if($cod_producto != null)	echo '<TD id="th">&nbsp'.$cod_producto.' </TD>';		
								if($cod_transporte != null)	echo '<TD id="th">&nbsp'.$cod_transporte.' </TD>';		
								if($cedula_cliente != null)	echo '<TD id="th">&nbsp'.$cedula_cliente.' </TD>';		
			
								echo '</TR>';
								
								tabla($o, $r, $conectar);
								echo '</table> </section>';

							}
					}else
						// esto es para el formulario de producto.
						if($tabla == "producto"){

							$l = ""; 

							if(isset($_POST["codigo"])){
							$codigo = $_POST["codigo"];
					
							}else $codigo = null;

							if(isset($_POST["nombre"])){
							$nombre = $_POST["nombre"];
					
							}else $nombre = null;

							if(isset($_POST["descripcion"])){
							$descripcion = $_POST["descripcion"];
			
							}else $descripcion = null;

							if(isset($_POST["fecha_elaboracion"])){
							$fecha_elaboracion = $_POST["fecha_elaboracion"];
						
							}else $fecha_elaboracion = null;

							if(isset($_POST["talla"])){
							$talla = $_POST["talla"];

							}else $talla = null;

							if(isset($_POST["valor"])){
							$valor = $_POST["valor"];
			
							}else $valor = null;


							if(isset($_POST["cod_catalogo"])){
							$cod_catalogo =  $_POST["cod_catalogo"];
				
							}else $cod_catalogo = null;


							$s = [$codigo, $nombre, $descripcion, $fecha_elaboracion, $talla, $valor, $cod_catalogo ];
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

									$sql = "select ".$l. " from producto;";

									$r = pg_query($conectar, $sql);
									echo '<section id="s2">';
									echo '</br></br><b> PRODUCTO </b></br>';
									echo '<TABLE BORDER=1 align="center" id="consulta">
											<TR>';
									if($codigo != null)	echo '<TD id="th">&nbsp'.$codigo.' </TD>';
									if($nombre != null)	echo '<TD id="th">&nbsp'.$nombre.' </TD>';
									if($descripcion != null)	echo '<TD id="th">&nbsp'.$descripcion.'</TD>';
									if($fecha_elaboracion != null)	echo '<TD id="th">&nbsp'.$fecha_elaboracion.' </TD>';
									if($talla != null)	echo '<TD id="th">&nbsp'.$talla.' </TD>';		
									if($valor != null)	echo '<TD id="th">&nbsp'.$valor.' </TD>';		
									if($cod_catalogo != null)	echo '<TD id="th">&nbsp'.$cod_catalogo.' </TD>';			
				
									echo '</TR>';
									
									tabla($o, $r, $conectar);
									echo '</table> </section>';

								}
						}else
							// este es para el formulario de producto_envio.
							if($tabla == "producto_envio"){

								$l = ""; 

								if(isset($_POST["codigo"])){
								$codigo =  $_POST["codigo"];
								}else $codigo = null;

								
								if(isset($_POST["cod_producto"])){
								$cod_producto = $_POST["cod_producto"];
								}else $cod_producto = null;

								
								if(isset($_POST["cod_envio"])){
								$cod_envio = $_POST["cod_envio"];
								}else $cod_envio = null;

							

								$s = [$codigo, $cod_producto, $cod_envio];
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

										$sql = "select ".$l. " from producto_envio;";

										$r = pg_query($conectar, $sql);
										echo '<section id="s2">';
										echo '</br></br><b> PRODUCTO-ENVIO </b></br>';
										echo '<TABLE BORDER=1 align="center" id="consulta">
												<TR>';
										if($codigo != null)	echo '<TD id="th">&nbsp'.$codigo.' </TD>';
										if($cod_producto != null)	echo '<TD id="th">&nbsp'.$cod_producto.'</TD>';
										if($cod_envio != null)	echo '<TD id="th">&nbsp'.$cod_envio.' </TD>';
					
										echo '</TR>';
										
										tabla($o, $r, $conectar);
										echo '</table> </section>';

									}
							}else
								// este es para el formulario de empleado.
								if($tabla == "empleado"){

									$l = ""; 

									if(isset($_POST["codigo"])){
									$codigo =  $_POST["codigo"];
									}else $codigo = null;

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

									
									if(isset($_POST["fecha_ingreso"])){
									$fecha_ingreso = $_POST["fecha_ingreso"];
									}else $fecha_ingreso = null;

									
									if(isset($_POST["fecha_nacimiento"])){
									$fecha_nacimiento = $_POST["fecha_nacimiento"];
									}else $fecha_nacimiento = null;

									
									if(isset($_POST["email"])){
									$email = $_POST["email"];
									}else $email = null;

									
									if(isset($_POST["tipo_sangre"])){
									$tipo_sangre = $_POST["tipo_sangre"];
									}else $tipo_sangre = null;

									
									if(isset($_POST["cargo"])){
									$cargo = $_POST["cargo"];
									}else $cargo = null;

									
									if(isset($_POST["cod_genero"])){
									$cod_genero = $_POST["cod_genero"];
									}else $cod_genero = null;

									
									if(isset($_POST["lugar_trabajo"])){
									$lugar_trabajo = $_POST["lugar_trabajo"];
									}else $lugar_trabajo = null;

									
									if(isset($_POST["direccion"])){
									$direccion = $_POST["direccion"];
									}else $direccion = null;

									
									if(isset($_POST["telefono"])){
									$telefono = $_POST["telefono"];
									}else $telefono = null;						

									
									if(isset($_POST["salario"])){
									$salario = $_POST["salario"];
									}else $salario = null;

									if(isset($_POST["usuario"])){
									$usuario = $_POST["usuario"];
									}else $usuario = null;

									if(isset($_POST["contraseña"])){
									$contraseña = $_POST["contraseña"];
									}else $contraseña = null;

									if(isset($_POST["observaciones"])){
									$observaciones = $_POST["observaciones"];
									}else $observaciones = null;

								

									$s = [$codigo, $cedula, $nombre, $apellido1, $apellido2, $tipo_sangre, $salario, $lugar_trabajo, $fecha_nacimiento, $direccion, $telefono, $email,  $cargo, $fecha_ingreso, $observaciones, $cod_genero, $usuario, $contraseña];
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

											$sql = "select ".$l. " from empleado;";

											$r = pg_query($conectar, $sql);
											echo '<section id="s2">';
											echo '</br></br><b> EMPLEADO </b></br>';
											echo '<TABLE BORDER=1 align="center" id="consulta">
													<TR>';
											if($codigo != null)	echo '<TD id="th">&nbsp'.$codigo.' </TD>';
											if($cedula != null)	echo '<TD id="th">&nbsp'.$cedula.' </TD>';
											if($nombre != null)	echo '<TD id="th">&nbsp'.$nombre.'</TD>';
											if($apellido1 != null)	echo '<TD id="th">&nbsp'.$apellido1.' </TD>';
											if($apellido2 != null)	echo '<TD id="th">&nbsp'.$apellido2.' </TD>';		
											if($tipo_sangre != null)	echo '<TD id="th">&nbsp'.$tipo_sangre.' </TD>';				
											if($salario != null)	echo '<TD id="th">&nbsp'.$salario.' </TD>';
											if($lugar_trabajo != null)	echo '<TD id="th">&nbsp'.$lugar_trabajo.' </TD>';
											if($fecha_nacimiento != null)	echo '<TD id="th">&nbsp'.$fecha_nacimiento.' </TD>';
											if($direccion != null)	echo '<TD id="th">&nbsp'.$direccion.' </TD>';
											if($telefono != null)	echo '<TD id="th">&nbsp'.$telefono.' </TD>';
											if($email != null)	echo '<TD id="th">&nbsp'.$email.' </TD>';
											if($cargo != null)	echo '<TD id="th">&nbsp'.$cargo.' </TD>';
											if($fecha_ingreso != null)	echo '<TD id="th">&nbsp'.$fecha_ingreso.' </TD>';
											if($observaciones != null)	echo '<TD id="th">&nbsp'.$observaciones.' </TD>';		
											if($cod_genero != null)	echo '<TD id="th">&nbsp'.$cod_genero.' </TD>';
											if($usuario != null)	echo '<td id="th"> &nbsp'.$usuario.' </td>';
											if($contraseña != null)	echo '<td id="th"> &nbsp'.$contraseña.' </td>';
						
											echo '</TR>';
											
											tabla($o, $r, $conectar);
											echo '</table> </br></br> </section>';

										}
								}else

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

										if(isset($_POST["puntos"])){
										$puntos = $_POST["puntos"];
										}else $puntos = null;

										if(isset($_POST["fidelizado"])){
										$fidelizado = $_POST["fidelizado"];
										}else $fidelizado = null;
										
										if(isset($_POST["fecha_nacimiento"])){
										$fecha_nacimiento = $_POST["fecha_nacimiento"];
										}else $fecha_nacimiento = null;

										if(isset($_POST["direccion"])){
										$direccion = $_POST["direccion"];
										}else $direccion = null;

										if(isset($_POST["telefono"])){
										$telefono = $_POST["telefono"];
										}else $telefono = null;				
										
										if(isset($_POST["email"])){
										$email = $_POST["email"];
										}else $email = null;
										
										if(isset($_POST["cod_genero"])){
										$cod_genero = $_POST["cod_genero"];
										}else $cod_genero = null;

										if(isset($_POST["usuario"])){
										$usuario = $_POST["usuario"];
										}else $usuario = null;

										if(isset($_POST["contraseña"])){
										$contraseña = $_POST["contraseña"];
										}else $contraseña = null;

									

										$s = [$cedula, $nombre, $apellido1, $apellido2, $puntos, $fidelizado, $fecha_nacimiento, $direccion, $telefono, $email, $cod_genero, $usuario, $contraseña];
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
												echo '<TABLE BORDER=1 align="center" id="consulta">
														<TR>';
												if($cedula != null)	echo '<TD  id="th">&nbsp'.$cedula.' </TD>';
												if($nombre != null)	echo '<TD id="th">&nbsp'.$nombre.'</TD>';
												if($apellido1 != null)	echo '<TD id="th">&nbsp'.$apellido1.' </TD>';
												if($apellido2 != null)	echo '<TD id="th">&nbsp'.$apellido2.' </TD>';
												if($puntos != null)	echo '<TD id="th">&nbsp'.$puntos.' </TD>';		
												if($fidelizado != null)	echo '<TD id="th">&nbsp'.$fidelizado.' </TD>';
												if($fecha_nacimiento != null)	echo '<TD id="th">&nbsp'.$fecha_nacimiento.' </TD>';
												if($direccion != null)	echo '<TD id="th">&nbsp'.$direccion.' </TD>';							
												if($telefono != null)	echo '<TD id="th">&nbsp'.$telefono.' </TD>';
												if($email != null)	echo '<TD id="th">&nbsp'.$email.' </TD>';
												if($cod_genero != null)	echo '<TD id="th">&nbsp'.$cod_genero.' </TD>';
												if($usuario != null)	echo '<td id="th"> &nbsp'.$usuario.' </td>';
												if($contraseña != null)	echo '<td id="th"> &nbsp'.$contraseña.' </td>';
							
												echo '</TR>';
												
												tabla($o, $r, $conectar);
												echo '</table> </br></br> </section>';

											}
									}
				}		
					
					
			?>
			
						
			</br></br></br></br>
				
			</td>
		</tr>
	</table>
	</div>
	</section>
	
	<?PHP 
		pie();
	?>
	
</body>
</html>