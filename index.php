<?php
require_once "src/Programacao.php";
require_once "src/Didatico.php";

$livroProgramacao = new Programacao;
$livroProgramacao -> setTitulo('Fundamentos de HTML e CSS3');
$livroProgramacao -> setAutor('Mauricio Samy Silva');
$livroProgramacao -> setPaginas(120);
$livroProgramacao -> setFormato(['Digital']);
$livroProgramacao -> setArea('Web');


$livroDidatico = new Didatico;
$livroDidatico -> setTitulo('Algoritmos: Lógica Para Desenvolvimento de Programação de Computadores');
$livroDidatico -> setAutor('José Augusto N. G. Manzano');
$livroDidatico -> setPaginas(220);
$livroDidatico -> setFormato(['Digital ','fisico']);
$livroDidatico -> setDisciplina("Algoritmos");
$livroDidatico -> setNivel(['basico ','medio']);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Livro</title>
    
    <style>
h2{
    text-align: center;
}        
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color:#ddd ;
}
</style>
</head>
<body>
    <h2>Livros</h2>    
<table>
    <thead>     
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Páginas</th>
            <th>formato</th>
            <th>Area</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$livroProgramacao->getTitulo()?></td>
            <td><?=$livroProgramacao->getAutor()?></td>
            <td><?=$livroProgramacao->getPaginas()?></td>
            <td><?=$livroProgramacao->getFormato()?></td>
            <td><?=$livroProgramacao->getArea()?></td>
        </tr>
    </tbody>

</table>
    <h2>Livro ditatico</h2>
<table>
    <thead>     
        <tr>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Páginas</th>
            <th>formato</th>
            <th>disciplina</th>
            <th>nivel</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$livroDidatico->getTitulo()?></td>
            <td><?=$livroDidatico->getAutor()?></td>
            <td><?=$livroDidatico->getPaginas()?></td>
            <td><?=$livroDidatico->getFormato()?></td>
            <td><?=$livroDidatico->getDisciplina()?></td>
            <td><?=$livroDidatico->getNivel()?></td>
        </tr>
    </tbody>

</table>

</body>
</html>