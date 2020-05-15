<?php 
    
    if (isset($_POST['cerrar_sesion'])) {
        header('Location:./index.php');
    } 
    
    /*include_once './clases/Usuario.php';
    include_once './clases/sesion.php';

    $sesionUsuario = new Sesion();
    $usuario = new Usuario();

    session_start();
    $id_usuario = $_SESSION['id_usuario'];*/

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="StyleSheet" href="./css/estilo_menu.css" type="text/css" />
    </head>
    <body>
        <div id="contenedor">
            <form method="POST" action="">
                <div id="cabecera">
                    <h2>Librería La Campiña</h2>
                    <h3>Bienvenid@ <?php $id_usuario ?></h3>
                </div>
                <hr>
                <div id="menu">
                    <div id="cerrar_sesion">
                        <input type="submit" name="cerrar_sesion" value="Cerrar Sesión">
                    </div>
                    <div id="imagenes">
                        <div id="libros_disponibles">
                            <a href="libros_disponibles.php"><img src="./img/libros_disponibles.png"/></a>
                        </div>
                        <div id="catalogo_libros">
                            <a href="catalogo_libros.php"><img src="./img/catalogo_libros.jpg"/></a>
                        </div>
                        <div id="catalogo_autores">
                            <a href="catalogo_autores.php"><img src="./img/maquina_escribir.png"/></a>
                        </div>
                        <div id="mi_perfil">
                            <a href="mi_perfil.php"><img src="./img/mi_perfil.jpg"/></a>
                        </div>
                    </div>
                    <div id="titulos">
                        <div id="libros_disponibles_titulo">
                            <a href="libros_disponibles.php"><label>LIBROS <br />DISPONIBLES</label></a>
                        </div>
                        <div id="catalogo_libros_titulo">
                            <a href="catalogo_libros.php"><label>CATÁLOGO <br />LIBROS</label></a>
                        </div>
                        <div id="catalogo_autores_titulo">
                            <a href="catalogo_autores.php"><label>CATÁLOGO <br />AUTORES</label></a>
                        </div>
                        <div id="mi_perfil_titulo">
                            <a href="mi_perfil.php"><label>MI PERFIL</label></a>
                        </div>
                    </div>
                    <div></div>
                </div>
            </form>
        </div>
    </body>
</html>