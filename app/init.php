<?php 
require_once BASE_PATH.'app/functions/Default.php';

spl_autoload_register(function($str){
	require_once BASE_PATH.'app/functions/'.$str.'.php';
});

DB::getInstance('localhost', 'root', '', 'simponi');