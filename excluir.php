<?php

require __DIR__ .'/vendor/autoload.php';

use \App\Entity\Livro;

if (!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

//consultar livro
$livro = Livro::getLivro($_GET['id']);

//validação do livro
if(!$livro instanceof Livro){
    header('location: index.php?status=error');
    exit;
}


if(isset($_POST['excluir'])){
 

    $livro->excluir();
    header('location: index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/confirmar-exclusao.php';
include __DIR__ . '/includes/footer.php';