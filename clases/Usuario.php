<?php

include_once './conexion.php';

class Usuario extends Conexion{

    private $id_usuario;
    private $nombre;
    private $apellidos;
    private $contrasena;
    private $email;
    private $fechaNacimiento;
    private $direccion;
    private $ciudad;
    private $provincia;
    private $codigoPostal;
    private $genero;
    private $numeroTarjeta;
    private $fechaCaducidad;
    private $cvv;

    const TABLA_USUARIO = 'usuario';


    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
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
        return $this->codigoPostal;
    }
    
    public function getGenero() {
        return $this->genero;
    }

    public function getNumeroTarjeta() {
        return $this->numeroTarjeta;
    }

    public function getFechaCaducidad() {
        return $this->fechaCaducidad;
    }

    public function getCVV() {
        return $this->cvv;
    }

    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
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

    public function setCodigoPostal($codigoPostal) {
        $this->codigoPostal = $codigoPostal;
    }
    
    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setNumeroTarjeta($numeroTarjeta) {
        $this->numeroTarjeta = $numeroTarjeta;
    }

    public function setFechaCaducidad($fechaCaducidad) {
        $this->fechaCaducidad = $fechaCaducidad;
    }

    public function setCVV($cvv) {
        $this->cvv = $cvv;
    }

    public function registrarUsuario(){
        
        $id_usuario = $_POST['id_usuario'];
        $nombre=$_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $contrasena = $_POST['contrasena'];
        $email = $_POST['email'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $direccion = $_POST['direccion'];
        $ciudad = $_POST['ciudad'];
        $provincia = $_POST['provincia'];
        $codigoPostal = $_POST['codigoPostal'];
        $genero = $_POST['genero'];
        $numeroTarjeta = $_POST['numeroTarjeta'];
        $fechaCaducidad = $_POST['fechaCaducidad'];
        $cvv = $_POST['cvv'];
        
        $consulta = $this->connect()->prepare('INSERT INTO USUARIO (id_usuario, nombre, apellidos, contrasena, email, 
        fechaNacimiento, direccion, ciudad, provincia, codigoPostal, genero, numeroTarjeta, 
        fechaCaducidad, cvv) 
        VALUES(:id_usuario, :nombre, :apellidos, :contrasena, :email, :fechaNacimiento, :direccion, 
        :ciudad, :provincia, :codigoPostal, :genero, :numeroTarjeta, :fechaCaducidad, 
        :cvv)');
        
        $consulta->bindParam(':nombre', $this->nombre);
        $consulta->bindParam(':apellidos', $this->apellidos);
        $consulta->bindParam(':id_usuario', $this->id_usuario);
        $consulta->bindParam(':contrasena', $this->contrasena);
        $consulta->bindParam(':email', $this->email);
        $consulta->bindParam(':fechaNacimiento', $this->fechaNacimiento);
        $consulta->bindParam(':direccion', $this->direccion);
        $consulta->bindParam(':ciudad', $this->ciudad);
        $consulta->bindParam(':provincia', $this->provincia);
        $consulta->bindParam(':codigoPostal', $this->codigoPostal);
        $consulta->bindParam(':genero', $this->genero);
        $consulta->bindParam(':numeroTarjeta', $this->numeroTarjeta);
        $consulta->bindParam(':fechaCaducidad', $this->fechaCaducidad);
        $consulta->bindParam(':cvv', $this->cvv);

        if($consulta->execute()){
            header('Location:./confirmacion_registro.php');
        }
    }
    
    public function existeUsuario($usuario, $pass){
        $consulta = $this->connect()->prepare('SELECT * FROM USUARIO WHERE id_usuario = :usuario AND contrasena = :pass');
        $consulta->execute(['usuario' => $usuario, 'pass' => $pass]);

        if ($consulta->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function setUsuario($usuario) {
        $consulta = $this->connect()->prepare('SELECT * FROM USUARIO WHERE id_usuario = :usuario');
        $consulta->execute(['usuario' => $usuario]);

        foreach ($consulta as $usuarioActual) {
            $this->nombre = $usuarioActual['nombre'];
            $this->id_usuario = $usuarioActual['id_usuario'];
        }
    }

    public function modificarUsuario(){
        $query = $this->connect()->prepare('UPDATE USUARIO SET nombre = :nombre WHERE id_usuario = :id_usuario');
        $query->execute(['id_usuario' => $this->id_usuario]);
    }

    


}

?>