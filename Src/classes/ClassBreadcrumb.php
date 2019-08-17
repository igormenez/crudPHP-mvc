<?php

namespace Src\Classes;

class ClassBreadCrumb {
    
    use \Src\Traits\TraitUrlParser;
    
    #cria breadcrumb
    public function addBreadcrum(){
        $contador = count($this->parseUrl());
        $link[0]='';
        echo "<a href=".DIRPAGE.">home</a> >"; 
        for($I=0;$I<$contador;$I++){
            $link[0].= $this->parseUrl()[$I].'/';
                echo " <a href=".DIRPAGE.$link[0].">".$this->parseUrl()[$I]."</a>";               
         if($I<$contador - 1){
                echo ">"; 
            }
            
            
        }
    }
}
    
