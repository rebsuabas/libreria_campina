<?php 
    
    include_once './Usuario.php';
    
    if (isset($_POST['iniciar_sesion'])) {

    } elseif (isset($_POST['salir'])) {
        header('Location:./index.php');
    } 

    include_once 'Usuario.php';
    include_once 'sesion.php';

    $usuarioActual = new Sesion();
    $id_usuario = new Usuario();

    if (isset($_SESSION['id_usuario'])) {
        echo "Hay sesión";
    } elseif (isset($_POST['id_usuario']) && isset($_POST['contrasena'])) {
        echo "Validación de login";

        /*$userForm = $_POST['id_usuario'];
        $passForm = $_POST['contrasena'];

        if ($id_usuario->existeUsuario($userForm, $passForm)) {
            echo "Usuario validado";
        } else {
            echo "Incorrecto";
        }*/

    } else {
        echo "Login";
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
                <div id="cabecera">
                <h2>Inicio Sesión</h2>
                </div>
                <hr>
                <div id="menu">
                    <div id="usuario">
                        <label><b>Usuario</b></label> 
                        <br />
                        <br />
                        <input type="text" name="usuario">
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