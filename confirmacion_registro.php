<?php 
	
    if (isset($_POST['inicio_sesion'])) {
        header('Location:./menu_principal.php');
    } elseif (isset($_POST['salir'])) {
        header('Location:./index.php');
    } 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="StyleSheet" href="./css/estilo_confirmacion.css" type="text/css" />
    </head>
    <body>
        <div id="contenedor">
            <form method="POST" action="">
                <div id="cabecera">
                    <h2>Librería La Campiña</h2>
                    <h3>BIENVENID@ A NUESTRA PÁGINA WEB</h3>
                </div>
                <hr>
                <div id="texto">
                    <p>Ya has sido registrad@, ¡Bienvenid@ a nuestra comunidad!</p>
                </div>
                <div id="pregunta">
                <p>¿Qué desea hacer a continuación?</p>
                </div>
                <div id="botones_reg">
                    <input type="submit" name="inicio_sesion" value="Inicio sesión" class="botones">
                    <input type="submit" name="salir" value="Salir"class="botones">
                </div>
            </form>
        </div>
    </body>
</html>