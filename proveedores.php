<!DOCTYPE html>
<html lang="es">
<head>
	<script>
			function validarProveedor()
			{
				var cedula/*,nit,razonSocial,direccion,telefono,email,obser,fecCom*/; 
				
				/*nit = document.getElementById("nit").value;
				razonSocial = document.getElementById("razon_social").value;				
				direccion = document.getElementById("direccion").value;
				telefono = document.getElementById("telefono").value;
				email= document.getElementById("email").value;
				obser = document.getElementById("observaciones").value;
				fecCom= document.getElementById("fecha_primer_compra").value;
				forFec=/[0-3]+[0-9]+\/+[0-1]+[0-9]+\/+[1-2]+[0-9]+[0-9]+[0-9]/;
				mail=/\w+@+\w+\.+\w/;*/
				cedula = document.getElementById("cedula_representante").value;
							
				
				if( cedula === "" /*|| nit === "" || razonSocial === "" || direccion ===  "" || telefono === "" || email === "" || obser === "" || fecCom === ""*/)
				{
					alert("Por favor diligencie todos los campos!!!");
					return false;
				}
				/*else if(isNaN(nit)){
						alert("el nit debe contener numeros!!!"); 
						return false;}							
				else if(isNaN(cedula)){
						alert("La cedula deben ser numeros"); 
						return false;}
				else if(isNaN(telefono)){
						alert("El telefono debe estar compuesto por numeros");
						return false;}
				else if(!mail.test(email)){
						alert("El correo no esta definido de manera correcta"); 
						return false;}
				else if(!forFec.test(fecCom)){
						alert("El formato de fecha es: dd/mm/aaaa o fecha No valida");
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
		$titulo = 'Registro_Proveedor';
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
	$var=pg_query("select * from representante")
	?>
	</br></br>
	<section id="contenido">
	<form name="proveedores" id="proveedores" method="post" action="proveedores.php" onsubmit="return validarProveedor();">
	<div class="cuerpo">
	<table align=center width="100%" ID="tabla2">
		<tr><td colspan="2"><h1> <center><font color="brown">PROVEEDORES</font></center></h1></td></tr>
		<tr><td></br><input type="number" name="nit" id="nit"required placeholder="Nit"title="nit" max="9999999999999"></td>
			<td></br><input type="text" name="razon_social" id="razon_social"placeholder="Nombre o Razon Social" maxlength="25"title="nombre o razon social"required ></td></tr>
		<tr><td><!--</br><input type="number" name="cedula_representante" id="cedula_representante"placeholder="cecula representante"title="cedula representante"required>-->
				Cedula Representante&nbsp<select name="cedula" id="cedula">
				<option></option>
				<?php
				while($variable=pg_fetch_array($var)){
					$cod=$variable["cedula"];
					echo"<option value=".$cod.">".$cod."</option>";
				}
				?>
				</select>
			</td>
			<td></br><input type="text" name="direccion" id="direccion" placeholder="Direccion"title="direccion"required maxlength="100"size="50"></td></tr>
		<tr><td></br><input type="tel" name="telefono" id="telefono"placeholder="Telefono"title="telefono"required maxlength="12"></td>
			<td></br><input type="email" name="email" id="email" maxlength="35" placeholder="E-mail"title="email"required></td></tr>
		<tr><td></br><input type="date" name="fecha_primer_compra" id="fecha_primer_compra"placeholder="Fecha Primer Compra"title="fecha primer compra" required></td>
			<td></br> <input type="text" name="observaciones" id="observaciones" size="50" maxlength="100"placeholder="Observaciones"title="observaciones"required></td></tr>
		<tr><td colspan="2" align="center"></br><a href="registrar.php"><input type="button" value="Volver"></a>&nbsp<input type="submit" name="proveedores" id="proveedores" value="Registrar Proveedor">&nbsp <input type="reset" value="Borrar"></td></tr>
	</table>
	</div></form></section>
	
	<?php
		if(isset($_POST['proveedores']))
		{
			$var= $_POST["nit"];
			$var2=$_POST["razon_social"];
			$var3=$_POST["cedula"];
			$var4= $_POST["direccion"];
			$var5=$_POST["telefono"];
			$var6=$_POST["email"];
			$var7= $_POST["fecha_primer_compra"];
			$var8= $_POST["observaciones"];
							
		
		$conex=pg_connect("host=localhost user=postgres port=5432 dbname=laura_andrea password=123456");
		
		$sql="insert into proveedor(nit,razon_social,email,observaciones,fecha_primer_compra,cedula,direccion,telefono)
		values('$var','$var2','$var6','$var8','$var7','$var3','$var4','$var5')";
		
		$resul=pg_query($conex,$sql);
		
		echo '<p align=center><font color="blue" size="5">Operacion exitosa!!!</font></p>';
		
		}

	pie();
	?>
	
</body>
</html>