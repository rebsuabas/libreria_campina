<?php

require_once "conexion.php";

class Usuario {

    private $nombre;
    private $apellidos;
    private $usuario;
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

    const TABLA = 'usuario';


    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getUsuario() {
        return $this->usuario;
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

    public function setApellidos() {
        $this->apellidos = $apellidos;
    }

    public function setUsuario() {
        $this->usuario = $usuario;
    }

    public function setContrasena() {
        $this->contrasena = $contrasena;
    }

    public function setEmail() {
        $this->email = $email;
    }

    public function setFechaNacimiento() {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function setDireccion() {
        $this->direccion = $direccion;
    }

    public function setCiudad() {
        $this->ciudad = $ciudad;
    }

    public function setProvincia() {
        $this->provincia = $provincia;
    }

    public function setCodigoPostal() {
        $this->codigo_postal = $codigo_postal;
    }
    
    public function setGenero() {
        $this->genero = $genero;
    }

    public function setMetodoPago() {
        $this->metodo_mago = $metodo_pago;
    }

    public function setNumeroTarjeta() {
        $this->numero_tarjeta = $numero_tarjeta;
    }

    public function setFechaCaducidad() {
        $this->fecha_caducidad = $fecha_caducidad;
    }

    public function setCVV() {
        $this->cvv = $cvv;
    }
    
    public function setEmailPaypal() {
        $this->email_paipal = $email_paypal;
    }

    public function setContrasenaPaypal() {
        $this->contrasena_paypal = $contrasena_paypal;
    }

}

?>