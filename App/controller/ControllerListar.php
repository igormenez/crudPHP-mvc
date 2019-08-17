<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassListar;

class ControllerListar extends ClassListar{
    
    protected $nome;
    protected $cidade;
    protected $estado;


    public function __construct() {
        
        $render = new ClassRender();
        $render->setTitle("Listar");
        $render->setDescription("Pagina de Pesquisa");
        $render->setKeywords("banco de dados");
        $render->setDir("listar");
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
    
    public function selecionar(){ 
        
        
    $this->recVariaveis();
   $N = $this->selecao($this->nome, $this->cidade, $this->estado);
    echo '<table class="table">
  <thead>
    <tr>

      <th scope="col">Nome</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>';
    foreach ($N as $D){
        echo 
    '<tr>   
      <td>'.$D['Nome'].'</td>
      <td>'.$D['Cidade'].'</td>
      <td>'.$D['Estado'].'</td>
    </tr>'
                ;
    }   
    
    }
    
}