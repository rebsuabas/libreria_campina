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
                    <div id="fecha_nacimiento" class="espacio">
                        <label class="black">Fecha de nacimiento</label>
                        <br />
                        <br />
                        <input type="date" name="fecha_nacimiento">
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
                        <div id="codigo_postal" class="espacio2">
                            <label>Código Postal</label>
                            <br />
                            <input type="text" name="codigo_postal">
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
                        <input type="submit" name="actualizar" value="Actualizar">
                        <input type="submit" name="volver" value="Volver">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>