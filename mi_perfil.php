<?php 
	
    if (isset($_POST['cerrar_sesion'])) {
        header('Location:./index.php');
    } elseif (isset($_POST['editar'])) {
        header('Location:./editar_perfil.php');
    } elseif (isset($_POST['eliminar'])) {
        
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
                </div>
                <div id="contenido">
                    <div id="cerrar_sesion">
                        <input type="submit" name="cerrar_sesion" value="Cerrar Sesión">
                    </div>
                    <div id="titulo">
                        <h3>MI PERFIL</h3>
                    </div>
                    <div id="datos">
                        <div id="nombre" class="espacio">
                            <label class="negrita">Nombre: </label>
                            <label></label>
                        </div>
                        <div id="apellidos" class="espacio">
                            <label class="negrita">Apellidos: </label>
                            <label></label>
                        </div>
                        <div id="usuario" class="espacio">
                            <label class="negrita">Usuario: </label>
                            <label class="negrita"></label>
                        </div>
                        <div id="email" class="espacio">
                            <label class="negrita">Correo electrónico: </label>
                            <label></label>
                        </div>
                        <div id="fechaNacimiento" class="espacio">
                            <label class="negrita">Fecha de nacimiento: </label>
                            <label></label>
                        </div>
                        <div id="direccion_envio" class="espacio">
                            <label class="negrita">Dirección de envío</label>
                            <br />
                            <br />
                            <ul>
                                <li><b>Calle: </b><label></label></li>
                                <li><b>Ciudad: </b><label></label></li>
                                <li><b>Provincia: </b><label></label></li>
                                <li><b>Código postal: </b><label></label></li>
                            </ul>
                        </div>
                        <div id="genero" class="espacio">
                            <label class="negrita">Género: </label>
                            <label></label>
                        </div>
                        <div id="titulo">
                            <h3>DATOS DE PAGO</h3>
                        </div>
                        <div id="metodo_pago" class="espacio">
                            <label class="negrita">Método de pago: </label>
                            <label></label>
                        </div>
                        <div id="" class="espacio">
                            <label class="negrita"></label>
                            <label></label>
                        </div>
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