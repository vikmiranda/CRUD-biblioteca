<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Livro;

$livros = Livro::getLivros();

include __DIR__ . '/includes/navbar.php';
include __DIR__ . '/includes/ver_livros.php';
include __DIR__ . '/includes/footer.php';
