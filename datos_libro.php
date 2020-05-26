<?php 
    
    require_once './clases/Libro.php';
    require_once './clases/Usuario.php';
    require_once './clases/Compra.php';
    require_once './clases/Sesion.php';

    session_start();

    $modificar = new Libro();
    $comprar = new Compra();
    
    if (isset($_POST['cerrar_sesion'])) {
        header('Location:./cerrar_sesion.php');
    } elseif (isset($_POST['comprar'])) {
        //MCVB: Rebeca, cuando te comento que hay que cambiar las propiedades al objeto, te digo que se hace así. No sé si está bien escrito el nombre de los métodos. De manera, que dentro de comprar no tienes que volver a coger los valores de sesión sino directamente los valores del objeto. Te añado comentarios en la clase Compra. 
        //MCVB: el método setCompra no sé si lo necesitas realizar antes de comprar. Si es por asignarle los valores a idUSuario, idLibro y tapa, deja de usarlo ya que esos valores se asignan con los métodos set que te he dejado en comentarios.
        //comprar->setIdUsuario($_SESSION['usuario']);
        //comprar->setIdLibro($_GET['libro']);
        //comprar->setTapa($_POST['tapa']);
        $comprar->setCompra($_SESSION['usuario'],$_GET['libro'],$_POST['tapa']);
        $comprar->comprar();

        $modificar->setStock($_GET['libro'],$_GET['cantidad']);
        $modificar->stock();
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
                        
                        <?php
                            
                            $datos= (new Libro())->datosLibro($_GET['libro']);
                        
                        ?>

                        <div id="tapa" class="espacio">
                            <label class="negrita">Tapa</label>
                            <br />
                            <br />
                            <select name="tapa">
                                <option value=""></option>
                                <option value="blanda">Blanda</option>
                                <option value="dura">Dura</option>
                            </select>
                        </div>
                        <br />
                        <br />
                        <br />
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
