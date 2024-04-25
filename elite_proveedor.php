<?php

    session_start();

    if(!isset($_SESSION['correo'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
                windows.location = "index_proveedor.php";
            </script>
        
        ';
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite</title>
</head>
<body>
    <h1>Bienvenido proveedor</h1>
    <a href="php/cerrar_sesion_proveedor.php">Cerrar Sesion</a>
    
</body>
</html>