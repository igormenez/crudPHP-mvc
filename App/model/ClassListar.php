<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassListar extends ClassConexao{
    
   
    
    protected function selecao($Nome,$Cidade,$Estado){
        $Nome='%'.$Nome.'%';
        $Cidade='%'.$Cidade.'%';
        $Estado='%'.$Estado.'%';
        $BFetch= $this->Db=$this->conexaoDB()->prepare("select * from pessoa where Nome like :nome and Cidade like :cidade and Estado like :estado");
       
        $BFetch->bindParam(":nome", $Nome,\PDO::PARAM_STR);
        $BFetch->bindParam(":cidade", $Cidade,\PDO::PARAM_STR);
        $BFetch->bindParam(":estado", $Estado,\PDO::PARAM_STR);
        $BFetch->execute();
        $I=0;
        while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
            $array[$I]=['Id'=>$Fetch['id'],'Nome'=>$Fetch['nome'],'Cidade'=>$Fetch['cidade'],'Estado'=>$Fetch['estado']];
            $I++;            
        }
        return $array;     
    }
    
    #deletar
    protected function deletarPessoa($Id){
        $BFetch= $this->Db= $this->conexaoDB()->prepare("delete from pessoa where Id=:id");
        $BFetch->bindParam(":id", $Id,\PDO::PARAM_INT);
        $BFetch->execute();
    }
    #Atualizar 
    protected function atualizaCadastro($Id,$Nome,$Cidade,$Estado){
        $BFetch= $this->Db=$this->conexaoDB()->prepare("update pessoa set Nome=:nome, Cidade=:cidade, Estado=:estado where Id=:id");
       $BFetch->bindParam(":id", $Id,\PDO::PARAM_INT);
        $BFetch->bindParam(":nome", $Nome,\PDO::PARAM_STR);
        $BFetch->bindParam(":cidade", $Cidade,\PDO::PARAM_STR);
        $BFetch->bindParam(":estado", $Estado,\PDO::PARAM_STR);
        $BFetch->execute();
        
    }
   
}