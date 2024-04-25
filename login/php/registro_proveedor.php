<?php

    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $id_material_genetico = $_POST['id_material_genetico'];
    $clave = $_POST["clave"];

    $query = "INSERT INTO proveedores(nombre, apellido, telefono, correo, id_material_genetico, clave) 
        VALUES('$nombre', '$apellido', '$telefono', '$correo', '$id_material_genetico', '$clave')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../index_proveedor.php";
        </script>
        ';
    }else{
        echo '
        <script>
        alert("Intentelo de nuevo usuario no almacenado");
        window.location = "../index_proveedor.php";
        </script>
        ';

    }

    mysqli_close($conexion);
?>