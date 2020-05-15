<?php 
	
    if (isset($_POST['cerrar_sesion'])) {
        header('Location:./index.php');
    } elseif (isset($_POST['actualizar'])) {

    } elseif (isset($_POST['volver'])) {
        header('Location:./mi_perfil.php');
    } 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="StyleSheet" href="./css/estilo_registro.css" type="text/css" />
    </head>
    <body>
        <div id="contenedor">
            <form method="POST" action="">
                <div id="cabecera">
                    <h2>Librería La Campiña</h2>
                </div>
                <hr>
                <div id="menu">
                    <div id="cerrar_sesion">
                        <input type="submit" name="cerrar_sesion" value="Cerrar Sesión">
                    </div>
                    <div id="nombre">
                        <label class="black">Nombre completo</label> 
                        <br />
                        <br />
                        <input type="text" name="nombre" value="Nombre">
                        <input type="text" name="apellidos" value="Apellidos">
                    </div>
                    <div id="contrasena" class="espacio">
                        <label class="black">Contraseña</label>
                        <br />
                        <br />
                        <input type="password" name="contrasena">
                    </div>
                    <div id="email" class="espacio">
                        <label class="black">Correo electrónico</label>
                        <br />
                        <br />
                        <input type="text" name="email">
                    </div>
                    <div id="fechaNacimiento" class="espacio">
                        <label class="black">Fecha de nacimiento</label>
                        <br />
                        <br />
                        <input type="date" name="fechaNacimiento">
                    </div>
                    <div id="direccion_envio" class="espacio">
                        <label class="black">Dirección de envío</label>
                        <div id="direccion" class="espacio2">
                            <label>Dirección</label> 
                            <br />
                            <input type="text" name="direccion">
                        </div>
                        <div id="ciudad" class="espacio2">
                            <label>Ciudad</label>
                            <br />
                            <input type="text" name="ciudad">
                        </div>
                        <div id="provincia" class="espacio2">
                            <label>Provincia</label>
                            <br />
                            <input type="text" name="provincia">
                        </div>
                        <div id="codigoPostal" class="espacio2">
                            <label>Código Postal</label>
                            <br />
                            <input type="text" name="codigoPostal">
                        </div>
                    </div>
                    <div id="genero" class="espacio">
                        <label class="black">Género</label>
                        <br />
                        <br />
                        <input type="radio" name="genero" value="Hombre" /><label>Hombre</label><br />
                        <input type="radio" name="genero" value="Mujer" /><label>Mujer</label><br />
                        <input type="radio" name="genero" value="Otro"><label>Otro</label>
                    </div>
                    <div id="metodo_pago">
                        <h4>Datos de pago</h4>
                        <div id="tarjeta">
                            <div id="numeroTarjeta" class="espacio2">
                                <label>Número de la tarjeta</label>
                                <br />
                                <input type="text" name="numeroTarjeta">
                            </div>
                            <div id="fechaCaducidad" class="espacio2">
                                <label>Fecha de caducidad</label>
                                <br />
                                <input type="date" name="fechaCaducidad">
                            </div>
                            <div id="cvv" class="espacio2">
                                <label>CVV</label>
                                <br />
                                <input type="text" name="cvv">
                            </div>
                        </div>
                    </div>
                    <div id="botones" class="espacio">
                        <input type="submit" name="actualizar" value="Actualizar">
                        <input type="submit" name="volver" value="Volver">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>