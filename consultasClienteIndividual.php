<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
    <script type="text/javascript" src="js/funciones.js"></script>
    <link rel="stylesheet" href="css/fonts/style.css"/>
	<?PHP
		session_start();
		if($_SESSION['rol']==''){
			header("Location: usuarios.php");
			die();
			}
		include("funciones.php");
		//encabezado();
		$titulo = 'Consultas_Clientes';
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

		
		#tabla{
			text-align: center;
		}

		#s2{
			background: white;
			width:70%;
		}
	</style>



</head>
<body onload="TiempoActividad()">
	
	
	<?PHP encabezado_empleado(); ?>
	</br></br>
	<section id="contenido">
	<div class="cuerpo">

			<?PHP
				if(isset($_POST['consultaCliente'])){
					$cedula = $_POST["cedula"];
					$sql1="Select* from cliente where cedula='$cedula'";
					$conectar = conectar();
					$result1 = pg_query($conectar,$sql1);
					$numrows5 = pg_numrows($result1);
						if  ($row1 = pg_fetch_array($result1)){
											$nombre = $row1["nombre"];
											$apellido1 = $row1["apellido1"];
											$apellido2 = $row1["apellido2"];
											$cedula = $row1["cedula"];
											$fecha_nac = $row1["fecha_nacimiento"];
											$genero = $row1["codigo_genero"];
											$direccion = $row1["direccion"];
											$tel = $row1["telefono"];
											$correo = $row1["email"];
											$usuario = $row1['usuario'];
											$contraseña = $row1['contraseña'];
											$obs = $row1["observaciones"];
											$foto = $row1["foto"];
											$fid = $row1["fidelizado"];
											if($fid=='t'){$fid='si';}
													else {$fid='no';}
										}
					if  ($numrows5!=0) 
					{		
							
							echo "<h1><P align='center'> LOS  DATOS DEL CLIENTE SON:</p></h1>";
							echo "<table width='50%' align='center'bgcolor='white' align='center' width='55%' height='auto' bordercolor='#F5ECCE'>";
					?>
						<tr><td colspan=2 align=center>
							<image src="image\<?PHP echo $foto; ?>" width=200px height=155px/>
						</td></tr>
					
					<?php					
							echo "<tr>";
								echo "<td>";
									echo "CEDULA";
								echo "</td>";
								echo "<td >";
									echo $cedula;
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>";
									echo "NOMBRE";
								echo "</td>";
								echo "<td >";
									echo $nombre;
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>";
									echo "PRIIMER APELLIDOS";
								echo "</td>";
								echo "<td >";
									echo $apellido1;
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td >";
									echo "SEGUNDO APELLIDO";
								echo "</td>";
								echo "<td >";
									echo $apellido2;
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td >";
									echo "E_MAIL";
								echo "</td>";
								echo "<td >";
									echo $correo;
								echo "</td>";
							echo "</tr>";
							//echo "<tr>";
								//echo "<td >";
									//echo "CONTRASEÑA";
								//echo "</td>";
								//echo "<td>";
									//echo $contraseña;
								//echo "</td>";
							//echo "</tr>";
							echo "<tr>";
								echo "<td >";
									echo "FECHA DE NACIMIENTO";
								echo "</td>";
								echo "<td >";
									echo $fecha_nac;
								echo "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td >";
							echo "FIDELIZADO";
							echo "</td>";
							echo "<td >";
							echo $fid ;
							echo "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td >";
							echo "GENERO";
							echo "</td>";
							echo "<td >";
							echo $genero;
							echo "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td >";
							echo "DIRECCION";
							echo "</td>";
							echo "<td >";
							echo $direccion;
							echo "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td >";
							echo "TELEFONO";
							echo "</td>";
							echo "<td >";
							echo $tel;
							echo "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td >";
							echo "USUARIO";
							echo "</td>";
							echo "<td >";
							echo $usuario;
							echo "</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<td >";
							echo "OBSERVACIONES";
							echo "</td>";
							echo "<td>";
							echo $obs;
							echo "</td>";
							echo "</tr>";
							echo "</table>";
							
					
										
				}}										
				echo "</BR>";
					echo "<P align=center><a href='consultasCliente.php'>REGRESAR</a></p>";
					echo "</BR></BR></BR>";		
				?>
			
	</div>
</section>	
	
	<?PHP 
		pie();
	?>
	
</body>
</html>