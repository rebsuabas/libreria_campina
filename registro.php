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
                    <h2>Registro</h2>
                </div>
                <hr>
                <div id="menu">
                    <div id="nombre">
                        <label class="black">Nombre completo</label> 
                        <br />
                        <br />
                        <input type="text" name="nombre" value="Nombre" required>
                        <input type="text" name="apellidos" value="Apellidos" required>
                    </div>
                    <div id="usuario" class="espacio">
                        <label class="black">Usuario</label>
                        <br />
                        <br />
                        <input type="text" name="id_usuario" required>
                    </div>
                    <div id="contrasena" class="espacio">
                        <label class="black">Contraseña</label>
                        <br />
                        <br />
                        <input type="password" name="contrasena" required>
                    </div>
                    <div id="email" class="espacio">
                        <label class="black">Correo electrónico</label>
                        <br />
                        <br />
                        <input type="text" name="email" required>
                    </div>
                    <div id="fecha_nacimiento" class="espacio">
                        <label class="black">Fecha de nacimiento</label>
                        <br />
                        <br />
                        <input type="date" name="fecha_nacimiento" required>
                    </div>
                    <div id="direccion_envio" class="espacio">
                        <label class="black">Dirección de envío</label>
                        <div id="direccion" class="espacio2">
                            <label>Dirección</label> 
                            <br />
                            <input type="text" name="direccion" required>
                        </div>
                        <div id="ciudad" class="espacio2">
                            <label>Ciudad</label>
                            <br />
                            <input type="text" name="ciudad" required>
                        </div>
                        <div id="provincia" class="espacio2">
                            <label>Provincia</label>
                            <br />
                            <input type="text" name="provincia" required>
                        </div>
                        <div id="codigo_postal" class="espacio2">
                            <label>Código Postal</label>
                            <br />
                            <input type="text" name="codigo_postal" required>
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
                        <h4>Método de pago</h4>
                        <div id="tarjeta">
                            <input type="radio" name="metodo_pago" value="Tarjeta de crédito o débito"><label class="black">Tarjeta de crédito o débito</label>
                                <div id="numero_tarjeta" class="espacio2">
                                    <label>Número de la tarjeta</label>
                                    <br />
                                    <input type="text" name="numero_tarjeta">
                                </div>
                                <div id="fecha_caducidad" class="espacio2">
                                    <label>Fecha de caducidad</label>
                                    <br />
                                    <input type="date" name="fecha_caducidad">
                                </div>
                                <div id="cvv" class="espacio2">
                                    <label>CVV</label>
                                    <br />
                                    <input type="text" name="cvv">
                                </div>
                        </div>
                        <div id="paypal" class="espacio">
                            <input type="radio" name="metodo_pago" value="PayPal"><label class="black">PayPal</label>
                                <div id="email_paypal" class="espacio2">
                                    <label>Correo electrónico de cuenta PayPal</label>
                                    <br />
                                    <input type="email" name="email_paypal">
                                </div>
                                <div id="contrasena_paypal" class="espacio2">
                                    <label>Contraseña PayPal</label>
                                    <br />
                                    <input type="password" name="contrasena_paypal">
                                </div>
                        </div>
                    </div>
                    <div id="botones" class="espacio">
                        <input type="reset" name="limpiar" value="Limpiar">
                        <input type="submit" name="registrar" value="Registrar">
                        <input type="submit" name="volver" value="Volver">
                    </div>
                </div>
            </form>
        </div>



        <?php 
	
            require_once 'Usuario.php';
            
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $id_usuario = $_POST['id_usuario'];
            $contrasena = $_POST['contrasena'];
            $email = $_POST['email'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $direccion = $_POST['direccion'];
            $ciudad = $_POST['ciudad'];
            $provincia = $_POST['provincia'];
            $codigo_postal = $_POST['codigo_postal'];
            $genero = $_POST['genero'];
            $metodo_pago = $_POST['metodo_pago'];
            $numero_tarjeta = $_POST['numero_tarjeta'];
            $fecha_caducidad = $_POST['fecha_caducidad'];
            $cvv = $_POST['cvv'];
            $email_paypal = $_POST['email_paypal'];
            $contrasena_paypal = $_POST['contrasena_paypal'];

            if (isset($_POST['registrar'])) {
            
                $guardar=new Usuario($nombre, $apellidos, $id_usuario, $contrasena, $email, 
                $fecha_nacimiento, $direccion, $ciudad, $provincia, $codigo_postal, $genero, 
                $metodo_pago, $numero_tarjeta, $fecha_caducidad, $cvv, $email_paypal, $contrasena_paypal);
                
                $guardar->guardar();

            } elseif (isset($_POST['volver'])) {

                header('Location:./index.php');

            }

	    ?>

    </body>
</html>