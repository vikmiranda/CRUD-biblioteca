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
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
        }
        catch(PDOException $e){
            die('ERROR FUNCAO setconnection: ' . $e->getMessage());
            //TODO: Mostrar mensagem mais amigavel ao usuario final. deixar a excecao num log
        }

    }

    public function execute($query, $params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }
        catch(PDOException $e){
            die('ERROR funcao execute: ' . $e->getMessage());
        }

    }

    public function insertLivro($values){
        $fields = array_keys($values);
        $query = 'INSERT INTO tbl_livro'. '('.implode(',',$fields).') VALUES (?,?,?,?,?)';
        $this->execute($query, array_values($values));

        return $this->connection->lastInsertId();
    }

    public function select($where = null, $order = null, $limit = null, $fields = '*'){
        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';

        $query = 'SELECT '.$fields.' FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;

        return $this->execute($query);
    }

    public function update($where, $values){
        //DADOS DA QUERY
        $fields = array_keys($values);

        $query = 'UPDATE ' . $this->table . ' SET '.implode('=?,',$fields).'=? WHERE ' . $where;
        $this->execute($query, array_values($values));

        return true;
    }   

    public function delete($where){
        $query = 'DELETE FROM ' . $this->table . ' WHERE ' . $where;
        $this->execute($query);

        return true;

    }
}
