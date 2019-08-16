<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao{
    
    private $Db;
    
    protected function cadastroCliente($NOME,$CIDADE,$ESTADO){
        $Id=0;
        $this->Db= $this->conexaoDB()->prepare("inset into pessoa values (:id,:nome,:cidade,:estado)");
        $this->Db->bindParam(":id", $Id,\PDO::PARAM_INT);
        $this->Db->bindParam(":nome", $NOME,\PDO::PARAM_INT);
        $this->Db->bindParam(":cidade", $CIDADE,\PDO::PARAM_INT);
        $this->Db->bindParam(":estado", $ESTADO,\PDO::PARAM_INT);
        $this->Db->execute();
    }
}