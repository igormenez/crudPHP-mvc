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
define('DIRIMG',DIRPAGE."public/img/");
define('DIRCSS',DIRPAGE."public/css/");
define('DIRFONTS',DIRPAGE."public/fontes/");
define('DIRJS',DIRPAGE."public/js/");

#BANCO DE DADOS
define('HOST',"localhost");
define('DB',"quincakecarla");
define('USER',"root");
define('PASSWORD',"");