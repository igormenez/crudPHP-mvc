<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassListar extends ClassConexao{
    
    public function recVariaveis(){ 
        if(isset($_POST['Nome'])){
            $this->nome= filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS);
        }        
        
        if(isset($_POST['Cidade'])){
            $this->cidade= filter_input(INPUT_POST,'Cidade',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        if(isset($_POST['Estado'])){
            $this->estado= filter_input(INPUT_POST,'Estado',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
    }
    
    protected function selecao($Nome,$Cidade,$Estado){
        $Nome="%".$Nome;
        $Cidade="%".$Cidade;
        $Estado="%".$Estado;
        $BFetch= $this->Db=$this->conexaoDB()->prepare("select * from pessoa where Nome like :nome and Cidade like :cidade and Estado like :estado");
       
        $BFetch->bindParam(":nome", $Nome,\PDO::PARAM_STR);
        $BFetch->bindParam(":cidade", $Cidade,\PDO::PARAM_STR);
        $BFetch->bindParam(":estado", $Estado,\PDO::PARAM_STR);
        $BFetch->execute();
        $I=0;
        while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
            $array[$I]=['Nome'=>$Fetch['nome'],'Cidade'=>$Fetch['cidade'],'Estado'=>$Fetch['estado']];
            $I++;
            
        }
        return $array;        
        
    }
   
}