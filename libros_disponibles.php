<?php 
    
    

    if (isset($_POST['cerrar_sesion'])) {
    } elseif (isset($_POST['volver'])) {
        header('Location:./menu_principal.php');
    } 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="StyleSheet" href="./css/estilo_libros_autores.css" type="text/css" />
    </head>
    <body>
        <div id="contenedor">
            <form method="POST" action="">
                <div id="cabecera">
                    <h2>Librería La Campiña</h2>
                </div>
                <hr>
                <div id="contenido">
                    <div id="cerrar_sesion">
                        <input type="submit" name="cerrar_sesion" value="Cerrar Sesión">
                    </div>
                    <div id="titulo">
                        <h3>LIBROS DISPONIBLES</h3>
                    </div>
                    <div id="lista_libros">

                        <?php

                            include_once './clases/Libro.php';
                            $libro = new Libro();
                            $disponible=$libro->librosDisponibles();

                            foreach ($disponible as $key => $value) {
                                 ?> 
                                <li>
                                    <u><?php echo $value['titulo']; ?></u>
                                </li>
                                
                                <br /><?php 
                            }

                        
                        ?>

                    </div>
                    <div id="volver">
                        <br />
                        <input type="submit" name="volver" value="Volver">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>