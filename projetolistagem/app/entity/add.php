<?php
namespace App\entity;

use \App\db\database;

class add{
    
    public $id;
    public $nomeAluno;
    public $idade;
    public $cep;
    public $rua;
    public $numEndereco;
    public $email;
    public $senha;
    
    public function cadastrar(){
        $obDatabase = new database('listagem');
        $this->id = $obDatabase->insert([
            'nomeAluno' => $this->nomeAluno,
            'idade' => $this->idade,
            'cep' => $this->cep,
            'rua' => $this->rua,
            'numEndereco' => $this->numEndereco,
            'email' => $this->email,
            'senha' => $this->senha
        ]);

        return true;
    }
}

