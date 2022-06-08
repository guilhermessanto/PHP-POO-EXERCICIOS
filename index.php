<?php
require_once "src/livro.php";


$livroA = new Livro;
$livroB = new Livro;
$livroC = new Livro;

$livroA ->setTitulo("As Cronicas de gelo e fogo");
$livroA ->setAutor("Georde R.R Martin");
$livroA ->setPaginas(4228);

$livroB ->setTitulo("Harry Potter e a pedra filosofal");
$livroB ->setAutor(" J. K. Rowling");
$livroB ->setPaginas(264);

$livroC ->setTitulo("O Senhor dos Anéis");
$livroC ->setAutor("J. R. R. Tolkien");
$livroC ->setPaginas(1200);

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
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$livroA->getTitulo()?></td>
            <td><?=$livroA->getAutor()?></td>
            <td><?=$livroA->getPaginas()?></td>
        </tr>
        <tr>
            <td><?=$livroB->getTitulo()?></td>
            <td><?=$livroB->getAutor()?></td>
            <td><?=$livroB->getPaginas()?></td>
        </tr>
        <tr>
            <td><?=$livroC->getTitulo()?></td>
            <td><?=$livroC->getAutor()?></td>
            <td><?=$livroC->getPaginas()?></td>
        </tr>
    </tbody>



</table>

</body>
</html>