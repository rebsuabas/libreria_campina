<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="StyleSheet" href="./css/estilo_inicio_sesion.css" type="text/css" />
    </head>
    <body>
        <div id="contenedor">
            <form method="POST" action="">
                <div id="cabecera">
                <h2>Inicio Sesión</h2>
                </div>
                <hr>
                <div id="menu">
                    <div id="usuario">
                        <label><b>Usuario</b></label> 
                        <br />
                        <br />
                        <input type="text" name="usuario">
                    </div>
                    <div id="contrasena">
                        <label><b>Contraseña</b></label>
                        <br />
                        <br />
                        <input type="password" name="contrasena">
                    </div>
                    <div id="recordar">
                        <input type="checkbox" name="recordar">
                        <label>Recordar<label>
                    </div>
                    <div id="botones">
                        <input type="submit" name="iniciar_sesion" value="Iniciar Sesión">
                        <input type="submit" name="salir" value="Salir">
                    </div>
                </div>
            </form>
        </div>


        <?php 
	
            require_once 'Usuario.php';
            
            session_start();
            $_SESSION['id_usuario']=isset($_POST['id_usuario']);

            $id_usuario = $_POST['id_usuario'];
            $contrasena = $_POST['contrasena'];
            $recordar = $_POST['recordar'];

            if (isset($_POST['registrar'])) {
                
                $inicioSesion=new Usuario($id_usuario, $contrasena);
                
                $inicioSesion->inicioSesion();

            } elseif (isset($_POST['salir'])) {

                header('Location:./index.php');

            } 
            
            /*if (isset($_POST['recordar'])) { ?>
                <div id="contenedor">
                    <form method="POST" action="">
                        <div id="cabecera">
                        <h2>Inicio Sesión</h2>
                        </div>
                        <hr>
                        <div id="menu">
                            <div id="usuario">
                                <label><b>Usuario</b></label> 
                                <br />
                                <br />
                                <input type="text" name="usuario" value="<?php echo $registro['id_usuario']; ?>">
                            </div>
                            <div id="contrasena">
                                <label><b>Contraseña</b></label>
                                <br />
                                <br />
                                <input type="password" name="contrasena" value="<?php echo $registro['contrasena']; ?>">
                            </div>
                            <div id="recordar">
                                <input type="checkbox" name="recordar">
                                <label>Recordar<label>
                            </div>
                            <div id="botones">
                                <input type="submit" name="iniciar_sesion" value="Iniciar Sesión">
                                <input type="submit" name="salir" value="Salir">
                            </div>
                        </div>
                    </form>
                </div> 
                
                <?php

            }*/

	    ?>

    </body>
</html>