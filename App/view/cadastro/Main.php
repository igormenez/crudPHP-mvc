<div class="row content">      
    <div class="col-sm-2 sidenav">      
      <p><a href="#">CADASTRO</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Cadastro</h1>
      <p>FORMULÁRIO</p>
      <hr>
      <h3>Test</h3>
      <p>Cadastro</p>
      <form name="FormListar" id="FormCadastro" action="<?php echo DIRPAGE.'cadastro/cadastrar' ?>" method="post">
  <div class="form-group">
    <label for="Nome">Nome</label>
    <input type="text" id="Nome" name="Nome"  class="form-control"  aria-describedby="emailHelp" placeholder="Seu nome">
    <small id="emailHelp" class="form-text text-muted">Nome Completo.</small>
  </div>
  <div class="form-group">
    <label for="Cidade">Cidade</label>
    <input type="text" id="Cidade" name="Cidade" class="form-control"   placeholder="Sua Cidade">    
  </div>
  <div class="form-group">
    <label for="Estado">Estado</label>
    <input type="text" id="Estado" name="Estado" class="form-control" placeholder="Seu Estado">
    
  </div>
    
          <button type="submit" value="cadastrar" class="btn btn-primary">Cadastrar</button>
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