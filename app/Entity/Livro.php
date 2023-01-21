<?php

namespace App\Entity;

use \App\Db\Database;

class Livro{

    public $id;
    public $titulo;
    public $isbn;
    public $autor;
    public $resumo;
    public $ano_lancamento;

    
    public function cadastrar(){
        $database = new Database('tbl_livro');
        $database->insertLivro([
                                'titulo' => $this->titulo,
                                'isbn' => $this->isbn,
                                'autor' => $this->autor,
                                'resumo' => $this->resumo,
                                'ano_lancamento' => $this->ano_lancamento
        ]);
    }

}