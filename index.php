<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
    
        <form action="" method="post">
            <h2>Librería La Campiña</h2>
            <h3>BIENVENID@ A NUESTRA PÁGINA WEB</h3>
            <hr>
            <p>Si eres nuevo te invitamos a unirte a 
            <br />nosotros. Si ya formas parte de nuestra <br />
            comunidad, adelante.</p>
            <input type="submit" name="registro" value="Registro" />
            <input type="submit" name="inicio_sesion" value="Inicio Sesión" />
        </form>

        <?php
            
            include 'conexionBD.php';
            mysqli_select_db($conexion, $nombreBD);
            
            if (isset($_POST['registro'])) {     
                header('Location:./registro.php');
            }

            elseif (isset($_POST['inicio_sesion'])) {
                header('Location:./inicio_sesion.php');
            }

        ?>

    </body>
</html>