<!DOCTYPE HTML>

<html>

<head>
    <meta  charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta  name="author" content=""/>
    <meta name="descritpion" content="<?php echo $this->getDescription();?>" />
    <meta name="Keywords" content="<?php echo $this->getKeywords();?>" />
    <?php echo $this->addHead()?>
    
	<title><?php echo $this->getTitle();?></title>
        <link rel="stylesheet" href="<?php echo DIRCSS.'Style.css' ?>" />
</head>

<body>    
    <div class="Header">
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php? echo DIRPAGE;?>">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home">Home</a></li>
        <li><a href="cadastro">Cadastro</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
      <?php echo $this->addHeader(); ?>       
        
    </div>
    
    <div class="Main">
        
        
        <div class="container-fluid text-center">   
            <?php   $breadcrumb = new Src\Classes\ClassBreadCrumb();
                $breadcrumb->addBreadcrum();?>
            <?php echo $this->addMain();?>
  
</div>
        
        
    </div>
    
    <div class="Footer">
        
        <footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

        <?php echo $this->addFooter();?>
    </div>

	
</body>

</html>

