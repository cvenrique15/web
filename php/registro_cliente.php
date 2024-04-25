<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $clave = $_POST["clave"];

    $query = "INSERT INTO clientes(nombre, apellido, telefono, correo, clave) 
        VALUES('$nombre', '$apellido', '$telefono', '$correo', '$clave')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../index_cliente.php";
        </script>
        ';
    }else{
        echo '
        <script>
        alert("Intentelo de nuevo usuario no almacenado");
        window.location = "../index_cliente.php";
        </script>
        ';

    }

    mysqli_close($conexion);
?>