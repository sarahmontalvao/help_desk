<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';



$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria=str_replace('#', '-', $_POST['categoria']);
$descricao=str_replace('#', '-', $_POST['descricao']);

$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

$arquivo = fopen('arquivo.txt', 'a');

fwrite($arquivo, $texto);

fclose($arquivo);
header('location:consultar_chamado.php');


?>
