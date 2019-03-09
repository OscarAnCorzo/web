<!DOCTYPE html>
<html lang="es">
<head>
	

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
	<!--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/fonts/style.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	-->

	<?PHP 
		session_start();
		
		$titulo = " MAO'S SHOES ";
		include("funciones.php"); 
		cabecera($titulo);
		estilo();

	
	?>

	<link rel="stylesheet" href="css/fonts/style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" charset="utf-8">
	  $(window).load(function() {
	    $('.flexslider').flexslider({
	    	touch: true,
	    	pauseOnAction: false,
	    	pauseOnHover: false,
	    });
	  });
	</script>

	<style type="text/css">

		/* aqui comienza */
		@font-face {
		  font-family: 'flexslider-icon';
		  src: url('fonts/flexslider-icon.eot');
		  src: url('fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'), url('fonts/flexslider-icon.woff') 
		  format('woff'), url('fonts/flexslider-icon.ttf') format('truetype'), url('fonts/flexslider-icon.svg#flexslider-icon') format('svg');
		  font-weight: normal;
		  font-style: normal;
		}

		.imagen{
			width: 100%;

		}

		.flexslider{
			width: 98%;

			background: transparent;
			display:inline-block;
			position: relative;
		}

		.slides{
			overflow: hidden;
		}

		.slides img{
			width: 100%;
		}

		.slides,
		.flex-control-nav,
		.flex-direction-nav {
		  margin: 0;
		  padding: 0;
		  list-style: none;
		}

		.flex-control-nav{
			width: 100%;
			text-align: center;
			position: absolute;
			bottom: 5%;
			z-index: 999;
		}

		.flex-control-nav li{
			display: inline-block;
			margin: 0 6px;
		}

		.flex-control-nav li a{
			display: block;
			background: #777777;
			width: 12px;
			height: 12px;
			border-radius: 12px;
			text-indent: -9999px;
		}

		.flex-control-nav li a:hover{
			background: #2E2E2E;
		}

		.flex-control-nav li a.flex-active{
			background: #2E2E2E;	
		}

		.flex-direction-nav a{
			display: block;
			text-decoration: none;
			position: absolute;
			top: 50%;
			z-index: 999;
			width: 40px;
			height: 40px;
			overflow: hidden;
			opacity: 0;
			-webkit-transition: all 0.3s ease-in-out;
		  -moz-transition: all 0.3s ease-in-out;
		  -ms-transition: all 0.3s ease-in-out;
		  -o-transition: all 0.3s ease-in-out;
		  transition: all 0.3s ease-in-out;
		}

		.flex-direction-nav .flex-prev{
			left: 0;
		}

		.flex-direction-nav .flex-next{
			right: 0;
		}

		.flex-direction-nav a:before {
		  font-family: "flexslider-icon";
		  font-size: 40px;
		  display: inline-block;
		  content: '\f001';
		  color: #fff;
		  text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
		}
		.flex-direction-nav a.flex-next:before {
		  content: '\f002';
		}

		.flex-caption p{
			font-family: Lato;
			position: absolute;
			top: 50%;
			text-align: center;
			width: 100%;
			font-size: 185%;
			color: #fff;
			font-weight: bold;
		}

		.flexslider:hover .flex-direction-nav .flex-prev{
			opacity: 0.7;
			left: 10px;
		}

		.flexslider:hover .flex-direction-nav .flex-prev:hover{
			opacity: 1;
		}

		.flexslider:hover .flex-direction-nav .flex-next{
			opacity: 0.7;
			right: 10px;
		}

		.flexslider:hover .flex-direction-nav .flex-next:hover{
			opacity: 1;
		}
		
		/* aqui termina el slideshow */

		#contenido{
			display: block;
			width: 88%;
			height: 2200px;
			margin-top: 73px;
			padding-top: 2%;
			padding-right: 6%;
			padding-left: 6%; 
			background: white;
		}

		a{
			text-decoration: none;
		}

		

	</style>

</head>
<body>
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

		<section class="cuerpo">
			
			<div id="slider" class="flexslider">
				<ul class="slides">
					<li>
						<img class="imagen" src="imagenes/slide2.jpg" alt="">
						<section class="flex-caption">
							<p style="top:15%; width:50%; left: 25%;  ">
								<img src="imagenes/primera.png" width="100%" height="100%" style="z-index: 1;"></></br>
							</p>
							
						</section>
					</li>
					<li>
						<img class="imagen" src="imagenes/slide1.jpeg" alt="">
						<section class="flex-caption">
							<p style="top:40%; width:50%; left: 25%; background: black; filter:alpha(opacity=60);-moz-opacity:.60;opacity:.60; border-style:solid; border-radius: 5%; padding-top: 2%; padding-bottom: 2%;"> 
								Calidad  </br> & </br> Experiencia 
							</p>
						</section>
					</li>
					<li>
						<img class="imagen" src="imagenes/slide4.jpg" alt="">
						<section class="flex-caption">
							<p style="top:40%; left: 23%; width:50%; background: black; filter:alpha(opacity=60);-moz-opacity:.60;opacity:.60; border-style:solid; border-radius: 5%; padding-top: 2%; padding-bottom: 2%; " >
								Elegancia </br> & </br> Actualidad
							</p>
						</section>
					</li>
					
					<li>
						<img class="imagen" src="imagenes/slide.jpg" alt="">
						<section class="flex-caption">
							<p style="top:40%; left: 23%; width:50%; background: black; filter:alpha(opacity=60);-moz-opacity:.60;opacity:.60; border-style:solid; border-radius: 5%; padding-top: 2%; padding-bottom: 2%; " >
								Asequibilidad </br> & </br> Variedad
							</p>
						</section>
					</li>
				</ul>
			</div>
			
			
			<div id="ofertas">
					
				<table align="center"  width="100%" >
					<td >
						<table bgcolor="white" width="100%" align="center" >
					<th colspan=3> <font color="#efb810" size="6" > OFERTAS DEL MES!!!</font> </th>
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
								<image class="i" src="imagenes\n2.jpg" width="250px" height="190px"/>
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
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$265.000</strike></font><font color="black"> &nbsp &nbsp <b>$185.000</b></font>
													
						</td>
							
						<td align="left">	
							<a href="mantenimiento.html">
							<font color="black" size="4px"></br>&nbsp &nbsp  Cruzada Plateada</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$115.000</strike></font><font color="black"> &nbsp &nbsp <b>$85.000</b></font>
							
						</td>

						<td align="left">
	
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatillas Naranjas</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$234.000</strike></font><font color="black"> &nbsp &nbsp <b>$193.000</b></font>
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
								<image class="i"  src="imagenes\oferta5.jpg" width="250px" height="190px"/>
							</a>
							 </br>
							 
						</td>

						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i"  src="imagenes\n6.jpg" width="250px" height="190px"/>
							</a> 	
							
						</td>
					</tr>

					<tr> 
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Elegantes de Punta</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$285.000</strike></font><font color="black"> &nbsp &nbsp <b>$250.000</b></font>
							
						</td>
							
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatillas Rosas</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$225.000</strike></font><font color="black"> &nbsp &nbsp <b>$208.000</b></font>
							 
						</td>

						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Canoa</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$97.000</strike></font><font color="black"> &nbsp &nbsp <b>$85.000</b></font>
						</td>
					</tr>

					<tr> 
						<td align="center"></br></br>
							<a href=".html" target="_blank" title="" > 
								<image class="i"  src="imagenes/oferta7.jpg" width="250px" height="190px"/> 
							</a> 
							
						</td>
							
						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i"  src="imagenes\c8.jpg" width="250px" height="190px"/>
							</a>
							
						</td>

						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i"  src="imagenes\oferta9.jpg" width="250px" height="190px"/>
							</a> 	
							
						</td>
					</tr>

					<tr> 
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zueca Rosa</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$165.000</strike></font><font color="black"> &nbsp &nbsp <b>$142.000</b></font>
							
						</td>
							
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp Formal Charol</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$203.000</strike></font><font color="black"> &nbsp &nbsp <b>$197.000</b></font>
							 
						</td>

						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatillas Plateadas</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$255.000</strike></font><font color="black"> &nbsp &nbsp <b>$236.000</b></font>
						</td>
					</tr>

					<tr> 
						<td align="center"></br></br>
							<a href=".html" target="_blank" title="" > 
								<image class="i"  src="imagenes/c9.jpg" width="250px" height="190px"/> 
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
								<font color="black" size="4px"></br>&nbsp &nbsp  Azules Casuales</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$190.000</strike></font><font color="black"> &nbsp &nbsp <b>$170.000</b></font>
							
						</td>
							
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatillas Rojas</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$265.000</strike></font><font color="black"> &nbsp &nbsp <b>$225.000</b></font>
							 
						</td>

						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatilla Negra</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$265.000</strike></font><font color="black"> &nbsp &nbsp <b>$220.000</b></font>
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
								<image class="i" src="imagenes\c5.jpg" width="250px" height="190px"/>
							</a>
							
						</td>

						<td align="center"></br></br>
							<a href="mantenimiento.html" target="_blank" title=""> 
								<image class="i" src="imagenes\c3.jpg" width="250px" height="190px"/>
							</a> 	
							
						</td>
					</tr>

					<tr> 
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Zapatillas Rojiblancas</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$265.000</strike></font><font color="black"> &nbsp &nbsp <b>$233.000</b></font>
							
						</td>
							
						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp  Botas</font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$238.000</strike></font><font color="black"> &nbsp &nbsp <b>$215.000</b></font>
							 
						</td>

						<td align="left">
							
							<a href="mantenimiento.html">
								<font color="black" size="4px"></br>&nbsp &nbsp Tenis Azul </font>
							</a>
							<font color="#AAB7B8"></br>&nbsp &nbsp &nbsp <strike>$180.000</strike></font><font color="black"> &nbsp &nbsp <b>$150.000</b></font>
						</td>
					</tr>
						
				</table>	
					</td>
				</table>

			</div>

			</br> </br>
		
		</section>

	</section>
	
	
	
	<?PHP 
		pie();
	?>

</body>
</html>


