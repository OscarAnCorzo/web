<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="css/fonts/style.css"/>
	<script type="text/javascript" src="js/funciones.js"></script>
    <?PHP 
		
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
		$titulo = 'Crear Tabla';
		cabecera($titulo);
		estilo();
		
	?>

	<style type="text/css">
		
		#contenido{
			display: block;
			width: 88%;
			height: 1800px;
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
			text-align: center;
			width: 65%;
		}

		#tabla2 td{
			width: 25%
		}

		#campos{
			display: block;
			margin-left: 15%;
			width: 70%;
			margin-right: 15%;
			position: relative;
			background: #F4F6F6;
			-webkit-box-shadow: 0px 3px 3px #ccc;
			padding: 3%;
			box-sizing: border-box;
		}

		input[type="checkbox"]{
			width: 13%;
		}
		

	</style>
	</head>
<body onload="TiempoActividad()">


	<?PHP
		encabezado_admin(); 
	?>
	 
			</br>
		</br>

	<section id="contenido">
		
		<div id="tabla1">
		<form action="crear_tabla.php" method="post" ">
		<table align="center" bgcolor="white" width="100%" border=8px bordercolor=#47425d>
			<td>
				<table border=0 align="center" width="100%" cellspacing="7px">
					<th colspan="2">
						</br><font color="#efb810" size="6px"> Crear tabla </font></br></br>
					</th>
					
					<tr>
						<td ></br> </br>Nombre de la Tabla: &nbsp <input type="text" name="nom_tabla" id="nom_tabla" placeholder="Nombre de la Tabla" required>  </td>
						
						<td ></br> </br>Cantidad de campos: &nbsp <input type="number" name="cantidad" id="cantidad" placeholder="Cantidad de columnas" required>  </td>
						
					</tr>
						
					<tr>
						<td colspan="2"></br><input type="submit" value="Crear" name="crear" id="crear"></td>
					</tr>
					
				</table>
			</td>
		</table>
		</form>
		</div>

	</br></br></br>
		
	<div id='campos'>
			<?PHP
				if(isset($_POST['crear'])){
					$nombre = $_POST['nom_tabla'];
					$c = $_POST['cantidad'];
					$_SESSION['nombre_tabla'] = $_POST['nom_tabla'];
					$_SESSION['cantidad_campos'] = $_POST['cantidad'];

					echo "<form id='formulario' method='post' action='crear.php'>"; 	
					echo "<table id='tabla2'><th colspan='4' ><h1> ".$nombre." </h1></br></br></th>";
					echo "<tr>";
					echo "<td><b>Nombre</b></td><td><b>Tipo</b></td><td><b>llave primaria</b></td><td><b>No nulo</b></td>";
					echo "</tr>";

					for($i=0; $i<$c; $i++){
						echo "<tr>";
						echo "<td>" .$i. ") &nbsp <input class='texto' placeholder='Nombre del campo' type='text' name='nombre" . $i . "' required></td>  <td><select class='selector' name='tipo" . $i . "'><option></option><option value='character_varying'>character varying</option><option value='integer'>integer</option></select></td> <td><input type='checkbox' name='llave" . $i . "'></td> <td><input type='checkbox' name='nulo" . $i . "'></td> ";
						echo "</tr>";
					}

				
					echo "</table";
					echo "</form";
					
				}
			?>
		</div>
	</section>
		
       
  </body>
  </html>