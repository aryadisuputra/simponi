<?php 

if(!function_exists('load')){
	function load($str){
		require BASE_PATH.'app/controllers/'.ucfirst($str).'.php';
	}
}

if(!function_exists('model')){
	function model($str){
		require BASE_PATH.'app/models/'.ucfirst($str).'.php';
	}
}

if(!function_exists('view')){
	function view($str, $data = []){
		extract($data);
		require BASE_PATH.'app/views/'.$str.'.php';
	}
}

if(!function_exists('redirect')){
	function redirect($str){
		header('location: '.$str);
	}
}

if(!function_exists('base_url')){
	function base_url($str = ""){
		$http = 'http'.((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 's' : '').'://';
		$url  = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
		return $http.$_SERVER['HTTP_HOST'].$url.$str;
	}
}

