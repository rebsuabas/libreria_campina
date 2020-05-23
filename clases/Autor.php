<?php

require_once "conexion.php";
require_once './clases/Libro.php';

class Autor extends Conexion {

    private $id_autor;
    private $nombre;
    private $nacionalidad;
    private $ano_nacimiento;
    private $ano_defuncion;
    private $obras;

    const TABLA_AUTOR = 'autor';

    public function getIdAutor() {
        return $this->id_autor;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getNacionalidad() {
        return $this->nacionalidad;
    }

    public function getAnoNacimiento() {
        return $this->ano_nacimiento;
    }

    public function getAnoDefuncion() {
        return $this->ano_defuncion;
    }

    public function getObras() {
        return $this->obras;
    }

    public function setIdAutor($id_autor) {
        $this->id_autor = $id_autor;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setNacionalidad($nacionalidad) {
        $this->nacionalidad = $nacionalidad;
    }

    public function setAnoNacimiento($ano_nacimiento) {
        $this->ano_nacimiento = $ano_nacimiento;
    }

    public function setAnoDefuncion($ano_defuncion) {
        $this->ano_defuncion = $ano_defuncion;
    }

    public function setObras($obras) {
        $this->obras = $obras;
    }

    public function catalogoAutores() {
        
        $sql = 'SELECT id_autor, nombre, anoNacimiento FROM AUTOR';
        $consulta=Conexion::connect()->prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
        $consulta->close();

    }

    public function datosAutor($autor) {

        $autor = $_GET['autor'];
        $consulta = $this->connect()->prepare('SELECT * FROM AUTOR WHERE id_autor = :autor');
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'AUTOR');
        $consulta->execute(['autor' => $autor]);

        while ($fila=$consulta->fetch()) { ?>
             
             <div id="id_autor" class="espacio">
                <label class="negrita">Código autor/a: </label>
                <label><?php echo $_GET['autor'] ?></label>
            </div>
            <div id="nombre" class="espacio">
                <label class="negrita">Nombre: </label>
                <label><?php echo $fila->nombre ?></label>
            </div>
            <div id="nacionalidad" class="espacio">
                <label class="negrita">Nacionalidad: </label>
                <label><?php echo $fila->nacionalidad ?></label>
            </div>
            <div id="ano_nacimiento" class="espacio">
                <label class="negrita">Año de nacimiento: </label>
                <label><?php echo $fila->anoNacimiento ?></label>
            </div>
            <?php if ($fila->anoDefuncion) { ?>
                <div id="ano_defuncion" class="espacio">
                    <label class="negrita">Año de defunción: </label>
                    <label><?php echo $fila->anoDefuncion ?></label>
                </div> <?php
            } ?>
            
            <div id="obras" class="espacio">
                <label class="negrita">Obras</label><br /><br />
                <label>
                
                <?php

                    $libro = new Autor();
                    $obras=$libro->obrasAutor($_GET['autor']);

                    foreach ($obras as $key => $value) {
                            ?> 
                        <li>
                            <a href="./datos_libro.php?libro=<?php echo $value['id_libro']?>"><?php echo $value['titulo']?></a>
                        </li>
                        
                        <br /><?php 
                    }
                        
                ?>
                
                </label>
            </div>
<?php   }

            
    }

    public function obrasAutor($autor) {

        $sql = 'SELECT id_libro, titulo FROM LIBRO WHERE id_autor = :autor';
        $consulta=Conexion::connect()->prepare($sql);
        $consulta->execute(['autor' => $autor]);
        return $consulta->fetchAll();
        $consulta->close();
                
    }

}

?>