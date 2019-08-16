<?php

namespace App;

use Src\Classes\ClassRoutes;

Class Dispatch extends ClassRoutes{
    
    #Atributos
    private $Method;
    private $Param=[];
    private $Obj;
    
    #encapsulamento dos atributos
    protected function getMethod(){
        return $this->Method;
    }
    public function setMethod($Method){
        $this->Method = $Method;
    }
    
    protected function getParam(){
        return $this->Param;
    }
    
    public function setParam($Param){
        $this->Param=$Param;
    }


    #Metodo Construtor
    public function __construct() {
        self::addController();
    }
    
    private function addController(){
        
        $RoteController = $this->getRota();
        $NameSpace="App\\Controller\\{$RoteController}";
        $this->Obj=new $NameSpace;
        
        if(isset($this->parseUrl()[1])){
            self::addMethod();
        }
    }
    private function addMethod(){
        if(method_exists($this->Obj, $this->parseUrl()[1])){
            $this->setMethod("{$this->parseUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj, $this->getMethod()], $this->getParam() );
        }
    }
    private function addParam(){
        $ContArray = count($this->parseUrl());
        if($ContArray > 2){
            foreach ($this->parseUrl() as $Key => $Value){
                if($Key>1){
                    $this->setParam($this->Param +=[$Key => $Value]);
                }
            }
        }
    }
    
}