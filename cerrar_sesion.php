<?php

    include_once './clases/Sesion.php';

    $sesion = new Sesion();
    $sesion->cerrarSesion();

    header('Location:./index.php');

?>