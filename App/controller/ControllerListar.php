<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassListar;

class ControllerListar extends ClassListar{
    protected $Id;
    protected $Nome;
    protected $Cidade;
    protected $Estado;

    use \Src\Traits\TraitUrlParser;

    public function __construct() {
        
        if(count($this->parseUrl())==1){
        $render = new ClassRender();
        $render->setTitle("Listar");
        $render->setDescription("Pagina de Pesquisa");
        $render->setKeywords("banco de dados");
        $render->setDir("listar");
        $render->renderLayout();    
        }
        
    }  
    
     public function recVariaveis(){ 
        if(isset($_POST['Id'])){
            $this->Id= $_POST['Id'];
        }
        if(isset($_POST['Nome'])){
            $this->Nome= filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_SPECIAL_CHARS);
        }        
        
        if(isset($_POST['Cidade'])){
            $this->Cidade= filter_input(INPUT_POST,'Cidade',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
        if(isset($_POST['Estado'])){
            $this->Estado= filter_input(INPUT_POST,'Estado',FILTER_SANITIZE_SPECIAL_CHARS);
        }
        
    }
   
    public function selecionar(){       
        
    $this->recVariaveis();
   $N = $this->selecao($this->Nome, $this->Cidade, $this->Estado);
    echo '<form name="FormDeletar" id="FormDeletar" action="'.DIRPAGE.'pesquisa/deletar" method="post">'.
           '<table class="table">
  <thead>
    <tr>
      <th scope="col">Delete</th>
      <th scope="col">Edit</th>
      <th scope="col">Nome</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>';
    foreach ($N as $D){
        echo 
    '<tr>'.   
       '<td><input type="checkbox" id="Id" name="Id[]" value="'.$D['Id'].'"/></td>'.
      '<td><img src="'.DIRIMG.'edit.png" alt="edit" rel="'.$D['Id'].'" id="ImageEdit"/></td>'.
      '<td>'.$D['Nome'].'</td>'.
      '<td>'.$D['Cidade'].'</td>'.
      '<td>'.$D['Estado'].'</td>
    </tr>';}
    echo '<button type="text" class="btn btn-secondary">Deletar</button>
    </form>';
    }
    
    #deletar cadastro
    public function deletar(){
        $this->recVariaveis();        
        foreach ($this->Id as $IdDeletar){
            $this->deletarPessoa($IdDeletar);
        }
    }
    #Buscar no banco de dados
    public function buscarDB($Id){
        $this->recVariaveis();
        $B= $this->selecao($this->Nome, $this->Cidade, $this->Estado);
        foreach($B as $D){
            if($D['Id']==$Id){
                $Nome =  $D['Nome'];
                $Cidade = $D['Cidade'];
                $Estado = $D['Estado'];
            }
            
        }
        echo " <h1>Atualizar Formulario</h1>
        <form name='FormAtualizar' id='FormAtualizar' action='". DIRPAGE."pesquisa/atualizar/".$Id."' method='post' >.
  <div class='form-group'>
    <label for='exampleFormControlInput1'>Nome</label>
    <input type='hidden' value='".$Id."' id='Id' name='Id'>
    <input type='text' class='form-control' value='".$Nome."' id='Nome' name='Nome' placeholder='Nome'>
  </div>
  <div class='form-group'>
    <label for='exampleFormControlInput1'>Cidade</label>
    <input type='text' class='form-control' value='".$Cidade."' id='Cidade' name='Cidade' placeholder='Cidade'>
  </div>
    <div class='form-group'>
    <label for='exampleFormControlInput1'>Estado</label>
    <input type='text' class='form-control' id='Estado' value='".$Estado."' name='Estado' placeholder='Estado'>
  </div>
    <button type='text' class='btn btn-primary'>Atualizar</button>
</form>";
    }
    
    #Atualizar banco de dados
    public function atualizar(){
        $this->recVariaveis();
        $this->atualizaCadastro($this->Id, $this->Nome, $this->Cidade, $this->Estado);
        echo 'Cadastro feito';
    }
    
}