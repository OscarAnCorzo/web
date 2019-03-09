<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
	<link rel="stylesheet" href="css/fonts/style.css"/>

	<?PHP 
		session_start();
		include("funciones.php");
		$titulo = 'Catalogos';
		cabecera($titulo);
		estilo();
	?>

	<style type="text/css">
		#contenido{
			display: block;
			width: 88%;
			height: 1300px;
			margin-top: 73px;
			padding-top: 2%;
			padding-right: 6%;
			padding-left: 6%; 
			background: white;
		}

		#dama{
			border:none;
		}

		a{
			text-decoration: none;
		}
	</style>

</head>
<body >
	
	<?PHP 
		encabezado();
	?>
	</br></br>
	
	<section id="contenido">
		
		<div id="menu_lateral">
			
			<p >
				<center><font color="#efb810" size="6" ><b> Categorias</b> </font></center>
			</p></br>
			<hr color="#ccc"/>
				</br>
			<p  id="lista">
				<dl>
					<dt><li> <a href="modelos.php" class="enla"><b> Dama: </b></a></li>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Zapatillas </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Sandalias </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Botines </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Zuecos </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Tacones </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp De Salón </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Bajitos </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Deportivas </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Chanclas </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Pantuflas </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Tenis </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Bailarinas </a>
				</dl>
				
				</br><hr color="#ccc"/></br>
					
				<dl>
					<dt><li> <a href="puntos.php" class="enla"><b> Niña: </b></a></li>
						<dd> <a href="puntos.php" class="enla"> &nbsp &nbsp &nbsp Tenis </a>
						<dd> <a href="puntos.php" class="enla"> &nbsp &nbsp &nbsp Sandalias </a>
						<dd> <a href="puntos.php" class="enla"> &nbsp &nbsp &nbsp Botas </a>
						<dd> <a href="puntos.php" class="enla"> &nbsp &nbsp &nbsp Bailarinas </a>
						<dd> <a href="puntos.php" class="enla"> &nbsp &nbsp &nbsp Chanclas </a>
						<dd> <a href="puntos.php" class="enla"> &nbsp &nbsp &nbsp Bautizos </a>
						<dd> <a href="puntos.php" class="enla"> &nbsp &nbsp &nbsp Eventos </a>
						<dd> <a href="puntos.php" class="enla"> &nbsp &nbsp &nbsp Zapatillas </a>
				</dl>
				</br><hr color="#ccc"/></br>
					
				<dl>
					<dt><li> <a href="catalogo.php" class="enla"><b> Caballero: </b></a></li>
						<dd> <a href="catalogo.php" class="enla"> &nbsp &nbsp &nbsp Botas </a>
						<dd> <a href="catalogo.php" class="enla"> &nbsp &nbsp &nbsp Mocasines </a>
						<dd> <a href="catalogo.php" class="enla"> &nbsp &nbsp &nbsp Sandalias </a>
						<dd> <a href="catalogo.php" class="enla"> &nbsp &nbsp &nbsp Casuales </a>
						<dd> <a href="catalogo.php" class="enla"> &nbsp &nbsp &nbsp Formales </a>
						<dd> <a href="catalogo.php" class="enla"> &nbsp &nbsp &nbsp Tenis </a>
						<dd> <a href="catalogo.php" class="enla"> &nbsp &nbsp &nbsp Deportivos </a>
						<dd> <a href="catalogo.php" class="enla"> &nbsp &nbsp &nbsp Botines </a>
						<dd> <a href="catalogo.php" class="enla"> &nbsp &nbsp &nbsp Alpargatas </a>
				</dl>
				</br><hr color="#ccc"/></br>

				<li> <a href="#pie" class="enla"><span class="icon-bubbles4"></span><b> Contactenos </b> </a></li>
				</br>
			</p>

		</div>

		<section class="cuerpo">
			<div id="dama">
					
				<table align="center"  width="100%" >
					<td >
						<table bgcolor="white" width="100%" align="center" >
					<th colspan=3 > <font color="#47425d" size="6" > Catalogos </font> </th>
					<tr> 
						<td align="center" >
							</br></br>
							<a href="mantenimiento.html" target="_blank" title="" > 
								<image class="i" src="imagenes\cat1.jpg" width="250px" height="190px"/> 
							</a></br>  	

													
						</td>
							
						<td align="center">
							</br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\cat2.jpg" width="250px" height="190px"/>
							</a> 	
							
							
						</td>

						<td align="center">
							</br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\cat3.jpg" width="250px" height="190px"/>
							</a> 	
							
							
						</td>
					</tr>

					<tr> 
						<td align="left" >	
							<a href="mantenimiento.html">
							<font color="black" size="4px"></br>&nbsp &nbsp  Catalogo 2015 Invierno</font>
							</a>

						</td>
							
						<td align="left">	
							<a href="mantenimiento.html">
							<font color="black" size="4px"></br>&nbsp &nbsp  Catalogo 2016 Primavera</font>
							</a>
						
						</td>

						<td align="left">
	
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Catalogo 2016 Otoño</font>
							</a>
						</td>
					</tr>
						
					<tr> 
						<td align="center"></br></br>
							<a href=".html" target="_blank" title="" > 
								<image class="i" src="imagenes/cat4.jpg" width="250px" height="190px"/> 
							</a> </br> 
						</td>
							
						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\cat5.jpg" width="250px" height="190px"/>
							</a>
							 </br>
							 
						</td>

					</tr>

					<tr> 
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Catalogo 2017 Verano</font>
							</a>

							
						</td>
							
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Catalogo 2018 Primavera</font>
							</a>
							
							 
						</td>
					</tr>
						
				</table>	
					</td>
				</table>

			</div>
		</section>
	</section>
	
	<?PHP 
		pie();
	?>
	
	
</body>
</html>