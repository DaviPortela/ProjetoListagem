<?php
namespace App\entity;

use \App\db\database;

class add{
    
    public $id;
    public $nomeAluno;
    public $cep;
    public $rua;
    public $email;
    public $senha;
    
    public function cadastrar(){
        $obDatabase = new database('listagem');
        $this->id = $obDatabase->insert([
            'nomeAluno' => $this->nomeAluno,
            'cep' => $this->cep,
            'rua' => $this->rua,
            'email' => $this->email,
            'senha' => $this->senha
        ]);
        
        return true;
    }
}

