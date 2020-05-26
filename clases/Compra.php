<?php

require_once "conexion.php";
require_once './clases/Libro.php';
require_once './clases/Usuario.php';

class Compra extends Conexion {

    private $id_usuario;
    private $id_libro;
    private $tapa;

    const TABLA_COMPRA = 'compra';

    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function getIdLibro() {
        return $this->id_libro;
    }

    public function getTapa() {
        return $this->tapa;
    }

    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setIdLibro($id_libro) {
        $this->id_libro = $id_libro;
    }

    public function setTapa($tapa) {
        $this->tapa = $tapa;
    }

    public function comprar() {

        $usuario=$_SESSION['usuario'];
        $libro=$_GET['libro'];
        $tapa=$_POST['tapa'];

        $consulta = $this->connect()->prepare('INSERT INTO COMPRA (id_usuario, id_libro, tapa) 
        VALUES(:usuario, :libro, :tapa)');

        $consulta->bindParam(':usuario', $usuario);
        $consulta->bindParam(':libro', $libro);
        $consulta->bindParam(':tapa', $tapa);

        $consulta2 = $this->connect()->prepare('SELECT cantidad FROM LIBRO 
                                                WHERE cantidad > 0 AND id_libro = :libro');
        $consulta2->execute(['libro' => $libro]);

        if ($consulta2->rowCount() > 0) {
            if($consulta->execute()){
                header('Location:./confirmacion_compra.php');
            }
        } else {
            echo 'No se puede realizar la compra.';
        }    

        

    }

    public function setCompra($usurio,$libro,$tapa) {

        $usuario=$_SESSION['usuario'];
        $libro=$_GET['libro'];
        $tapa=$_POST['tapa'];
        
        $consulta = $this->connect()->prepare('SELECT * FROM COMPRA WHERE id_usuario = :usuario 
                                                AND id_libro = :libro');
        $consulta->execute(['usuario' => $usuario, 'libro' => $libro]);

        foreach ($consulta as $nuevaCompra) {
            $this->nombre = $nuevaCompra['id_usuario'];
            $this->id_usuario = $nuevaCompra['id_libro'];
            $this->tapa = $tapa['tapa'];
        }
    }


}

?>