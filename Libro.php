<?php

require_once "conexion.php";

class Libro {

    private $id_libro;
    private $titulo;
    private $titulo_original;
    private $id_autor;
    private $idioma;
    private $idioma_original;
    private $disponibilidad;
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

    public function getDisponibilidad() {
        return $this->disponibilidad;
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

    public function setDisponibilidad($disponibilidad) {
        $this->disponibilidad = $disponibilidad;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

}

?>