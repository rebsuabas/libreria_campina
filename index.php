<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="StyleSheet" href="./css/estilo_index.css" type="text/css" />
    </head>
    <body>
        <div id="contenedor">
        <form action="" method="post">
            <div id="cabecera">
                <h2>Librería La Campiña</h2>
                <h3>BIENVENID@ A NUESTRA PÁGINA WEB</h3>
            </div>
            <hr>
            <div id="contenido">
                <p>Si eres nuevo te invitamos a unirte a 
                <br />nosotros. Si ya formas parte de nuestra <br />
                comunidad, adelante.</p>
            </div>
            <div id="botones">
                <input type="submit" name="registro" value="Registro" />
                <input type="submit" name="inicio_sesion" value="Inicio Sesión" />
            </div>
        </form>
        </div>
        <?php
            
            include 'conexion.php';
            
            if (isset($_POST['registro'])) {     
                header('Location:./registro.php');
            }

            elseif (isset($_POST['inicio_sesion'])) {
                header('Location:./inicio_sesion.php');
            }

        ?>

    </body>
</html>