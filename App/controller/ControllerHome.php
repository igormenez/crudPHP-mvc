<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;


Class ControllerHome extends ClassRender implements InterfaceView{
    
    
    public function __construct() {
        $this->setTitle("Página inicial");
        $this->setDescription("Programadooor MVC PHP");
        $this->setKeywords("MVCCCC");
        $this->setDir("home");
        $this->renderLayout();
    }
    
    
    
}