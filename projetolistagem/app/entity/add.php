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

    public function cadastrar(){
        $obDatabase = new database('listagem');
        $obDatabase->insert([
            'nomeAluno' => $this->nomeAluno,
            'idade' => $this->idade,
            'cep' => $this->cep,
            'rua' => $this->rua,
            'numEndereco' => $this->numEndereco
        ]);
    }
}

