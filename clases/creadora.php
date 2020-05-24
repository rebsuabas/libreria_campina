<?php 

class Creadora { 
    
    private $nombre;
    private $apellido;
    private $edad;
    
    public function __construct($nombre, $apellido) {
       $this->nombre = $nombre;
       $this->apellido = $apellido;
    }
    
    public function pie(){
       return 'Creadora aplicación web: ' . $this->nombre . ' ' . $this->apellido; 
    }
    
    public static function getUsuarioPorDefecto(){
       return new self('Rebeca', 'Suárez Bascón');
    }
}
?>