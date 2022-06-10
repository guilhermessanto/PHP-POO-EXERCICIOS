<?php

abstract class Livro{
    private string $titulo;
    private string $autor;
    private int $paginas = 0;

    function getTitulo():string{
        return $this->titulo;
    }
    function setTitulo(string $titulo ){
        $this->titulo = $titulo;
    }
    //autor
    function getAutor():string{
        return $this->autor;
    }
    function setAutor(string $autor ){
        $this->autor = $autor;
    }
    function getPaginas():int{
        return $this->paginas;
    }
    function setPaginas(int $paginas ){
        $this->paginas = $paginas;
    }
}

