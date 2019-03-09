<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0"/>
    <script type="text/javascript" src="js/funciones.js"></script>
    <link rel="stylesheet" href="css/fonts/style.css"/>

	
	
	<meta charset="utf-8" name="keywords" content="Zapatos, sandalias, moda, belleza, zapatillas, tacones, calzado"/> 
	<?PHP 
		include("funciones.php");
		estilo();
		$titulo = " Registrar ";
		cabecera($titulo);
		conectar();
		//$result= pg_query("select * from genero" );
	?>

	<script>
		function validarCliente()
			{ 

				var nombre = document.getElementById("nombre").value;
				var apellido1 = document.getElementById("apellido1").value;
				var apellido2 = document.getElementById("apellido2").value;
				var cedula = document.getElementById("cedula").value;
				var fechan = document.getElementById("fecha_n").value;
				var usuario = document.getElementById("usuario").value;
				var contraseña = document.getElementById("contraseña").value;
				var validar = document.getElementById("validar").value;
				var direccion = document.getElementById("direccion").value;
				var telefono = document.getElementById("telefono").value;

				var correo = document.getElementById("e-mail").value;
				var genero = document.getElementById("genero").value;
				
				
				var fidelizado = document.getElementById("fidelizado").value;
				var val=0;
				expresionC = /\w+@+\w+\.+[a-z]/;
				
				if(nombre === "" || apellido1 === "" || apellido2 === "" || cedula === "" || fechan === "" || telefono === "" || genero === "" || fidelizado === "" || correo === "" || usuario === "" || contraseña === ""|| validar === "")
				{
					alert("Uno o varios campos vacios. Por favor ingrese los datos");
					return false;
				}else <!-- VALIDACIONES PARA LOS CAMPOS QUE DEBEN SER NUMERICOS--> 
					if(isNaN(cedula)){
						alert("LA CEDULA NO DEBE CONTENER LETRAS");
						return false;
					}else 
						if(isNaN(telefono)){
							alert("EL TELEFONO NO DEBE CONTENER LETRAS");
							return false;
				}else 
					if(!expresionC.test(correo) ){
						alert("EL E-MAIL NO ES VALIDO");
						return false;
				}else 
					if(contraseña != validar)
					{
					alert("La contraseña no coincide, por favor verifique");
						return false;
				    }else 
				return true;
										
			}
		
		
	</script>

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

		#tabla1{
			position: relative;
			display: inline-block;
			background: red;
			text-align: center;
			width: 95%;
		}

		#tabla2 td{
			width: 33%
		}
		


    </style>

</head>
<body>
	
	
	<?PHP 
		encabezado1();
	?>
		</br></br>

	<section id="contenido">
		<div id="menu_lateral">
			
			<p>
				<center><font color="#efb810" size="6" > <b> Categorias</b> </font></center>
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

		<form action="registro_cliente-js.php" name="cliente" id="cliente" method="post" onsubmit="return validarCliente();" enctype="multipart/form-data">	
		<div class="cuerpo">	
		
		<table align=center width="100%" border="15" bgcolor="white" bordercolor="#F5ECCE">
			<th align="justify">	

				<table align="center" width="100%" BGCOLOR="white" border=0 id="tabla2">
					<tr>
					<th colspan="3" >
						<h1> <center><font color="#efb810" size="6px">BIENVENIDO</BR> POR FAVOR LLENE LOS DATOS REQUERIDOS.</font></center></h1></BR>
					</th></tr>
					<tr>
						<td></br>&nbsp <input type="text" name="nombre" id="nombre" size="20" title="NOMBRE" placeholder="Nombre" required></td>
						<td></br>&nbsp <input type="text" name="apellido1" id="apellido1" size="15" TITLE="PRIMER APELLIDO" placeholder="Primer Apellido" required></td> 
						<td></br>&nbsp <input type="text" name="apellido2" id="apellido2"size="15" TITLE="SEGUNDO APELLIDO" placeholder="Segundo Apellido" required></td></tr>
					<tr><td></br>&nbsp <input type="number" name="cedula" id="cedula" size="15" TITLE="CEDULA" placeholder="Cedula" required></td>
						<td></br>&nbsp Fecha de nacimiento:&nbsp </br> &nbsp <input type="date" name="fecha_nacimiento" id="fecha_n" required></td>
						<td> </BR>&nbsp <?PHP genero(); ?> </td></tr>
					<tr><td></br> &nbsp <input type="text" name="direccion" id="direccion"maxlength="100" size="30"  TITLE="DIRECCION" placeholder="Dirección" required></td>
						<td></br>&nbsp <input type="number" name="telefono" id="telefono" size="15" maxlength="12" title="TELEFONO" placeholder="Telefono" required></td>
						<td></br>&nbsp <input type="text" name="e-mail" id="e-mail" size="20"title="E-MAIL" placeholder="E-mail" required></td>
					</tr>
					<tr> <td> </br> &nbsp <input type="text" name="usuario" id="usuario" maxlength="12"title="USUARIO" placeholder="Nombre de Usuario" required></td>
						<td colspan="2"></br></br> &nbsp Imagen de Perfil: </br> &nbsp <input type="file" name="imagen" ></td>
					</tr>
					<tr>
						<td></br>&nbsp <input type="password" name="contraseña" maxlength="12" id="contraseña"title="contraseña" placeholder="Contraseña" required></td>
						<td colspan="2"></br> &nbsp <input type="password" name="validar" maxlength="12" id="validar"title="confirme contraseña" placeholder="Confirmar Contraseña" required></td>
					</tr>

					<tr> <td></br>
						<input type="hidden" name="puntos" id="puntos" value="0" ></td></tr>
					<tr>  
					<td></br>
						<input type="hidden" name="fidelizado" id="fidelizado" value="no" ></td></tr>
					<tr>   </tr>
					<tr>
							<td colspan=3 align="center">
								</br><input type="submit" value="Registrar"name='empleado' id="empleado">&nbsp&nbsp&nbsp <input type="reset" value="limpiar"></center></br></br></br></br>
							<?PHP
								if(isset($_POST['empleado']))
								{
									$nombre = $_POST["nombre"];
									$apellido1 = $_POST["apellido1"];
									$apellido2 = $_POST["apellido2"];
									$cedula = $_POST["cedula"];
									$fecha_nac = $_POST["fecha_nacimiento"];
									$genero = $_POST["genero"];
									$direccion = $_POST["direccion"];
									$tel = $_POST["telefono"];
									$correo = $_POST["e-mail"];
									$usuario = $_POST['usuario'];
									$contraseña = $_POST['contraseña'];
									$puntos = $_POST['puntos'];
									$fid = $_POST["fidelizado"];
									if(isset($_FILES['imagen']['name']) && isset($_FILES['imagen']['name']) && isset($_FILES['imagen']['name']) ){
									$ruta=$_FILES['imagen']['name'];
									$tipo=$_FILES['imagen']['type'];
									$tam=$_FILES['imagen']['size'];
										if($tam == 0){
											$c = conectar();
											$s = "insert into cliente(cedula, nombre, apellido1, apellido2, email, fecha_nacimiento, fidelizado, cod_genero, direccion, telefono, usuario, contraseña, foto, puntos)
																	values ('$cedula', '$nombre', '$apellido1', '$apellido2', '$correo', '$fecha_nac', '$fid', '$genero', '$direccion', '$tel', '$usuario', '$contraseña', 'clientes.jpg', '$puntos')";
											$r = pg_query($c, $s);
											echo "<script>alert('Cliente registrado con exito!!!');</script>";
										}else{
												if($tam<=1000000)		
													{
														if($tipo=="image/jpeg"||$tipo=="image/jpg"||$tipo=="image/png"||$tipo=="image/gif")
															{
															$destino=$_SERVER['DOCUMENT_ROOT'].'/proyectoweb/image/';
															move_uploaded_file($_FILES['imagen']['tmp_name'],$destino.$ruta);
															//echo '<image src="imagenes\enviar3.png" width="500" height="100" />' ;
																$c = conectar();
																$into = "into";
																$s = "insert into cliente(cedula, nombre, apellido1, apellido2, email, fecha_nacimiento, fidelizado, cod_genero, direccion, telefono, usuario, contraseña, foto, puntos)
																	values ('$cedula', '$nombre', '$apellido1', '$apellido2', '$correo', '$fecha_nac', '$fid', '$genero', '$direccion', '$tel', '$usuario', '$contraseña', '$ruta', '$puntos')";
																$r = pg_query($c, $s);
																echo "<script>alert('Cliente registrado con exito!!!');</script>";
															}else echo "<script>alert('Formato archivo no reconocido. Debe ser jpeg, jpg, png o gif !!!');</script>";
													}else echo "<script>alert('Tamaño de imagen excede el limite Debe elegir una de menor tamaño!!!');</script>";
											}
								}
									
								}
								
							
							?>
							
							</td>
					</tr>
				</table>
			</th>
		</table>
		</div>	
				
				</form>
	</section>
	
	<?PHP 
		pie();
	?>
	
</body>
</html>