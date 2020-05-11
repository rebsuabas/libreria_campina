<?php

require_once "conexion.php";

class Usuario {

    private $nombre;
    private $apellidos;
    private $id_usuario;
    private $contrasena;
    private $email;
    private $fecha_nacimiento;
    private $direccion;
    private $ciudad;
    private $provincia;
    private $codigo_postal;
    private $genero;
    private $metodo_pago;
    private $numero_tarjeta;
    private $fecha_caducidad;
    private $cvv;
    private $email_paypal;
    private $contrasena_paypal;

    const TABLA_USUARIO = 'usuario';


    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFechaNacimiento() {
        return $this->fecha_nacimiento;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getCiudad() {
        return $this->ciudad;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getCodigoPostal() {
        return $this->codigo_postal;
    }
    
    public function getGenero() {
        return $this->genero;
    }

    public function getMetodoPago() {
        return $this->metodo_mago;
    }

    public function getNumeroTarjeta() {
        return $this->numero_tarjeta;
    }

    public function getFechaCaducidad() {
        return $this->fecha_caducidad;
    }

    public function getCVV() {
        return $this->cvv;
    }
    
    public function getEmailPaypal() {
        return $this->email_paipal;
    }

    public function getContrasenaPaypal() {
        return $this->contrasena_paypal;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFechaNacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    public function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    public function setCodigoPostal($codigo_postal) {
        $this->codigo_postal = $codigo_postal;
    }
    
    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setMetodoPago($metodo_pago) {
        $this->metodo_mago = $metodo_pago;
    }

    public function setNumeroTarjeta($numero_tarjeta) {
        $this->numero_tarjeta = $numero_tarjeta;
    }

    public function setFechaCaducidad($fecha_caducidad) {
        $this->fecha_caducidad = $fecha_caducidad;
    }

    public function setCVV($cvv) {
        $this->cvv = $cvv;
    }
    
    public function setEmailPaypal($email_paypal) {
        $this->email_paipal = $email_paypal;
    }

    public function setContrasenaPaypal($contrasena_paypal) {
        $this->contrasena_paypal = $contrasena_paypal;
    }

    public function __construct($nombre, $apellidos, $id_usuario=null, $contrasena, $email, 
    $fecha_nacimiento, $direccion, $ciudad, $provincia, $codigo_postal, $genero, $metodo_pago, 
    $numero_tarjeta, $fecha_caducidad, $cvv, $email_paypal, $contrasena_paypal) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->id_usuario = $id_usuario;
        $this->contrasena = $contrasena;
        $this->email = $email;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->provincia = $provincia;
        $this->codigo_postal = $codigo_postal;
        $this->genero = $genero;
        $this->metodo_pago = $metodo_pago;
        $this->numero_tarjeta = $numero_tarjeta;
        $this->fecha_caducidad = $fecha_caducidad;
        $this->cvv = $cvv;
        $this->email_paypal = $email_paypal;
        $this->contrasena_paypal = $contrasena_paypal;

    }






    /*----- LO DE ABAJO NO ESTÁ TERMINADO -----*/


    public function guardar(){
        
        $conexion = new Conexion();
        
        if(!$this->id_usuario) /*Inserta datos*/ {
            
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA_USUARIO . 
            ' ( nombre, apellidos, id_usuario,curso,transporteEscolar) 
            VALUES(:nombre,:apellidos,:edad,:curso,:transporteEscolar)');
              
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':apellidos', $this->apellidos);
            $consulta->bindParam(':edad', $this->edad);
            $consulta->bindParam(':curso', $this->curso);
            $consulta->bindParam(':transporteEscolar', $this->transporteEscolar);
            $respuesta1=$consulta->execute();
            $this->idAlumno = $conexion->lastInsertId();
        
        }

        $conexion = null;

    }
}

?>