<?php

include_once './conexion.php';

class Libro extends Conexion {

    private $id_libro;
    private $titulo;
    private $titulo_original;
    private $id_autor;
    private $idioma;
    private $idioma_original;
    private $precio;
    private $cantidad;

    const TABLA_LIBRO = 'libro';

    public function getIdLibro() {
        return $this->id_libro;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getTituloOriginal() {
        return $this->titulo_original;
    }

    public function getIdAutor() {
        return $this->id_autor;
    }

    public function getIdioma() {
        return $this->idioma;
    }

    public function getIdiomaOriginal() {
        return $this->idioma_original;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function setIdLibro($id_libro) {
        $this->id_libro = $id_libro;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setTituloOriginal($titulo_original) {
        $this->titulo_original = $titulo_original;
    }

    public function setIdAutor($id_autor) {
        $this->id_autor = $id_autor;
    }

    public function setIdioma($idioma) {
        $this->idioma = $idioma;
    }

    public function setIdiomaOriginal($idioma_original) {
        $this->idioma_original = $idioma_original;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function librosDisponibles() {
        
        $sql = 'SELECT id_libro, titulo FROM '. self::TABLA_LIBRO .' WHERE cantidad > 0';
        $consulta=Conexion::connect()->prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
        $consulta->close();

    }

    public function catalogoLibros() {
        
        $sql = 'SELECT id_libro, titulo FROM '. self::TABLA_LIBRO;
        $consulta=Conexion::connect()->prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll();
        $consulta->close();

    }

    public function datosLibro($libro) {

        $libro = $_GET['libro'];
        $consulta = $this->connect()->prepare('SELECT * FROM '. self::TABLA_LIBRO . ' WHERE id_libro = :libro');
        $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'LIBRO');
        $consulta->execute(['libro' => $libro]);

        while ($fila=$consulta->fetch()) { ?>
             
            <div id="titulo_libro" class="espacio">
                <label class="negrita">Tilulo: </label>
                <label><?php echo $fila->titulo ?></label>
            </div>
            <div id="titulo_original" class="espacio">
                <label class="negrita">Título Original: </label>
                <label><?php echo $fila->tituloOriginal ?></label>
            </div>
            <div id="autor" class="espacio">
                <label class="negrita">Autor: </label>
                <label><a href="./datos_autor.php?autor=<?php echo $fila->id_autor ?>"><?php echo $fila->id_autor ?></a></label>
            </div>
            <div id="idioma" class="espacio">
                <label class="negrita">Idioma: </label>
                <label><?php echo $fila->idioma ?></label>
            </div>
            <div id="idioma_original" class="espacio">
                <label class="negrita">Idioma Original: </label>
                <label><?php echo $fila->idiomaOriginal ?></label>
            </div>
            <div id="codigo" class="espacio">
                <label class="negrita">Código: </label>
                <label><?php echo $_GET['libro'] ?></label>
            </div>
            <div id="disponibilidad" class="espacio">
                <label class="negrita">Disponibles: </label>
                <label><?php echo $fila->cantidad ?></label>
            </div>
            <div id="precio" class="espacio">
                <label class="negrita">Precio: </label>
                <label><?php echo $fila->precio ?></label>
            </div>
<?php   }

            
    }


}

?>