<?php
require_once "livro.php";

class Tecnico extends Livro{
    private array $formato = ['Digital','Fisico'];


    public function getFormato():string
    {
        return implode($this->formato);
    }

    public function setFormato(array $formato)
    {
        $this->formato = $formato;
    }
}