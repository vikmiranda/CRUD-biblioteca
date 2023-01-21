<?php

require __DIR__ .'/vendor/autoload.php';

use \App\Entity\Livro;

if(isset($_POST['titulo'], $_POST['isbn'], $_POST['autor'], $_POST['resumo'], $_POST['ano_lancamento'])){
    $novoLivro = new Livro;
    $novoLivro -> titulo = $_POST['titulo'];
    $novoLivro -> isbn = $_POST['isbn'];
    $novoLivro-> autor = $_POST['autor'];
    $novoLivro-> resumo = $_POST['resumo'];
    $novoLivro-> ano_lancamento = $_POST['ano_lancamento'];

    $novoLivro->cadastrar();


}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formulario.php';
include __DIR__ . '/includes/footer.php';