<!DOCTYPE html>
<html lang="es">
<head>
		<meta charset="utf-8" name="keywords" content="Zapatos, sandalias, moda, belleza, zapatillas, tacones, calzado"/>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
		<link rel="stylesheet" href="css/fonts/style.css"/>
		
		<?PHP 
			session_start();
			include("funciones.php");
			$titulo = " Acerca de Nosotros ";
			cabecera($titulo);
			estilo();
		?>

		<style type="text/css">
    	#contenido{
			display: block;
			width: 88%;
			height: 1250px;
			margin-top: 73px;
			padding-top: 6%;
			padding-right: 6%;
			padding-left: 6%; 
			background: white;

		}

		#tabla1{
			position: relative;
			display: inline-block;
			background: white;
			text-align: center;
			width: 96%;
			border-style: outset;
			border-width: 10px;
			border-color: #8d1042;
			padding: 2% 2% 2% 2%;
		}
		#tabla2{
			position: relative;
			display: inline-block;
			background: white;
			text-align: center;
			width: 96%;
			border-style: outset;
			border-width: 10px;
			border-color: #8d1042;
			padding: 2% 2% 2% 2%;
		}

    </style>

</head>
<body >
	
	<?PHP 
		encabezado();
	?>
	
	</br> </br>
	
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

		<div class="cuerpo">
	
			<table align="left" bgcolor="white" width="95%">
				<tr>
					<th colspan="2">
					<font color="#efb810" size="6" > NUESTRA VISIÓN </font></th></tr>
				<td width="50%">	
					<p align="justify">
						<font color="#610B21" size="4" face="Arial">
						En el año 2022 la marca de calzado Laura Andrea será reconocida en varias partes del país por sus hermosos modelos de alta calidad, el respeto entre sus clientes y demás colegas en el mercado.
						La fábrica habrá generado varios empleos para las personas que viven a los alrededores
						Expandir nuestros territorios sin olvidar la tierra de donde somos y llegar hasta las
						regiones mas apartadas, llevando de la mano un compromiso social para aquellas personas necesitadas.
									
						</font>
					</p>
				</td>
				<td><image src="imagenes\vision.jpg" width="70%" height="auto"/></td>
				</tr>	
			</table>	
			</br>
			</br></br></br>
				<!--<tr> <td colspan="4" align="center"></br><hr class="linea" width="95%" /> </br></td> </tr>-->
				</br></br></br>
			<table align=right bgcolor="white" width="95%" >
				<tr>	
					<th colspan="2">
						<font color="#efb810" size="6" ></br> NUESTRA MISIÓN </font></th></tr>
						</br>
						<td></br><image src="imagenes\mision.jpeg" width="70%" height="auto"/></td>
					<td width="50%"><p align="justify">
						</br><font color="#610B21" size="4" face="Arial">
										<b>Calidad.</b>
										En sandalias Laura Andrea nos mueve las ganas de generar un calzado de alta calidad, 
										Calzado Laura Andrea es una fábrica de calzado para dama, niña y hombre, donde la principal motivación es la elaboración de nuestro calzado con alta calidad en materiales y mano de obra.
										En esta empresa somos una gran familia entre todos los administrativos y empleados que trabajamos en ella cada día con eficiencia y nuestros estimados clientes que son los que evidencian el gran trabajo hecho por nuestra fábrica.
										</b>	
							
							</font>
						</p>
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



