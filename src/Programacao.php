<?php
namespace src;
require_once "Tecnico.php";
class Programacao extends Tecnico {
    private string $area;

    public function getArea(): string
    {
        return $this->area;
    }

    public function setArea(string $area)
    {
        $this->area = $area;
    }
    public function formataTitulo(string $titulo):string{
        return  "<i style='color:blue;'>". $titulo ."</i>";
    }
    /* public function formataTitulo(){
        echo "<i style='color:blue;'>".$this->getTitulo()."</i>";
    } */
}