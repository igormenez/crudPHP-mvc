<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCadastro;

class ControllerCadastro extends ClassCadastro{
    
    protected $nome;
    protected $cidade;
    protected $estado;
    
    public function __construct() {
        
        $render = new ClassRender();
        $render->setTitle("Cadastro");
        $render->setDescription("Programadooor MVC PHP");
        $render->setKeywords("MVCCCC");
        $render->setDir("cadastro");
        $render->renderLayout();
    }
    
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
    
    public function cadastrar(){
        $this->recVariaveis();
        parent::cadastroCliente($this->nome, $this->cidade, $this->estado);
        echo 'cadastro efetuado';
    }
}