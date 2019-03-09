
	<?PHP 
		
		session_start();

		include("funciones.php");
		
		$c = conectar();
		

		extract($_POST);
	
		if($rol == 'administrador'){

			$sql = "select * from empleado where cargo = 'administrador' and usuario = '".$usuario."' and contraseña = '".$contraseña."'; ";

		}else{
				if( $rol == 'empleado'){
					$sql = "select * from empleado where usuario = '". $usuario ."' and contraseña = '". $contraseña ."';";
					
				}else $sql = "select * from cliente where usuario = '". $usuario ."' and contraseña = '". $contraseña ."';";
			}

		$r = pg_query($c, $sql);
		$dato = pg_numrows($r);

		if($dato == 0){
			header('Location: usuarios.php?error=si');
		}else{

			$_SESSION['usuario'] = $usuario;
			$_SESSION['contraseña'] = $contraseña;
			$_SESSION['rol'] = $rol;

			$registro = pg_fetch_array($r);

			$_SESSION['nombre'] = $registro['nombre'];
			$_SESSION['cedula'] = $registro['cedula'];
			
			$_SESSION['apellido1'] = $registro['apellido1'];
			$_SESSION['apellido2'] = $registro['apellido2'];

			if($rol == 'administrador'){
				$_SESSION['cargo'] = $registro['cargo'];
				$_SESSION['ruta'] = 'usuario_administrador.php';
				header("Location: usuario_administrador.php"); exit();
			}else
				if($rol == 'empleado'){
					$_SESSION['ruta'] = 'usuario_empleado.php';
					header("Location: usuario_empleado.php"); exit();
				}else $_SESSION['ruta'] = 'usuario_cliente.php'; header("Location: usuario_cliente.php"); exit();


		}

		?>
