<?php 
require_once "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04</title>
</head>
<body>
    <h1>Desafio 04</h1>
    <hr>
<?php

$livroTecnico = new src\Tecnico;

$livroTecnico->setTitulo("Desenvolvimento de Sistemas");
$livroTecnico->setAutor("Fulano de Tal");
$livroTecnico->setPaginas(250);
$livroTecnico->setFormato(["digital"]);


$livroProgramacao = new src\Programacao;
$livroProgramacao->setTitulo("APIs com Node.js");
$livroProgramacao->setAutor("Beltrano dos Santos");
$livroProgramacao->setPaginas(200);
$livroProgramacao->setFormato(['físico']);
$livroProgramacao->setArea("Back-End");


$livroDidatico = new src\Didatico;
$livroDidatico->setTitulo("Matemática Aplicada");
$livroDidatico->setAutor("Mariazinha da Silva");
$livroDidatico->setPaginas(500);
$livroDidatico->setFormato(["físico"]);
$livroDidatico->setDisciplina("Matemática");
$livroDidatico->setNivel(['médio', 'superior']);

$livroWeb = new src\Web;
$livroWeb ->setTitulo("Livro Web");
$livroWeb ->setAutor("tiago");
$livroWeb ->setPaginas(320);
$livroWeb ->setFormato(["Físico"]);
$livroWeb ->setArea("Back-end");

?>


<h2>Dados</h2>
<h3>Técnico</h3>
<p><?=$livroTecnico->formataTitulo($livroTecnico->getTitulo())?></p>
<p><?=$livroTecnico->getAutor()?></p>
<p><?=$livroTecnico->getPaginas()?></p>
<p><?=$livroTecnico->getFormato()?></p>

<h3>Programação</h3>
<p><?=$livroProgramacao->formataTitulo($livroProgramacao->getTitulo())?></p>
<p><?=$livroProgramacao->getAutor()?></p>
<p><?=$livroProgramacao->getPaginas()?></p>
<p><?=$livroProgramacao->getFormato()?></p>
<p><?=$livroProgramacao->getArea()?></p>

<h3>Didático</h3>
<p><?=$livroDidatico->formataTitulo($livroDidatico->getTitulo())?></p>

<p><?=$livroDidatico->getAutor()?></p>
<p><?=$livroDidatico->getPaginas()?></p>
<p><?=$livroDidatico->getFormato()?></p>
<p><?=$livroDidatico->getDisciplina()?></p>

<?php foreach($livroDidatico->getNivel() as $nivel){ ?>
<p> <?=$nivel?> </p>
<?php } ?>

<?php if($livroDidatico->getPaginas() > 100){ ?>
        <p>Traga uma mochila</p>
<?php } ?>

<h3>Web</h3>
<p><?=$livroWeb->formataTitulo($livroWeb->getTitulo())?></p>
<p><?=$livroWeb->getAutor()?></p>
<p><?=$livroWeb->getPaginas()?></p>
<p><?=$livroWeb->getFormato()?></p>
<p><?=$livroWeb->getArea()?></p>

<pre><?=var_dump($livroWeb)?></pre>



<!-- <pre> <?=var_dump($livroTecnico, $livroProgramacao, $livroDidatico)?></pre> -->
</body>
</html>