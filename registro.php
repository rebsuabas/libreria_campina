<?php
    
    require_once './clases/Usuario.php';

    if(isset($_POST['volver'])) {
        header('Location:./index.php');
    }
    
    $id_usuario = (isset($_POST['id_usuario']) ?htmlspecialchars($_POST['id_usuario']):'');
    $nombre=(isset($_POST['nombre']) ?htmlspecialchars($_POST['nombre']):'');
    $apellidos = (isset($_POST['apellidos']) ?htmlspecialchars($_POST['apellidos']):'');
    $contrasena = (isset($_POST['contrasena']) ?htmlspecialchars($_POST['contrasena']):'');
    $email = (isset($_POST['email']) ?htmlspecialchars($_POST['email']):'');
    $fechaNacimiento = (isset($_POST['fechaNacimiento']) ?htmlspecialchars($_POST['fechaNacimiento']):'');
    $direccion = (isset($_POST['direccion']) ?htmlspecialchars($_POST['direccion']):'');
    $ciudad = (isset($_POST['ciudad']) ?htmlspecialchars($_POST['ciudad']):'');
    $provincia = (isset($_POST['provincia']) ?htmlspecialchars($_POST['provincia']):'');
    $codigoPostal = (isset($_POST['codigoPostal']) ?htmlspecialchars($_POST['codigoPostal']):'');
    $genero = (isset($_POST['genero']) ?htmlspecialchars($_POST['genero']):'');
    $numeroTarjeta = (isset($_POST['numeroTarjeta']) ?htmlspecialchars($_POST['numeroTarjeta']):'');
    $fechaCaducidad = (isset($_POST['fechaCaducidad']) ?htmlspecialchars($_POST['fechaCaducidad']):'');
    $cvv = (isset($_POST['cvv']) ?htmlspecialchars($_POST['cvv']):'');

    $registrar=new Usuario();
        
    if (isset($_POST['id_usuario'])) {
        $registrar->setIdUsuario($_POST['id_usuario']);
        $registrar->setNombre($_POST['nombre']);
        $registrar->setApellidos($_POST['apellidos']);
        $registrar->setContrasena($_POST['contrasena']);
        $registrar->setEmail($_POST['email']);
        $registrar->setFechaNacimiento($_POST['fechaNacimiento']);
        $registrar->setDireccion($_POST['direccion']);
        $registrar->setCiudad($_POST['ciudad']);
        $registrar->setProvincia($_POST['provincia']);
        $registrar->setCodigoPostal($_POST['codigoPostal']);
        $registrar->setGenero($_POST['genero']);
        $registrar->setNumeroTarjeta($_POST['numeroTarjeta']);
        $registrar->setFechaCaducidad($_POST['fechaCaducidad']);
        $registrar->setCVV($_POST['cvv']);

        $registrar->registrarUsuario();
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
                    <h2>Registro</h2>
                </div>
                <hr>
                <div id="menu">
                    <div id="usuario" class="espacio">
                        <label class="black">Usuario</label>
                        <br />
                        <br />
                        <input type="text" name="id_usuario">
                    </div>
                    <div id="nombre" class="espacio">
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
                        <?php
                            $genero=array("Hombre","Mujer","Otro");
                            foreach ($genero as $g) { ?>
                                <input type="radio" name="genero" value="<?php echo $g; ?>" /> <?php echo $g; ?>
                                </br>
                            <?php } 
                        ?>
                    </div>
                    <div id="metodoPago">
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
                        <input type="reset" name="limpiar" value="Limpiar">
                        <input type="submit" name="registrar" value="Registrar">
                        <input type="submit" name="volver" value="Volver">
                    </div>
                </div>
            
            </form>
        </div>

    </body>
</html>