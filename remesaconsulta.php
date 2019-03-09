<!DOCTYPE html>
<html lang=es>
<head>
	<title>CONSULTA_REMESA</title>
</head>
<body>
	<?php
		include("funciones.php");
		encabezado();
	?>
	<?PHP 
			$conn=conectar(); 
		  
			$sql1="select codigo_remesa,fecha,cantidad_pares,cantidad_cajas,valor,cedula,direccion,modo_envio from remesa";
		
		$result = pg_query($conn,$sql1);
	?>
		<TABLE align=center border="15" bgcolor="B9FADA" width="70%" > 
			<TR><TD>&nbsp;código </TD>
			<TD>&nbsp;fecha&nbsp;</TD>
			<TD>&nbsp;cantidad pares </TD>
			<TD>&nbsp;cantidad cajas&nbsp;</TD>
			<TD>&nbsp;valor </TD>
			<TD>&nbsp;cedula&nbsp;</TD>
			<TD>&nbsp;direccion </TD>
			<TD>&nbsp;modo de envio&nbsp;</TD></TR> 
 
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
