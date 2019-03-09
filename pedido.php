<!DOCTYPE html>
<html lang="es">
<head>
	<script>
			function validarPedido()
			{
				var /*pedido, fecEnt,fecPed,valor,direccion,cantidad,*/referencia,cedula; 
				
				/*pedido = document.getElementById("cod_pedido").value;
				fecPed = document.getElementById("fecha_pedido").value;
				fecEnt = document.getElementById("fecha_entrega").value;
				valor = document.getElementById("valor_pedido").value;
				
				cantidad=document.getElementById("cantidad").value;
				
				direccion= document.getElementById("direccion").value;
				forFec=/[0-3]+[0-9]+\/+[0-1]+[0-9]+\/+[1-2]+[0-9]+[0-9]+[0-9]/;*/
				cedula = document.getElementById("cedula").value;
				referencia=document.getElementById("referencia").value;			
				
				if( /*pedido === "" || fecEnt === "" || fecPed === "" || valor ===  "" || direccion === "" ||cantidad===""*/cedula === "" || referencia==="")
				{
					alert("Por favor diligencie todos los campos!!!");
					return false;
				}
				/*else if(isNaN(pedido)){
						alert("Por favor ingrese el codigo numerico del pedido!!!"); 
						return false;}
							
				else if(!forFec.test(fecPed)){
						alert("Formato de fecha invalido, debe ser: dia/mes/año o fecha fuera de rango"); 
						return false;}
				else if(!forFec.test(fecEnt)){
						alert("Formato de fecha invalido, debe ser: dia/mes/año o fecha No valida");
						return false;}
				else if(isNaN(valor)){
						alert("El valor debe ser numerico"); 
						return false;}
				else if(valor<0){
						alert("el valor debe ser positivo");
						return false;}
				else if(isNaN(cantidad)){
						alert("cantidad debe ser numerica");
						return false;}
				else if(cantidad<0){
						alert("cantidad debe ser un valor positivo");
						return false;}
				/*else if(isNaN(referencia)){
						alert("la referencia debe ser numerica por favor");
						return false;}
				else if(isNaN(cedula)){
						alert("la cedula deben ser solo numeros"); 
						return false;}*/
				else return true;				
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
		$titulo = 'Registro_Pedido';
		cabecera($titulo);
		estilo();
		$c = conectar();
	?>

	<style type="text/css">
    	#contenido{
			display: block;
			width: 88%;
			height: 700px;
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
		$result= pg_query("select * from referencia_modelo" );
		$result2=pg_query("select * from cliente")
	?>
	</br></br>
	<section id="contenido">
	<form name="pedido" id="pedido" method="post" action="pedido.php" onsubmit="return validarPedido();">
	<div class="cuerpo">
		<table width="100%" align=center id="tabla2">
			<tr><th colspan="2"><h1> <center><font color="brown"><u>PEDIDO</u></font></center></h1></th></tr>
			<tr><td></br><input type="number" name="cod_pedido" id="cod_pedido" placeholder="Codigo Pedido"title="cod_pedido" required max="999999999999"></td>
				<td><br><input type="date" name="fecha_pedido" id="fecha_pedido" placeholder="Fecha de Pedido"title="fecha pedido"required ></td></tr>
			<tr><td><br><input type="date" name="fecha_entrega" id="fecha_entrega" placeholder="Fecha Entrega"title="fecha entrega"required></td>
				<td><br><input type="number" name="valor_pedido" id="valor_pedido" placeholder="Valor Pedido"title="valor pedido"required></td></tr>
			<tr><td><br><input type="number" name="cantidad" id="cantidad" placeholder="Cantidad"title="cantidad por unidades"required></td>
				<td><!--<br><input type="text" name="referencia" id="referencia" placeholder="referencia"title="referencia"required>-->
					Codigo Referencia&nbsp<select name="referencia" id="referencia">
						<option></option>
					<?php
							while($row = pg_fetch_array($result)) { 
							$codigo = $row["ref_modelo"] ;
							echo "<option value=".$codigo.">".$codigo."</option>"; 
						}
					?>
					</select>
					</td></tr>
			<tr><td><!--<br><input type="number" name="cedula" id="cedula" placeholder="cedula cliente"title="cedula cliente"required>-->
					Cedula Cliente&nbsp<select name="cedula" id="cedula">
						<option></option>
					<?php
						while($row=pg_fetch_array($result2)){
						$cod=$row["cedula"];
						echo "<option value=".$cod.">".$cod."</option>";
						}
					?>
					</select>
					</td>
				<td colspan="2"><br><input type="text" name="direccion" id="direccion"size="25" maxlength="100" placeholder="direccion pedido"title="direccion pedido"required></td></tr>
			<tr><td colspan="2" align="center"><br><a href="registrar.php"><input type="button" value="Volver"></a>&nbsp&nbsp&nbsp<input type="submit" name="pedido" id="pedido" value="Registrar Pedido">
			&nbsp <input type="reset" value="Borrar"></td></tr>
		</table>	
	</div>
	</form>
</section>
	
	<?php
		if(isset($_POST['pedido']))
		{
			$var= $_POST["cod_pedido"];
			$var2=$_POST["fecha_pedido"];
			$var3=$_POST["fecha_entrega"];
			$var4= $_POST["valor_pedido"];
			$var5=$_POST["cedula"];
			$var6=$_POST["direccion"];
			$var7=$_POST["cantidad"];
			$var8=$_POST["referencia"];
					
		$conexion= pg_connect("host=localhost user=postgres port=5432 dbname=laura_andrea password=123456");
		
		$sql="insert into pedido(codigo_pedido,fecha,cantidad_pares,fecha_entrega,valor,ref_modelo,cedula,direccion)
				values('$var','$var2','$var7','$var3','$var4','$var8','$var5','$var6')";
				
		$resultados=pg_query($conexion,$sql);
		
		echo '<p align=center><font color="blue" size="5">Operacion exitosa!!!</font></p>';
		}

		
		pie();
	?>
	
	
</body>
</html>