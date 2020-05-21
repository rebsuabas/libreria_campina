<?php 
	
    if (isset($_POST['cerrar_sesion'])) {
        header('Location:./cerrar_sesion.php');
    } elseif (isset($_POST['comprar'])) {

    } elseif (isset($_POST['volver'])) {
        header('Location:./catalogo_libros.php');
    } 

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="StyleSheet" href="./css/estilo_datos.css" type="text/css" />
    </head>
    <body>
        <div id="contenedor">
            <form action="" method="POST">
                <div id="cabecera">
                    <h2>Librería La Campiña</h2>
                </div>
                <hr>
                <div id="contenido">
                    <div id="cerrar_sesion">
                        <input type="submit" name="cerrar_sesion" value="Cerrar Sesión">
                    </div>
                    <div id="titulo">
                        <h3>DATOS DEL LIBRO</h3>
                    </div>
                    <div id="datos">
                        <div id="titulo_libro" class="espacio">
                            <label class="negrita">Tilulo: </label>
                            <label></label>
                        </div>
                        <div id="titulo_original" class="espacio">
                            <label class="negrita">Título Original: </label>
                            <label></label>
                        </div>
                        <div id="autor" class="espacio">
                            <label class="negrita">Autor: Paulo Coelho</label>
                            <label></label>
                        </div>
                        <div id="idioma" class="espacio">
                            <label class="negrita">Idioma: </label>
                            <label></label>
                        </div>
                        <div id="idioma_original" class="espacio">
                            <label class="negrita">Idioma Original: </label>
                            <label></label>
                        </div>
                        <div id="codigo" class="espacio">
                            <label class="negrita">Código: </label>
                            <label></label>
                        </div>
                        <div id="disponibilidad" class="espacio">
                            <label class="negrita">Disponibilidad: </label>
                            <label></label>
                        </div>
                        <div id="precio" class="espacio">
                            <label class="negrita">Precio: </label>
                            <label></label>
                        </div>
                        <div id="tapa" class="espacio">
                            <label class="negrita">Tapa</label>
                            <br />
                            <br />
                            <select>
                                <option value=""></option>
                                <option value="blanda">Blanda</option>
                                <option value="dura">Dura</option>
                            </select>
                        </div>
                        <div id="cantidad" class="espacio">
                            <label class="negrita">Cantidad</label>
                            <br />
                            <br />
                            <input type="number" name="cantidad" min="1">
                        </div>
                    </div>
                    <div id="botones">
                        <input type="submit" name="comprar" value="Comprar">
                        <input type="submit" name="volver" value="Volver">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>