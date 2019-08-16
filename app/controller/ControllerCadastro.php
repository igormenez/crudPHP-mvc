<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerCadastro extends ClassRender implements InterfaceView{
    
    public function __construct() {
        $this->setTitle("Cadastro");
        $this->setDescription("Programadooor MVC PHP");
        $this->setKeywords("MVCCCC");
        $this->setDir("cadastro");
        $this->renderLayout();
    }
    
    public function teste(){
        echo 'POPRRAA';
    }
}