<?php

    session_start();

    $conexion = new mysqli("localhost", "root", "", "bd_sistema");

    $consulta = "SELECT nombre, apellido FROM clientes";

    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) {
 
        while ($fila = $resultado->fetch_assoc()) {
            echo "Nombre: " . $fila["nombre"] . " - Apellido: " . $fila["apellido"] . "<br>";
        }
    } else {
    echo "No se encontraron resultados.";
    }  


    if(!isset($_SESSION['correo'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
                windows.location = "index_cliente.php";
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
    <h1>Bienvenido Cliente</h1>
    <a href="php/cerrar_sesion_cliente.php">Cerrar Sesion</a>
    
</body>
</html>