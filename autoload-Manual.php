<?php

function __autoload($class_name){
    if (file_exists(__DIR__.'/Vendas/'.$class_name.'.php')){
            require_once __DIR__.'/Vendas/'.$class_name.'.php';
       }
}