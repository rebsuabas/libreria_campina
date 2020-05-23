<?php 
	
    if (isset($_POST['cerrar_sesion'])) {
        header('Location:./cerrar_sesion.php');
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
                        <h3>CATÁLOGO AUTORES</h3>
                    </div>
                    <div id="lista_autores">
                    
                    <?php

                        include_once './clases/Autor.php';
                        $autor = new Autor();
                        $catalogo=$autor->catalogoAutores();

                        foreach ($catalogo as $key => $value) {
                            ?> 
                            <li>
                                <u><a href="./datos_autor.php?autor=<?php echo $value['id_autor'] ?>"><?php echo $value['nombre'] . ' (' . $value['anoNacimiento'] . ')'; ?></a></u>
                            </li>
                            
                            <br /><?php 
                        }


                    ?>

                    </div>
                    <div id="volver">
                        <input type="submit" name="volver" value="Volver">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>