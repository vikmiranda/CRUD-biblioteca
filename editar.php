<?php

require __DIR__ .'/vendor/autoload.php';
define('TITLE', 'Editar Livro');

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


if(isset($_POST['titulo'], $_POST['isbn'], $_POST['autor'], $_POST['resumo'], $_POST['ano_lancamento'])){
 
    $livro -> titulo = $_POST['titulo'];
    $livro -> isbn = $_POST['isbn'];
    $livro-> autor = $_POST['autor'];
    $livro-> resumo = $_POST['resumo'];
    $livro-> ano_lancamento = $_POST['ano_lancamento'];

    $livro->atualizar();
    header('location: index.php?status=success');
    exit;   
}

include __DIR__ . '/includes/navbar.php';
include __DIR__ . '/includes/form-editar.php';
include __DIR__ . '/includes/footer.php';