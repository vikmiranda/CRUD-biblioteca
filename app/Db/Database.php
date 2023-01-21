<?php

namespace App\Db;
use \PDO;
use PDOException;

class Database{

    const HOST = "localhost";
    const NAME = "db_biblioteca";
    const USER = "root";
    const PASS = "";
    private $table;

    //instância de conexão com o banco de dados
    private $connection;

    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    public function setConnection(){
        try{
            $this->connection = new PDO('mysql:host:' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
        }
        catch(PDOException $e){
            die('ERROR: ' . $e->getMessage());
            //TODO: Mostrar mensagem mais amigavel ao usuario final. deixar a excecao num log
        }

    }

    public function insertLivro($values){
        $fields = array_keys($values);
        $query = 'INSERT INTO tbl_livro'. '('.implode(',',$fields).') VALUES (?,?,?,?,?)';
        $sql = $this->connection->prepare($query);
        $sql->execute($query, array_values($values));

    }


}