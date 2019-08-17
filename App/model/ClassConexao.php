<?php

namespace App\Model;

/*abstract*/ 
 class ClassConexao{
    
    #CONEXAO COM BANCO DE DADOS
    public function conexaoDB(){
        try{
            $cons=new \PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PASSWORD);
            return $cons;
                
        } catch (\PDOException $ER) {
            return $ER->getMessage(); 
        }
    }
}