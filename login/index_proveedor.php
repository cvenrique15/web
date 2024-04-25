<?php

    session_start();

    if(isset($_SESSION['correo'])){
        header("location: elite_proveedor.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedor</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/inicio.css">
</head>
<body>
    <header>
        <h1>Proveedores</h1>
    </header>
    <main>
        <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>Ya tienes una cuenta</h3>
                        <p>Inicia sesion</p>
                        <button id="btn__iniciar-sesion">iniciar sesion</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>Aun no tienes una cuenta</h3>
                        <p>Registrate para que puedas iniciar sesion</p>
                        <button id="btn__registrarse">Registrarse</button>
                    </div>
                </div>
                <div class="contenedor__login-register">
                    <form action="php/login_proveedor.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesion</h2>
                        <input type="text" placeholder="correo electronico" name="correo">
                        <input type="password" placeholder="contraseña" name="clave">

                        <button>entrar</button>
                    
                    
                    </form> 
                    <form action="php/registro_proveedor.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text"placeholder= "Nombre" name="nombre">
                        <input type="text"placeholder= "Apellido" name="apellido">
                        <input type="text"placeholder= "Telefono" name="telefono">
                        <input type="text"placeholder= "Correo Electronico" name="correo">
                        <input type="text"placeholder= "Material Genetico" name="id_material_genetico">
                        <input type="password" placeholder="Contraseña" name="clave">
                        <button>Registrarse</button>
                    </form>
            
        </div>
        <br></br>
            <div class="Inicio">
                <nav>
                    <a href="inicio.php" class="btn">Inicio</a>
                </nav>
            </div>
    </main>
    <script src="js/script.js"></script>
    
</body>
</html>