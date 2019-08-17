<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao{
    
    
    
    protected function cadastroCliente($NOME,$CIDADE,$ESTADO){
        $Id=0;
        $BFetch=$this->conexaoDB()->prepare("insert into pessoa values (:id,:nome,:cidade,:estado)");
        
        $BFetch->bindParam(":nome", $NOME,\PDO::PARAM_STR);
        $BFetch->bindParam(":cidade", $CIDADE,\PDO::PARAM_STR);
        $BFetch->bindParam(":estado", $ESTADO,\PDO::PARAM_STR);
        $BFetch->execute();
        
        $I=0;
        while ($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
            $ARR[$Id]=['Nome'=>$Fetch['nome'],'Cidade'=>$Fetch['cidade'],'Estado'=>$Fetch['estado']];
            $I++;    
            }
            return $ARR;
    }
    
}