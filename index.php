<?php 

define('WWW_ROOT',dirname( __FILE__ ));
define('DS', DIRECTORY_SEPARATOR );

require_once(WWW_ROOT . DS . 'autoload.php');
include './smConfig.php';

$sm->assign("nome","Murilo");

$sm->display('index.tpl');


- carro
nome
cor
data_compra
quilometragem


- categoria
nome


- peca
categoria
nome


- revisao
carro
peca
data_troca
custo_peca
curto_mao_de_obra
quilometragem
quilometragem_proxima_troca
