<div class="row content">      
    <div class="col-sm-2 sidenav">      
      <p><a href="#">PESQUISA</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Pesquisar</h1>
      <p>FORMULÁRIO de Pesquisa</p>
      <hr>
      <h3>Test</h3>
      <p>Pesquisa</p>
<form name="FormListar" id="FormpListar" action="<?php echo DIRPAGE.'pesquisa/selecionar' ?>" method="post" >
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" id="Nome" name="Nome" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Cidade</label>
    <input type="text" class="form-control" id="Cidade" name="Cidade" placeholder="Cidade">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Estado</label>
    <input type="text" class="form-control" id="Estado" name="Estado" placeholder="Estado">
  </div>
    <button type="text" class="btn btn-primary">Pesquisar</button>
</form>
      </div>
      <div class="col-sm-2 sidenav">
      <div class="well">
        <p>Cad</p>
      </div>
      <div class="well">
        <p>Cad</p>
      </div>
    </div>
  </div>