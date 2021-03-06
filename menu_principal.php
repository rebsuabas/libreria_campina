<?php

    require_once './clases/Usuario.php';
    require_once './clases/Sesion.php';
    require_once './clases/Fecha.php';
    require_once './clases/Creadora.php';
    
    $creadora = Creadora::getUsuarioPorDefecto();

    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="StyleSheet" href="./css/estilo_menu.css" type="text/css" />
    </head>
    <body>
        <div id="contenedor">
            <form method="POST" action="./cerrar_sesion.php">
                <div id="cabecera">
                    <h2>Librería La Campiña</h2>
                    <h3>Bienvenid@ <?php echo $_SESSION['usuario']; ?></h3>
                </div>
                <hr>
                <div id="menu">
                    <?php echo Fecha::getFechaHora();?>
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
                        <div id="pie">
                            <label><?php echo $creadora->pie(); ?></label>
                        </div>
                    </div>
                    <div></div>
                </div>
            </form>
        </div>
    </body>
</html>