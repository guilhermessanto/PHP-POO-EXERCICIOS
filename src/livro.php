<?php
abstract class Livro {
    private string $titulo;
    private string $autor;
    private int $paginas = 0;


    
    public function formataTitulo(string $titulo):string{
        return  "<b>".mb_strtoupper($titulo)."</b>";
    }
    /* public function formataTitulo(){
        echo "<b>".mb_strtoupper($this->getTitulo())."</b>";
    } */

    public function getTitulo(): string    
    {
        return $this->titulo;
    }
    
    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function setAutor(string $autor)
    {
        $this->autor = $autor;
    }

    public function getPaginas(): int
    {
        return $this->paginas;
    }

    public function setPaginas(int $paginas)
    {
        $this->paginas = $paginas;
    }
}