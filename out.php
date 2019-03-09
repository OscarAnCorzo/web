<?php
session_start();
session_destroy();
echo '<script> alert("Su sesión expiró.") </script>';
echo '<script>location.href = "usuarios.php"</script>';
?>