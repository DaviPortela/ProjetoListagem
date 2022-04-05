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
        try {
            $this->connection = new PDO('mysql:host=' . self::HOST . ';' . 'dbname:' . self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            //isso não vai aparecer pro cliente no resultado final, só ta ai por enquanto para teste
            die('Erro' . $e->getMessage());
        }
    }

    //insere dados no banco
    public function insert($values){
        $query = 'INSERT INTO' . $this->table . '(nomeAluno, idade, cep, rua, numEndereco) VALUES (?,?,?,?,?)';
    }
}