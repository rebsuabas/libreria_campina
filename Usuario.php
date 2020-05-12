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

    public function guardar(){

        $conexion = new Conexion();
        
	    if(!$this->id_usuario) {
            
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA_USUARIO .
            ' (nombre, apellidos, contrasena, email, fecha_nacimiento, direccion, 
            ciudad, provincia, codigo_postal, genero, metodo_pago, numero_tarjeta, fecha_caducidad, 
            cvv, email_paypal, contrasena_paypal) 
            VALUES(:nombre, :apellidos, :contrasena, :email, :fecha_nacimiento, :direccion, 
            :ciudad, :provincia, :codigo_postal, :genero, :metodo_pago, :numero_tarjeta, :fecha_caducidad, 
            :cvv, :email_paypal, :contrasena_paypal)');
	             
	        $consulta->bindParam(':nombre', $this->nombre);
	        $consulta->bindParam(':apellidos', $this->apellidos);
	        $consulta->bindParam(':contrasena', $this->contrasena);
	        $consulta->bindParam(':email', $this->email);
            $consulta->bindParam(':fecha_nacimiento', $this->fecha_nacimiento);
            $consulta->bindParam(':direccion', $this->direccion);
            $consulta->bindParam(':ciudad', $this->ciudad);
            $consulta->bindParam(':provincia', $this->provincia);
            $consulta->bindParam(':codigo_postal', $this->codigo_postal);
            $consulta->bindParam(':genero', $this->genero);
            $consulta->bindParam(':metodo_pago', $this->metodo_pago);
            $consulta->bindParam(':numero_tarjeta', $this->numero_tarjeta);
            $consulta->bindParam(':fecha_caducidad', $this->fecha_caducidad);
            $consulta->bindParam(':cvv', $this->cvv);
            $consulta->bindParam(':email_paypal', $this->email_paypal);
            $consulta->bindParam(':contrasena_paypal', $this->contrasena_paypal);

            $res=$consulta->execute();
            
			$this->id_usuario = $conexion->lastInsertId();
			
	        if ($res) {
				header('Location:./confirmacion_registro.php');
			} else {
				header('Location:./error_registro.php');
			}
		}
        
        $conexion = null; 
    
    }


    public static function modificar($nombre, $apellidos, $id_usuario, $contrasena, $email, 
    $fecha_nacimiento, $direccion, $ciudad, $provincia, $codigo_postal, $genero, $metodo_pago, 
    $numero_tarjeta, $fecha_caducidad, $cvv, $email_paypal, $contrasena_paypal){
        
        $conexion =new Conexion();

        if($id_usuario == TRUE){
        
        $consulta = $conexion->prepare('UPDATE ' . self::TABLA_USUARIO .
        ' SET nombre = :nombre, apellidos = :apellidos, contrasena = :apellidos, email = :email, 
        fecha_nacimiento = :fecha_nacimiento, direccion = :direccion, ciudad = :ciudad, 
        provincia = :provincia, codigo_postal = :codigo_postal, genero = :genero, metodo_pago = :metodo_pago,
        numero_tarjeta = :numero_tarjeta, fecha_caducidad = :fecha_caducidad, cvv = :cvv, 
        email_paypal = :email_paypal, contrasena_paypal = :contrasena_paypal 
        WHERE id_usuario = :id_usuario' );

        $consulta->bindParam(':nombre', $nombre);
        $consulta->bindParam(':apellidos', $apellidos);
        $consulta->bindParam(':id_usuario', $id_usuario);
        $consulta->bindParam(':contrasena', $contrasena);
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':fecha_nacimiento', $fecha_nacimiento);
        $consulta->bindParam(':direccion', $direccion);
        $consulta->bindParam(':ciudad', $ciudad);
        $consulta->bindParam(':provincia', $provincia);
        $consulta->bindParam(':codigo_postal', $codigo_postal);
        $consulta->bindParam(':genero', $genero);
        $consulta->bindParam(':metodo_pago', $metodo_pago);
        $consulta->bindParam(':numero_tarjeta', $numero_tarjeta);
        $consulta->bindParam(':fecha_caducidad', $fecha_caducidad);
        $consulta->bindParam(':cvv', $cvv);
        $consulta->bindParam(':email_paypal', $email_paypal);
        $consulta->bindParam(':contrasena_paypal', $contrasena_paypal);
        
        $res=$consulta->execute();
        
        if($res){
            header('Location:./confirmacion_actualizacion.php');
        }else{
            header('Location:./error_actualizacion.php');
        }
        
        }

        $conexion = null; 
    
    }

    public static function eliminar($id_usuario){
        
        $conexion =new Conexion();

        if($id_usuario){

            $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA_USUARIO .
            '  WHERE id_usuario = :id_usuario' );

            $consulta->bindParam(':id_usuario', $id_usuario);

            $res=$consulta->execute();

            if ($res == TRUE) {
                header('Location:./confirmacion_eliminacion.php');
            } else {
                header('Location:./error_eliminacion.php');
            }
         
        }

        $conexion = null; 
    }

    public static function buscarPorIdTarjeta($id_usuario){
        
        $conexion = new Conexion();
        
        $consulta = $conexion->prepare('SELECT nombre, apellidos, id_usuario, email, fecha_nacimiento, 
        direccion, ciudad, provincia, codigo_postal, genero, metodo_pago, numero_tarjeta, fecha_caducidad, 
        cvv FROM ' . self::TABLA_USUARIO . 
        ' WHERE id_usuario = :id_usuario');
        
        $consulta->bindParam(':id_usuario', $id_usuario);
        $consulta->execute();
        
        $registro = $consulta->fetch();
        
        if ($registro) {
            return new self($registro['nombre'], $registro['apellidos'], $registro['id_usuario'],
            $registro['email'], $registro['fecha_nacimiento'], $registro['direccion'], $registro['ciudad'],
            $registro['provincia'], $registro['codigo_postal'], $registro['genero'], 
            $registro['metodo_pago'], $registro['numero_tarjeta'], $registro['fecha_caducidad'],
            $registro['cvv'], $id_usuario);
        } else {
            return false;
        }
    }

    public static function buscarPorIdPaypal($id_usuario){
        
        $conexion = new Conexion();
        
        $consulta = $conexion->prepare('SELECT nombre, apellidos, id_usuario, email, fecha_nacimiento, 
        direccion, ciudad, provincia, codigo_postal, genero, metodo_pago, email_paypal, contrasena_paypal 
        FROM ' . self::TABLA_USUARIO . ' WHERE id_usuario = :id_usuario');
        
        $consulta->bindParam(':id_usuario', $id_usuario);
        $consulta->execute();
        
        $registro = $consulta->fetch();
        
        if ($registro) {
            return new self($registro['nombre'], $registro['apellidos'], $registro['id_usuario'],
            $registro['email'], $registro['fecha_nacimiento'], $registro['direccion'], $registro['ciudad'],
            $registro['provincia'], $registro['codigo_postal'], $registro['genero'], 
            $registro['metodo_pago'], $registro['email_paypal'], $registro['contrasena_paypal'], $id_usuario);
        } else {
            return false;
        }
    }

    public static function inicioSesion($id_usuario, $contrasena){
        
        $conexion = new Conexion();
        
        $consulta = $conexion->prepare('SELECT id_usuario, contrasena FROM ' 
        . self::TABLA_USUARIO . ' WHERE id_usuario = :id_usuario AND contrasena = :contrasena');
        
        $consulta->bindParam(':id_usuario', $id_usuario);
        $consulta->bindParam(':contrasena', $contrasena);
        $consulta->execute();
        
        $registro = $consulta->fetch();
        
        if ($registro) {
            
            return new self($registro['id_usuario'], $registro['contrasena'], $id_usuario, $contrasena);
            
            header('Location:./confirmacion_eliminacion.php');

        } else {
            return false;
        }
    }


}

?>