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
		$titulo = 'Consulta Especifica Basica';
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

		input[type="number"]{
			width: 40%;
			height: 15%;
		}

		input[type="submit"]{
			color: white;
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

				document.getElementById("s2").innerHTML = '</br></br><form method="post" action="consulta_especifica.php" name="columnas" id="dos">Ingrese la <b>Cedula</b> del <b>Cliente</b> al cual le quiere consultar los datos: </br></br><input type="number" name="llave" id="llave" placeholder="Escriba la Cedula"/> &nbsp <input type="submit" name="nombre_columnas" from="dos" value="Consultar"/> </form></br></br>';

			}else if (dato == "envio") {
				var tabla = "envio";
				document.cookie = "tabla = " + tabla;

				document.getElementById("s2").innerHTML = '</br></br><form method="post" action="consulta_especifica.php" name="columnas" id="dos">Ingrese el <b>Codigo</b> del <b>Envio</b> al cual le quiere consultar los datos: </br></br><input type="number" name="llave" id="llave" placeholder="Escriba el Codigo"/> &nbsp <input type="submit" name="nombre_columnas" from="dos" value="Consultar"/> </form></br></br>';
			}else if (dato == "producto") {
				var tabla = "producto";
				document.cookie = "tabla = " + tabla;

				document.getElementById("s2").innerHTML = '</br></br><form method="post" action="consulta_especifica.php" name="columnas" id="dos">Ingrese el <b>Codigo</b> del <b>Producto</b> al cual le quiere consultar los datos: </br></br><input type="number" name="llave" id="llave" placeholder="Escriba el Codigo"/> &nbsp <input type="submit" name="nombre_columnas" from="dos" value="Consultar"/> </form></br></br>';
			}else if (dato == "empleado") {
				var tabla = 'empleado'
				document.cookie = "tabla = " + tabla;

				document.getElementById("s2").innerHTML = '</br></br><form method="post" action="consulta_especifica.php" name="columnas" id="dos">Ingrese el <b>Codigo</b> del <b>Empleado</b> al cual le quiere consultar los datos: </br></br><input type="number" name="llave" id="llave" placeholder="Escriba el Codigo"/> &nbsp <input type="submit" name="nombre_columnas" from="dos" value="Consultar"/> </form></br></br>';
			}else if (dato == "producto_envio") {
				var tabla = "producto_envio";
				document.cookie = "tabla = " + tabla;
				document.getElementById("s2").innerHTML = '</br></br><form method="post" action="consulta_especifica.php" name="columnas" id="dos">Ingrese el <b>Codigo</b> del <b>Producto - Envio</b> al cual le quiere consultar los datos: </br></br><input type="number" name="llave" id="llave" placeholder="Escriba el Codigo"/> &nbsp <input type="submit" name="nombre_columnas" from="dos" value="Consultar"/> </form></br></br>';
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

				if(isset($_POST['nombre_columnas'])){
					$llave = $_POST['llave'];

					if($tabla == 'cliente'){
						$c = conectar();
						$s = "select * from cliente where cedula = ".$llave.";";
						$r =pg_query($c, $s);

						$n = pg_numrows($r);

						if($n == 0){
							$d = 1;
						}else{

							echo '<section id="s2" >';
							echo '</br></br><b> Cliente </b></br></br>';
							echo '<TABLE BORDER=1 align="center" id="consulta">
											<TR>';
							echo '<TD id="th">&nbsp Cedula </TD>';
							echo '<TD id="th">&nbsp nombre </TD>';
							echo '<TD id="th">&nbsp apellido1 </TD>';
							echo '<TD id="th">&nbsp apellido2 </TD>';
							echo '<TD id="th">&nbsp puntos </TD>';		
							echo '<TD id="th">&nbsp fidelizado </TD>';
							echo '<TD id="th">&nbsp fecha de Nacimiento </TD>';
							echo '<TD id="th">&nbsp Dirección </TD>';							
							echo '<TD id="th">&nbsp Telefonno </TD>';
							echo '<TD id="th">&nbsp E-mail </TD>';
							echo '<TD id="th">&nbsp Genero </TD>';
							echo '<td id="th"> &nbsp Usuario </td>';
							echo '<td id="th"> &nbsp Contraseña </td>';
							echo '</TR>';
							
							while ($luis = pg_fetch_array($r)){
								echo '<tr>';
								for($i=0; $i<13; $i++){
									echo "<td >";
									echo $luis[$i];
									echo "</td>";
								}
								echo '</tr>';
							}
							pg_free_result($r);

							pg_close($c);
							echo '</table> </br></br> </section>';
						}
					}else
							if($tabla == 'empleado'){
								$c = conectar();
								$s = "select * from empleado where codigo = ".$llave.";";
								$r =pg_query($c, $s);

								$n = pg_numrows($r);

								if($n == 0){
									$d = 1;
								}else{

									echo '<section id="s2">';
											echo '</br></br><b> EMPLEADO </b></br></br>';
											echo '<TABLE BORDER=1 align="center" id="consulta">
													<TR>';
									echo '<TD id="th">&nbsp Codigo </TD>';
									echo '<TD id="th">&nbsp Cedula </TD>';
									echo '<TD id="th">&nbsp Nombre </TD>';
									echo '<TD id="th">&nbsp Apellido1 </TD>';
									echo '<TD id="th">&nbsp Apellido2 </TD>';		
									echo '<TD id="th">&nbsp Tipo de Sangre </TD>';				
									echo '<TD id="th">&nbsp Salario </TD>';
									echo '<TD id="th">&nbsp Lugar de Trabajo </TD>';
									echo '<TD id="th">&nbsp Fecha de Nacimiento </TD>';
									echo '<TD id="th">&nbsp Dirección </TD>';
									echo '<TD id="th">&nbsp Telefono </TD>';
									echo '<TD id="th">&nbsp E-mail </TD>';
									echo '<TD id="th">&nbsp Cargo </TD>';
									echo '<TD id="th">&nbsp Fecha de Ingreso </TD>';
									echo '<TD id="th">&nbsp Observaciones </TD>';		
									echo '<TD id="th">&nbsp Genero </TD>';
									echo '<td id="th"> &nbsp Usuario </td>';
									echo '<td id="th"> &nbsp Contraseña </td>';
						
											echo '</TR>';

									while ($luis = pg_fetch_array($r)){
								echo '<tr>';
								for($i=0; $i<18; $i++){
									echo "<td >";
									echo $luis[$i];
									echo "</td>";
								}
								echo '</tr>';
							}
							pg_free_result($r);

							pg_close($c);
							echo '</table> </br></br> </section>';
								}
							}else 
								if($tabla == 'producto'){
									$c = conectar();
									$s = "select * from producto where codigo = ".$llave.";";
									$r =pg_query($c, $s);

									$n = pg_numrows($r);

									if($n == 0){
										$d = 1;
									}else{

										echo '<section id="s2">';
									echo '</br></br><b> PRODUCTO </b></br></br>';
									echo '<TABLE BORDER=1 align="center" id="consulta">
											<TR>';
									echo '<TD id="th">&nbsp Codigo </TD>';
									echo '<TD id="th">&nbsp Nombre </TD>';
									echo '<TD id="th">&nbsp Descripcion </TD>';
									echo '<TD id="th">&nbsp Fecha de Elaboración </TD>';
									echo '<TD id="th">&nbsp Talla </TD>';		
									echo '<TD id="th">&nbsp Valor </TD>';		
									echo '<TD id="th">&nbsp Codigo del Catalogo </TD>';			
				
									echo '</TR>';

										while ($luis = pg_fetch_array($r)){
								echo '<tr>';
								for($i=0; $i<7; $i++){
									echo "<td >";
									echo $luis[$i];
									echo "</td>";
								}
								echo '</tr>';
							}
							pg_free_result($r);

							pg_close($c);
							echo '</table> </br></br> </section>';
									}
								}else
									if($tabla == 'envio'){
										$c = conectar();
										$s = "select * from envio where codigo = ".$llave.";";
										$r =pg_query($c, $s);

										$n = pg_numrows($r);

										if($n == 0){
											$d = 1;
										}else{

											echo '<section id="s2" >';
											echo '</br></br><b> ENVIO </b></br></br>';
											echo '<TABLE BORDER=1 align="center" id="consulta">
													<TR>';
											echo '<TD id="th">&nbsp Codigo </TD>';
											echo '<TD id="th">&nbsp Fecha de Llegada </TD>';
											echo '<TD id="th">&nbsp Fecha de Salida </TD>';
											echo '<TD id="th">&nbsp Lugar de Salida </TD>';		
											echo '<TD id="th">&nbsp Lugar de Llegada </TD>';		
											echo '<TD id="th">&nbsp Producto </TD>';		
											echo '<TD id="th">&nbsp Transporte </TD>';		
											echo '<TD id="th">&nbsp Cedula del Cliente </TD>';		
						
											echo '</TR>';

											while ($luis = pg_fetch_array($r)){
								echo '<tr>';
								for($i=0; $i<8; $i++){
									echo "<td >";
									echo $luis[$i];
									echo "</td>";
								}
								echo '</tr>';
							}
							pg_free_result($r);

							pg_close($c);
							echo '</table> </br></br> </section>';
										}
									}else 
										if($tabla == 'producto_envio'){
											$c = conectar();
											$s = "select * from producto_envio where codigo = ".$llave.";";
											$r =pg_query($c, $s);

											$n = pg_numrows($r);

											if($n == 0){
												$d = 1;
											}else{

												echo '<section id="s2">';
												echo '</br></br><b> PRODUCTO-ENVIO </b></br></br>';
												echo '<TABLE BORDER=1 align="center" id="consulta">
														<TR>';
												echo '<TD id="th">&nbsp Codigo </TD>';
												echo '<TD id="th">&nbsp Codigo del Producto</TD>';
												echo '<TD id="th">&nbsp Codigo del Envio </TD>';
							
												echo '</TR>';

												while ($luis = pg_fetch_array($r)){
													echo '<tr>';
													for($i=0; $i<3; $i++){
														echo "<td >";
														echo $luis[$i];
														echo "</td>";
													}
													echo '</tr>';
												}
												pg_free_result($r);

												pg_close($c);
												echo '</table> </br></br> </section>';
											}
										}
				}
			?>

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