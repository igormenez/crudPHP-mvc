<?php
#diretório raiz
$pastaInterna = "MVC-app/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

if(substr($_SERVER['DOCUMENT_ROOT'], -1)=='/'){
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}");
}else{
 define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");
}

#definindo diretórios
define('DIRIMG',DIRPAGE."Public/img/");
define('DIRCSS',DIRPAGE."Public/css/");
define('DIRFONTS',DIRPAGE."Public/fontes/");
define('DIRJS',DIRPAGE."Public/js/");

#BANCO DE DADOS
define('HOST',"localhost");
define('DB',"quincakecarla");
define('USER',"root");
define('PASSWORD',"");