<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Livro{

    public $id;
    public $titulo;
    public $isbn;
    public $autor;
    public $resumo;
    public $ano_lancamento;

    
    public function cadastrar(){
        $database = new Database('tbl_livro');
        $this-> id = $database->insertLivro([
                                'titulo' => $this->titulo,
                                'isbn' => $this->isbn,
                                'autor' => $this->autor,
                                'resumo' => $this->resumo,
                                'ano_lancamento' => $this->ano_lancamento
        ]);

        return true; 
    }


    
    public static function getLivros($where = null, $order = null, $limit = null){
        return (new Database('tbl_livro'))->select($where, $order, $limit)
                                          ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

}
