<?php 
    
    require_once './clases/Usuario.php';
    require_once './clases/Sesion.php';

    $sesion = new Sesion();
    $usuario = new Usuario();
    
    if (isset($_POST['salir'])) {
        header('Location:./index.php');
    } elseif (isset($_SESSION['usuario'])) {
        $usuario->setUsuario($sesion->getUsuarioActual());
        header('Location:./menu_principal.php');

    } elseif (isset($_POST['id_usuario']) && isset($_POST['contrasena'])) {

        $userForm=$_POST['id_usuario'];
        $passForm=$_POST['contrasena'];

        if ($usuario->existeUsuario($userForm, $passForm)) {
            $sesion->setUsuarioActual($userForm);
            $usuario->setUsuario($userForm);
            header('Location:./menu_principal.php');
        } else {
            $errorLogin = "Nombre de usuario y/o contraseña incorrecto.";
            header('Location:./inicio_sesion.php');
        }

    } 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="StyleSheet" href="./css/estilo_inicio_sesion.css" type="text/css" />
    </head>
    <body>
        <div id="contenedor">
            <form method="POST" action="">

            <?php
            
                if (isset($errorLogin)) {
                    echo $errorLogin;
                } 
            
            ?>

                <div id="cabecera">
                <h2>Inicio Sesión</h2>
                </div>
                <hr>
                <div id="menu">
                    <div id="usuario">
                        <label><b>Usuario</b></label> 
                        <br />
                        <br />
                        <input type="text" name="id_usuario">
                    </div>
                    <div id="contrasena">
                        <label><b>Contraseña</b></label>
                        <br />
                        <br />
                        <input type="password" name="contrasena">
                    </div>
                    <div id="recordar">
                        <input type="checkbox" name="recordar">
                        <label>Recordar<label>
                    </div>
                    <div id="botones">
                        <input type="submit" name="iniciar_sesion" value="Iniciar Sesión">
                        <input type="submit" name="salir" value="Salir">
                    </div>
                </div>
            </form>
        </div>

    </body>
</html>