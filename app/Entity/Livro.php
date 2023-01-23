<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Livro{

        #TODO: Verificar se a mudanca do nome ID aqui vai quebrar em alguma parte
    public $ID_livro;
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


    public function atualizar(){
        return (new Database('tbl_livro'))->update('ID_livro = '.$this->ID_livro, [
                                                                                'titulo' => $this->titulo,
                                                                                'isbn' => $this->isbn,
                                                                                'autor' => $this->autor,
                                                                                'resumo' => $this->resumo,
                                                                                'ano_lancamento' => $this->ano_lancamento
                                                                            ]);
    }

    public function excluir(){
        return (new Database('tbl_livro'))->delete('ID_livro = '.$this->ID_livro);

    }



    public static function getLivros($where = null, $order = null, $limit = null){
        return (new Database('tbl_livro'))->select($where, $order, $limit)
                                          ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getLivro($id){
        return (new Database('tbl_livro'))->select('ID_livro = '.$id)
                                          ->fetchObject(self::class);
    }



}

