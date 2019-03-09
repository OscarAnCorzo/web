<!DOCTYPE html>
<html lang="es">
<head>
	
	<script>
			function validarCompra()
			{
				var num, cedula, fecha, valor, subtotal, iva, total, desc, obs; 
				
				num = document.getElementById("num_factura").value;
				cedula = document.getElementById("cedula").value;
				fecha = document.getElementById("fecha_compra").value;
				obs = document.getElementById("observaciones_compra").value;
				subtotal = document.getElementById("subtotal_compra").value;
				iva = document.getElementById("iva_compra").value;

				desc = document.getElementById("descuento_compra").value;
				
				
				if( num === "" || cedula === "" || fecha === "" || valor ===  "" || subtotal === "" || iva === "" || total === "" || desc === "" )
				{
					alert("Uno o varios campos vacios. Por favor ingrese los datos del cliente");
					return false;
				}
						
						if(isNaN(num)){
							alert("EL NUMERO DE FACTURA NO CONTIENE LETRAS"); 
							return false;
							}else {
									if(isNaN(cedula))
									{
										alert("EL CEDULA NO DEBE CONTENER LETRAS"); 
										return false;
									}else{
													if(isNaN(subtotal))
													{
														alert("EL SUBTOTAL NO DEBE CONTENER LETRAS"); 
														return false;
														
													}else {
															if(isNaN(iva))
															{
																alert("EL IVA NO DEBE CONTENER LETRAS"); 
																return false;
															}else{
																	if(isNaN(desc))
																			{
																				alert("EL DESCUENTO NO DEBE CONTENER LETRAS"); 
																				return false;
																				
																			}else{ return true;}
																		}
																}
														}
												}
										
								
								
					 
				
				
				
				
				
				
			}
	
	</script>
	
	<meta charset="utf-8" name="keywords" content="Zapatos, sandalias, moda, belleza, zapatillas, tacones, calzado"/> 
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="css/fonts/style.css"/>
	<script type="text/javascript" src="js/funciones.js"></script>
	<?php
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
		$titulo = 'Registro_Compra';
		cabecera($titulo);
		estilo();
		$c = conectar();
	?>

	<style type="text/css">
		#contenido{
			display: block;
			width: 88%;
			height: 600px;
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
			margin-left: 15%;
			
			width: 70%;
		}


		#tabla2 td{
			width: 33%
		}

	</style>


</head>
<body bgcolor="#F8E0F7">
	
	<?PHP 
		encabezado_admin(); 
	?>
		</br></br>
	<section id="contenido">
	<form action="compra-js.php" name="compra" id="compra" method="post" onsubmit="return validarCompra();">
	<div class="cuerpo">
	<table align=center width="100%" >
		<th align="justify">

			<table align=center width="100%" id="tabla2">
				<tr><th colspan="2"><h1> <center><font color="brown" size="6">COMPRA</font></center></h1></th></tr>
				
				<tr><td></br> &nbsp <input type="number" name="num" id="num_factura" size="12" placeholder="Numero de Factura" title="numero de factura" ></td>
					<td></br> &nbsp <input type="number" name="subtotal" id="subtotal_compra" size="12" placeholder="Subtotal" title="subtotal" >  </td></tr>
				
				<tr><td></br> &nbsp Fe&nbsp <input type="number" name="iva" id="iva_compra" size="12" placeholder="Iva" title="iva" >  </td>
					<td></br> &nbsp <input type="number" name="descuento" id="descuento_compra" size="12" placeholder="Descuento" title="descuento" >  </td></tr>
				
				<tr><td></br> &nbsp Fecha de Compra: &nbsp<input type="date" name="fecha_c" id="fecha_compra"  title="fecha de compra" >  </td>
					<td> </br>Cedula del Cliente:&nbsp<select name="cedula" id="cedula ">
						<option></option>
					<?php
							while($row = pg_fetch_array($result)) { 
							$codigo = $row["cedula"] ;
							echo "<option value=".$codigo.">".$codigo."</option>"; 
						}
					?>
					</select>  </td></tr>
					
				<tr>	<td align="left" colspan=2></br> &nbsp <input type="text" name="observaciones" id="observaciones_compra" size="100" placeholder="Observaciones"></br></br></br></br></td></tr>
				
				<tr>
					<td colspan=3 align="center">
						</br>
						</br></br><a href="registrar.php"><input type="button" value="Volver"></a>&nbsp&nbsp&nbsp
						<input type="submit" name="compra" id="empleado" value="Registrar Compra">&nbsp <input type="reset" value="Borrar"></center></br></br></br></br>
						
						<?PHP
							if(isset($_POST["compra"]))
							{	$numero = $_POST["num"];
								$cedula = $_POST["cedula"];
								$fecha_c = $_POST["fecha_c"];
								$obs = $_POST["observaciones"];
								$subtotal = $_POST["subtotal"];
								$descuento = $_POST["descuento"];
								$iva = $_POST["iva"];
								$total = $subtotal + $iva - $descuento;

								
								$c = conectar();
								
								$s  = "insert into compra(num_factura, fecha, subtotal, iva, total, descuento, cedula, observaciones )
										values ('$numero', '$fecha_c', '$subtotal', '$iva', '$total', '$descuento', '$cedula', '$obs')";
								
								$r = pg_query($c,$s);
								
							}
						?>	
					</br></br>
					
					</td>
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