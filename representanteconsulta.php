<!DOCTYPE html>
<html lang=es>
<head>
	<title>CONSULTA_REPRESENTANTE</title>
</head>
<body>
	<?php
		include("funciones.php");
		encabezado();
	?>
	<?PHP 
			$conn=conectar(); 
		  
			$sql1="select cedula,nombre,apellido1,apellido2,email,observaciones,codigo_genero,direccion,fecha_inicio,telefono from representante";
		
		$result = pg_query($conn,$sql1);
	?>
		<TABLE align=center border="15" bgcolor="B9FADA" width="70%" > 
			<TR><TD>&nbsp;CEDULA </TD>
			<TD>&nbsp;NOMBRE&nbsp;</TD>
			<TD>&nbsp;PRIMER APELLIDO </TD>
			<TD>&nbsp;SEGUNDO APELLIDO&nbsp;</TD>
			<TD>&nbsp;EMAIL </TD>
			<TD>&nbsp;OBSERVACIONES;</TD>
			<TD>&nbsp;GENERO </TD>
			<TD>&nbsp;DIRECCION&nbsp;</TD>
			<TD>&nbsp;FECHA INICIO </TD>
			<TD>&nbsp;TELEFONO&nbsp;</TD></TR> 
 
			<?PHP     
					while ($luis=pg_fetch_array($result)) 
						{ 
							$var1=$luis["0"];
							$var2=$luis["1"];
							$var3=$luis["2"];
							$var4=$luis["3"];
							$var5=$luis["4"];
							$var6=$luis["5"];
							$var7=$luis["6"];
							$var8=$luis["7"];
							$var9=$luis["8"];
							$var10=$luis["9"];
								echo "<tr>";
								echo "<td >";
								echo $var1;
								echo "</td>";
								echo "<td >";
								echo $var2;
								echo "</td>";
								echo "<td >";
								echo $var3;
								echo "</td>";
								echo "<td >";
								echo $var4;
								echo "</td>";
								echo "<td >";
								echo $var5;
								echo "</td>";
								echo "<td >";
								echo $var6;
								echo "</td>";
								echo "<td >";
								echo $var7;
								echo "</td>";
								echo "<td >";
								echo $var8;
								echo "</td>";
								echo "<td>";
								echo $var9;
								echo "</td>";
								echo "<td>";
								echo $var10;
								echo "</td>";
								echo "</tr>";
						}   
					pg_free_result($result); 
					pg_close($conn); 
			?> 
		</table>
		</br></br></br>
	<?php
	
		pie();
	?>
</body>
</html>
