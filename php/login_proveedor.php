<?php

    session_start();
    include 'conexion.php';

    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM proveedores where correo='$correo'
    and clave='$clave'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['correo'] = $correo;
        header("location: ../elite_proveedor.php");
        exit;
    }else{
        echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos");
            window.location = "../index_proveedor.php";
        </script>
        ';
        exit;
    }



?>