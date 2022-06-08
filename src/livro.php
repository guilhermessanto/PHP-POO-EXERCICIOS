<?php

class Livro{
    private string $titulo;
    private string $autor;
    private int $paginas = 0;

    function getTitulo(){
        return $this->titulo;
    }
    function setTitulo(string $titulo ){
        $this->titulo = $titulo;
    }
    //autor
    function getAutor(){
        return $this->autor;
    }
    function setAutor(string $autor ){
        $this->autor = $autor;
    }
    function getPaginas(){
        return $this->paginas;
    }
    function setPaginas(int $paginas ){
        $this->paginas = $paginas;
    }
}

