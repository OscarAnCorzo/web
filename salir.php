<?PHP 
		
		session_start();
		session_destroy();

		header('Location: usuarios.php');

?>