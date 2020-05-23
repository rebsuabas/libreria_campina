<?php 
    
    require_once './clases/Autor.php';

    if (isset($_POST['cerrar_sesion'])) {
        header('Location:./cerrar_sesion.php');
    } elseif (isset($_POST['volver'])) {
        header('Location:./catalogo_autores.php');
    } 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="StyleSheet" href="./css/estilo_datos.css" type="text/css" />
    </head>
    <body>
        <div id="contenedor">
            <form action="" method="POST">
                <div id="cabecera">
                    <h2>Librería La Campiña</h2>
                </div>
                <hr>
                <div id="contenido">
                    <div id="cerrar_sesion">
                        <input type="submit" name="cerrar_sesion" value="Cerrar Sesión">
                    </div>
                    <div id="titulo">
                        <h3>DATOS DEL LIBRO</h3>
                    </div>
                    <div id="datos">
                        
                        <?php
                            
                            $datos= (new Autor())->datosAutor($_GET['autor']);
                        
                        ?>

                    </div>
                    <div id="botones">
                        <input type="submit" name="volver" value="Volver">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>