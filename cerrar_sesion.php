<?php

    include_once './clases/sesion.php';

    $sesion = new Sesion();
    $sesion->cerrarSesion();

    header('Location:./index.php');

?>