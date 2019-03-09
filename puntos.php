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
			height: 800px;
			margin-top: 73px;
			padding-top: 2%;
			padding-right: 6%;
			padding-left: 6%; 
			background: white;
			text-align: center;
		}
	</style>
</head>
<body >
	
	<?PHP 
		include("funciones.php");
		encabezado();
	?>
	</br></br>
	
	<div id="contenido">
		<h1> <center>UPS.... ¡¡pagina en diseño!!</center></h1>
		<p align="center">
		<image src="imagenes\const.gif" width="50%" height="auto">
		</image>
		</p>
	</div>
	
	
	<?PHP 
		pie();
	?>
	
	
</body>
</html>