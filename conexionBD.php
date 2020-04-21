<html>
<body>
<?php

$host="localhost";
$user="root";
$pwd="2asir";

$nombreBD="libreria_campina";

$conexion=mysqli_connect($host, $user, $pwd);

if (!$conexion) {
    exit("No se puede conectar: " . mysql_error());
} else {
    /*echo "Está conectado a la base de datos.";*/ ?> <br /> <?php
}

?>
</body>
</html>