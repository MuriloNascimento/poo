<?php

require_once '/home/murilo/Downloads/Smarty-3.1.21/libs/Smarty.class.php';
$sm = new Smarty();

$template_dir = "/var/www/poo/view/";
$compile_dir = "/var/www/poo/templates_c/";

$sm->setTemplateDir($template_dir);
$sm->setCompileDir($compile_dir);