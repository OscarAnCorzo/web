<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
    <?PHP 

		include("funciones.php");
		estilo();
		
		
	?>

    <title>Ingreso</title>

    <link rel="stylesheet" href="css/fonts/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
    
    <style type="text/css">
    	#contenido{
			display: block;
			width: 88%;
			height: 1300px;
			margin-top: 73px;
			padding-top: 6%;
			padding-right: 6%;
			padding-left: 6%; 
			background: white;
		}

		#formulario{
			background: white;
			width: 80%;
			display: inline-block;
			border-style: solid;
			border-width: 15px;
			border-color: #F5ECCE;
		}

		h1{
			font-family: 'Pinyon Script', cursive;
		}

		input{
			width: 70%;
		}

		#error{
			padding: 1%;
			color: red;
			border-radius: 3px;
			background: #F5B7B1;
		}

    </style>

    <script>
		function validarCliente()
			{ 

				var rol = document.getElementById("rol").value;
				var usuario = document.getElementById("usuario").value;
				var contraseña = document.getElementById("contraseña").value;
				
				var val=0;
				
				if( usuario === "" || contraseña === "" || rol == "rol")
				{
					alert("Uno o varios campos vacios. Por favor ingrese los datos");
					return false;
				}else return true;
										
			}
		
		
	</script>


</head>
<body>

	<?PHP 
		encabezado1();
		
	?>
	</br> 
	
	<section id="contenido">
		
		<div id="menu_lateral">
			
			<p>
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
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Zapatos de Salón </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Zapatos Bajos </a>
						<dd> <a href="modelos.php" class="enla"> &nbsp &nbsp &nbsp Zapatillas Depostivas </a>
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
						<dd> <a href="catalogo.php" class="enla"> &nbsp &nbsp &nbsp Zapatos Casuales </a>
						<dd> <a href="catalogo.php" class="enla"> &nbsp &nbsp &nbsp Zapatos Formales </a>
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
		<div id="formulario">
			<form name="usuario" action="procesar.php" method="post" onsubmit="return validarCliente();">

			</br><font color="#efb810" size="7px" > <h1 align="center">Login </h1></font></br>
		        
		        &nbsp <input name="usuario" type="text" placeholder="Usuario" /></br></br>
		        &nbsp <input name="contraseña" type="password" placeholder="Contraseña" /></br></br>
		        &nbsp <select name="rol" size=1  >
		                <option value="rol"> Seleccione su Rol: </option>
		                <option value="administrador"> Empleado-administrador </option>
		                <option value="cliente"> Cliente </option>
		            </select>

				</br></br><?PHP if(isset($_GET['error']) == 'si') echo '<span id="error">Ups!!, DATOS EQUIVOCADOS</span>'; ?> </br>
				</br><input name="submit" type="submit" value=" Ingresar " ></br></br>
		        
			</form>	
		</div>
		</div>
	</section>

        <?PHP 
			pie();
		?>
  </body>
  </html>