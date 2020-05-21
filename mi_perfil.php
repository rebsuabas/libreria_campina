<?php 

    require_once './clases/Usuario.php';
    require_once './clases/sesion.php';

    session_start();

   if (isset($_POST['cerrar_sesion'])) {
        header('Location:./cerrar_sesion.php');
    } elseif (isset($_POST['editar'])) {
        header('Location:./editar_perfil.php');
    } elseif (isset($_POST['eliminar'])) {
        $datos= (new Usuario())->borrarUsuario($_SESSION['usuario']);
    } elseif (isset($_POST['volver'])) {
        header('Location:./menu_principal.php');
    } 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="StyleSheet" href="./css/estilo_datos.css" type="text/css" />
    </head>
    <body>
        <div id="contenedor">
            <form method="POST" action="">
                <div id="cabecera">
                    <h2>Librería La Campiña</h2>
                    <h3>Perfil de <?php echo $_SESSION['usuario']; ?></h3>
                </div>
                <div id="contenido">
                    <div id="cerrar_sesion">
                        <input type="submit" name="cerrar_sesion" value="Cerrar Sesión">
                    </div>
                    <div id="titulo">
                        <h3>MI PERFIL</h3>
                    </div>
                    <div id="datos">
                        
                        <?php
                        
                            $datos= (new Usuario())->datosUsuario($_SESSION['usuario']);
                        
                        ?>

                    </div>
                    <div id="botones2">
                        <input type="submit" name="editar" value="Editar perfil">
                        <input type="submit" name="eliminar" value="Eliminar perfil">
                        <input type="submit" name="volver" value="Volver">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>