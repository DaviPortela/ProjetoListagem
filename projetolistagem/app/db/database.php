<?php

namespace App\db;

use \PDO;
use \PDOException;

class database{

    const HOST = 'localhost';
    const NAME = 'projetolistagem';
    const USER = 'root';
    const PASS = '';

    private $table;
    private $connection;

    //define a tabela e instancia a conexão
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    //cria conexão com o banco de dados
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host=' . self::HOST . ';' . 'dbname:' . self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            //isso não vai aparecer pro cliente no resultado final, só ta ai por enquanto para teste
            die('Erro' . $e->getMessage());
        }
    }

    //executa queries dentro do banco de dados
    public function execute($query, $params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
            //isso não vai aparecer pro cliente no resultado final, só ta ai por enquanto para teste
            die('Erro' . $e->getMessage());
        }
    }

    //insere dados no banco
    public function insert($values){

        //dados da query
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        //monta a query
        $query = 'INSERT INTO' . $this->table . '(' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';

        //executa o insert
        $this->execute($query, array_values($values));

        //retorna o id inserido
        return $this->connection->lastInsertId();
    }
}