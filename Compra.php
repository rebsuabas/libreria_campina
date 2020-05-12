<?php

require_once "conexion.php";

class Compra {

    private $id_usuario;
    private $id_libro;

    const TABLA_COMPRA = 'compra';

    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function getIdLibro() {
        return $this->id_libro;
    }

    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setIdLibro($id_libro) {
        $this->id_libro = $id_libro;
    }

    public function __construct($id_usuario, $id_libro) {
        
        $this->id_usuario = $id_usuario;
        $this->id_libro = $id_libro;

    }

    public function guardar(){

        $conexion = new Conexion();
        
	    if(!$this->id_usuario) {
            
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA_COMPRA .
            ' (id_usuario, id_libro) VALUES(:id_usuario, :id_libro)');
	             
	        $consulta->bindParam(':id_usuario', $this->id_usuario);
	        $consulta->bindParam(':id_libro', $this->id_libro);

            $res=$consulta->execute();
			
	        if ($res) {
				header('Location:./confirmacion_compra.php');
            }
            
		}
        
        $conexion = null; 
    
    }


}

?>