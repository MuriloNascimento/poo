<?php
	
namespace Classes;

class Usuario
{
    
    public function __construct()
    {
        echo "carregando a classe usuario";
    }
    
    public function __destruct() {
        echo "destruindo";
    }
}