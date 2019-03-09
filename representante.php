<!DOCTYPE html>
<html lang="es">
<head>
	<script>
			function validarRepresentante()
			{
				var cedula,nombre,apellido1,apellido2,direccion,telefono,email,inicio,observaciones,genero;
				
				cedula = document.getElementById("cedula").value;
				nombre = document.getElementById("nombre").value;
				apellido1 = document.getElementById("apellido1").value;
				apellido2 = document.getElementById("apellido2").value;
				direccion = document.getElementById("direccion").value;
				genero = document.getElementById("genero").value;
				telefono= document.getElementById("telefono").value;
				email= document.getElementById("e_mail").value;
				inicio= document.getElementById("fecha_inicio").value;
				observaciones= document.getElementById("observaciones").value;
				forFec=/[0-3]+[0-9]+\/+[0-1]+[0-9]+\/+[1-2]+[0-9]+[0-9]+[0-9]/;
				mail=/\w+@+\w+\.+\w/;
							
				
				if( cedula===""||nombre===""||apellido1===""||apellido2===""||direccion===""||telefono===""||email===""||inicio===""||observaciones===""||genero ==="")
				{
					alert("Por favor diligencie todos los campos!!!");
					return false;
				}
				else if(isNaN(cedula)){
						alert("Por favor ingrese un numero de cedula valido!!!"); 
						return false;}
				else if(isNaN(telefono)){
						alert("Por favor ingrese un numero valido de telefono!!!"); 
						return false;}			
				else if(!mail.test(email)){
						alert("Formato de correo no valido"); 
						return false;}
				/*else if(!forFec.test(inicio)){
						alert("Formato de fecha de inicio invalido, debe ser: dia/mes/año o fecha No valida");
						return false;}*/
				else return tru;				
			}
	</script>
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
		$titulo = 'Registro_Representante';
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
			margin-left: 12%;
			
			width: 70%;
		}


		#tabla2 td{
			width: 50%
		}


    </style>
</head>
<body onload="TiempoActividad()" >
	
	<?php
		encabezado_admin();
		conectar();
	?>
	</br></br>
	<section id="contenido">
	<form name="representante" id="representante" method="post" action="representante.php" onsubmit="return validarRepresentante();">
	<div class="cuerpo">
	<table align=center  width="100%" id="tabla2">
		<tr><th colspan="2"><h1> <center><font color="brown" size="6">REPRESENTANTE</font></center></h1></th></tr>
		<tr><td></br><input type="number" name="cedula" id="cedula"placeholder="Cedula"title="cedula"required max="9999999999999"></td>
			<td></br><input type="text" name="nombre" id="nombre"placeholder="Nombre"title="nombre"required maxlength="25"></td></tr>
		<tr><td></br><input type="text" name="apellido1" id="apellido1"placeholder="Primer Apellido"title="apellido1"required maxlength="12"></td>
			<td></br><input type="text" name="apellido2" id="apellido2"placeholder="Segundo Apellido"title="apellido2"required maxlength="12"></td></tr>
		<tr><td><!--/br><select name="genero"placeholder="genero"title="genero"required>
						<option value="o">otro</option>
						<option value="m">masculino</option>
						<option value="f">femenino</option></select-->
							<?php
							genero();
							?>
						</td>
			<td></br><input type="text" name="direccion" id="direccion"size="50"placeholder="Direccion"title="direccion"required></td></tr>
		<tr><td></br><input type="tel" name="telefono" id="telefono"placeholder="Telefono"title="telefono"required maxlength="12"></td>
			<td></br><input type="email" name="e_mail" id="e_mail"placeholder="E-mail"title="e_mail"required maxlength="35"></td></tr>
		<tr><td></br>Fecha de Inicio: &nbsp <input type="date" name="fecha_inicio" id="fecha_inicio"placeholder="Fecha de Inicio"title="fecha_inicio"required></td>
			<td></br><input type="texto" name="observaciones" id="observaciones" size="50" maxlength="100"placeholder="Observaciones"title="observaciones"required></td></tr>	
		<tr><td colspan="2"></br></br>
			<a href="registrar.php"><input type="button" value="Volver"></a>&nbsp<input type="submit" name="representante" id="representante" value="Registrar Representante">&nbsp <input type="reset" value="Borrar"></td></tr>
	</table></div>
	</form></section>
	
	
	<?php 
		if(isset($_POST['representante']))
			{	
				$var=$_POST["cedula"];		
				$var2=$_POST["nombre"];
				$var3=$_POST["apellido1"];
				$var4= $_POST["apellido2"];
				$var5=$_POST["genero"];
				$var6=$_POST["direccion"];
				$var7= $_POST["telefono"];
				$var8= $_POST["e_mail"];
				$var9= $_POST["fecha_inicio"];
				$var10= $_POST["observaciones"];				
			
			$con=pg_connect("host=localhost user=postgres port=5432 dbname=laura_andrea password=123456");
			
			$ins="insert into representante(cedula,nombre,apellido1,apellido2,email,observaciones,codigo_genero,direccion,fecha_inicio,telefono)
				values('$var','$var2','$var3','$var4','$var8','$var10','$var5','$var6','$var9','$var7')";
				
			$ver=pg_query($con,$ins);
			
			echo '<p align=center><font color="blue" size="5">Operacion exitosa!!!</font></p>';
			
			}

	
		pie();
	?>
	
</body>
</html>
	