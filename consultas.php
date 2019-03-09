<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
	<link rel="stylesheet" href="css/fonts/style.css"/>
	<script type="text/javascript" src="js/funciones.js"></script>

	<script>
		</script>	
   
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
		$titulo = 'Consultas';
		cabecera($titulo);
		estilo();

		
	?>

	<style type="text/css">
		
		#contenido{
			display: block;
			width: 88%;
			height: 500px;
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
			width: 65%;
			top: 6%;
			background: #F4F6F6;
			-webkit-box-shadow: 0px 3px 3px #ccc;
		}

		#tabla2 td{
			width: 33%
		}

		input[type="submit"]{
			padding: 6%;
			width: auto;
			border:none;
			color: white;
		}

		input[class="general"]{
			background: #5483E7;
			color: white;
		}


		input[class="avanzada"]{
			background: #54E85B;
			color: white;
		}

		input[class="general"]:hover{
			background: #789FF2;
			color: white;
		}


		input[class="avanzada"]:hover{
			background: #84F189;
			color: white;
		}

		
	</style>

</head>
<body onload="TiempoActividad()">
	
	<?PHP
		encabezado_admin();
	?>
	</br></br>

		<!--<form action="usuario_cliente.php" name="cliente" id="cliente" method="post">-->
	<section id="contenido">
		<div id=tabla1 >	
		<table align="center"  width="100%">
			<td>
				<table border=0 align="center" width="100%" id="tabla2">
					<th colspan="3">
						</br><font color="#efb810" size="7px"> Consultas </font></br></br></br>
					</th>
					
					<tr>
						<td ><a href="consultas_general.php" target=_blank><input class="general" type="submit" value="Consulta General Basica"></a></br></br></td>
						<td ><a href="consulta_especifica.php" target=_blank><input type="submit" value="Consulta Especifica Basica"></a></br></br></td>
						<td > <a href="consulta_avanzada.php" target=_blank><input class="avanzada" type="submit" value="Consulta Avanzada"></a> </br></br></td>
						
					</tr>
					
				</table>
			</td>
		</table>
		</div>
	
	</section>
        <?PHP 
			pie();
		?>
  </body>
  </html>