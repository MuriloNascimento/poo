<?php 

define('WWW_ROOT',dirname( __FILE__ ));
define('DS', DIRECTORY_SEPARATOR );

require_once(WWW_ROOT . DS . 'autoload.php');
include './smConfig.php';

$sm->assign("nome","Murilo");

$sm->display('index.tpl');


  espetaculo
    - nome
    - autor
    - data
    - duracao

  reserva
    - status
    - cpf
    - nome
    - espetaculo
    - poltrona

  poltronas
    - numero
    - preco
