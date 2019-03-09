<!DOCTYPE html>
<html lang="es">
<head>
		
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
	<link rel="stylesheet" href="css/fonts/style.css"/>

	<?PHP 
		session_start();
		include("funciones.php");
		$titulo = 'Modelos';
		cabecera($titulo);
		estilo();
	?>

	<style type="text/css">
		#contenido{
			display: block;
			width: 88%;
			height: 3300px;
			margin-top: 73px;
			padding-top: 2%;
			padding-right: 6%;
			padding-left: 6%; 
			background: white;
		}

		#niña{
			border: 3px solid #ccc;
		}

		#dama{
			border: 3px solid #47425d;
		}

		#caballero{
			border: 3px solid #8d1042;
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
					<th colspan=3 > <font color="#efb810" size="6" > Dama </font> </th>
					<tr> 
						<td align="center" >
							</br></br>
							<a href="mantenimiento.html" target="_blank" title="" > 
								<image class="i" src="imagenes\oferta1.jpg" width="250px" height="190px"/> 
							</a></br>  	

													
						</td>
							
						<td align="center">
							</br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\oferta2.jpg" width="250px" height="190px"/>
							</a> 	
							
							
						</td>

						<td align="center">
							</br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\oferta3.jpeg" width="250px" height="190px"/>
							</a> 	
							
							
						</td>
					</tr>

					<tr> 
						<td align="left" >	
							<a href="mantenimiento.html">
							<font color="black" size="4px"></br>&nbsp &nbsp  Zapatillas Azules</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$265.000</b></font>
													
						</td>
							
						<td align="left">	
							<a href="mantenimiento.html">
							<font color="black" size="4px"></br>&nbsp &nbsp  Flores Blancas</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$195.000</b></font>
							
						</td>

						<td align="left">
	
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatillas Naranjas</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$235.000</b></font>
						</td>
					</tr>
						
					<tr> 
						<td align="center"></br></br>
							<a href=".html" target="_blank" title="" > 
								<image class="i" src="imagenes/oferta4.jpeg" width="250px" height="190px"/> 
							</a> </br> 
						</td>
							
						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\oferta5.jpg" width="250px" height="190px"/>
							</a>
							 </br>
							 
						</td>

						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\oferta6.jpg" width="250px" height="190px"/>
							</a> 	
							
						</td>
					</tr>

					<tr> 
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Botas Azules</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$250.000</b></font>
							
						</td>
							
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatillas Rosas</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$228.000</b></font>
							 
						</td>

						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Babucha Roja</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$185.000</b></font>
						</td>
					</tr>

					<tr> 
						<td align="center"></br></br>
							<a href=".html" target="_blank" title="" > 
								<image class="i" src="imagenes/oferta7.jpg" width="250px" height="190px"/> 
							</a> 
							
						</td>
							
						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\oferta8.jpg" width="250px" height="190px"/>
							</a>
							
						</td>

						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\oferta9.jpg" width="250px" height="190px"/>
							</a> 	
							
						</td>
					</tr>

					<tr> 
						<td align="left">
							
							<a href="mantenimiento.html">
								<font class="i" color="black" size="4px"></br>&nbsp &nbsp  Zueca Rosa</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$165.000</b></font>
							
						</td>
							
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatillas Doradas</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$265.000</b></font>
						</td>

						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatillas Plateadas</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>255.000</b></font>
						</td>
					</tr>

					<tr> 
						<td align="center"></br></br>
							<a href=".html" target="_blank" title="" > 
								<image class="i" src="imagenes/oferta10.jpg" width="250px" height="190px"/> 
							</a> 
							
						</td>
							
						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\oferta11.jpg" width="250px" height="190px"/>
							</a>
							
						</td>

						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\oferta12.jpg" width="250px" height="190px"/>
							</a> 	
							
						</td>
					</tr>

					<tr> 
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatillas Rojiblancas</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$265.000</b></font>
							
						</td>
							
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatillas Rojas</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$265.000</b></font>
							 
						</td>

						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatilla Negra</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$265.000</b></font>
						</td>
					</tr>
						
				</table>	
					</td>
				</table>

			</div>
		
			<div id="niña">
					
				<table align="center"  width="100%" >
					<td >
						<table bgcolor="white" width="100%" align="center" >
					<th colspan=3 > <font color="#efb810" size="6" > Niña </font> </th>
					<tr> 
						<td align="center" >
							</br></br>
							<a href="mantenimiento.html" target="_blank" title="" > 
								<image class="i" src="imagenes\n1.png" width="250px" height="190px"/> 
							</a></br>  	

													
						</td>
							
						<td align="center">
							</br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\n2.jpg" width="250px" height="190px"/>
							</a> 	
							
							
						</td>

						<td align="center">
							</br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\n3.png" width="250px" height="190px"/>
							</a> 	
							
							
						</td>
					</tr>

					<tr> 
						<td align="left" >	
							<a href="mantenimiento.html">
							<font color="black" size="4px"></br>&nbsp &nbsp  Trensa Plata</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$102.000</b></font>
						</td>
							
						<td align="left">	
							<a href="mantenimiento.html">
							<font color="black" size="4px"></br>&nbsp &nbsp  Cruzada Plateada</font>
							</a>
							</font><font color="black"> &nbsp &nbsp <b>$115.000</b></font>
							
						</td>

						<td align="left">
	
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Tiras en X</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$105.000</b></font>
						</td>
					</tr>
						
					<tr> 
						<td align="center"></br></br>
							<a href=".html" target="_blank" title="" > 
								<image class="i" src="imagenes/n4.jpg" width="250px" height="190px"/> 
							</a> </br> 
						</td>
							
						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\n5.jpg" width="250px" height="190px"/>
							</a>
							 </br>
							 
						</td>

						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\n6.jpg" width="250px" height="190px"/>
							</a> 	
							
						</td>
					</tr>

					<tr> 
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Corte Rosa</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$95.000</b></font>
						</td>
							
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Baletas</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$120.000</b></font>
							 
						</td>

						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Canoa</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$97.000</b></font>
						</td>
					</tr>

					<tr> 
						<td align="center"></br></br>
							<a href=".html" target="_blank" title="" > 
								<image class="i" src="imagenes/n7.jpg" width="250px" height="190px"/> 
							</a> 
							
						</td>
							
						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\n8.jpg" width="250px" height="190px"/>
							</a>
							
						</td>

					</tr>

					<tr> 
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Baleta Roja</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$122.000</b></font>
							
						</td>
							
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Tiras Fucsias</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$88.000</b></font>
							 
						</td>

					</tr>
						
				</table>	
					</td>
				</table>

			</div>

			<div id="caballero">
					
				<table align="center"  width="100%" >
					<td >
						<table bgcolor="white" width="100%" align="center" >
					<th colspan=3> <font color="#efb810" size="6" > Caballero </font> </th>
					<tr> 
						<td align="center" >
							</br></br>
							<a href="mantenimiento.html" target="_blank" title="" > 
								<image class="i" src="imagenes\c1.jpg" width="250px" height="190px"/> 
							</a></br>  	

													
						</td>
							
						<td align="center">
							</br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\c2.jpg" width="250px" height="190px"/>
							</a> 	
							
							
						</td>

						<td align="center">
							</br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\c3.jpg" width="250px" height="190px"/>
							</a> 	
							
							
						</td>
					</tr>

					<tr> 
						<td align="left" >	
							<a href="mantenimiento.html">
							<font color="black" size="4px"></br>&nbsp &nbsp  Blanco Charol</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$201.000</b></font>
						</td>
							
						<td align="left">	
							<a href="mantenimiento.html">
							<font color="black" size="4px"></br>&nbsp &nbsp  Apargata Azul</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$134.000</b></font>
							
						</td>

						<td align="left">
	
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Tenis Azul</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$180.000</b></font>
						</td>
					</tr>
						
					<tr> 
						<td align="center"></br></br>
							<a href=".html" target="_blank" title="" > 
								<image class="i" src="imagenes/c4.jpg" width="250px" height="190px"/> 
							</a> </br> 
						</td>
							
						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\c5.jpg" width="250px" height="190px"/>
							</a>
							 </br>
							 
						</td>

						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\c6.jpg" width="250px" height="190px"/>
							</a> 	
							
						</td>
					</tr>

					<tr> 
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Elegantes de Punta</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$285.000</b></font>
							
						</td>
							
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Bota</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$238.000</b></font>
						</td>

						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Deportivo</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$182.000</b></font>
						</td>
					</tr>

					<tr> 
						<td align="center"></br></br>
							<a href=".html" target="_blank" title="" > 
								<image class="i" src="imagenes/c7.jpg" width="250px" height="190px"/> 
							</a> 
							
						</td>
							
						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\c8.jpg" width="250px" height="190px"/>
							</a>
							
						</td>

						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\c9.jpg" width="250px" height="190px"/>
							</a> 	
							
						</td>
					</tr>

					<tr> 
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Babuchas</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$196.000</b></font>
							
						</td>
							
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Formal Charol</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$203.000</b></font>
							 
						</td>

						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Azules Casuales</font>
							</a>
							<font color="black"> &nbsp &nbsp <b>$190.000</b></font>
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