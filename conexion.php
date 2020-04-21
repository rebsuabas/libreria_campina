<?php

    $user="root";
    $pwd="2asir";
    
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=libreria_campina', $user, $pwd);
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
    

?>