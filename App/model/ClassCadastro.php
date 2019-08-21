<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao{
    
    protected $Db;


    protected function cadastroCliente($NOME,$CIDADE,$ESTADO){
        $Id=0;
        $this->Db=$this->conexaoDB()->prepare("insert into pessoa values (:id,:nome,:cidade,:estado)");
        $this->Db->bindParam(":id", $Id,\PDO::PARAM_STR);
        $this->Db->bindParam(":nome", $NOME,\PDO::PARAM_STR);
        $this->Db->bindParam(":cidade", $CIDADE,\PDO::PARAM_STR);
        $this->Db->bindParam(":estado", $ESTADO,\PDO::PARAM_STR);
        $this->Db->execute();
        
        }
    
}