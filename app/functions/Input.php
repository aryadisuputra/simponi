<?php 

class Input
{
	static function post($str){
		return isset($_POST[$str]) ? $_POST[$str] : null;
	}

	static function get($str){
		return isset($_GET[$str]) ? $_GET[$str] : null;
	}

	static function url($index){
        $urls = explode('/', trim(filter_var(str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['PHP_SELF']), FILTER_SANITIZE_URL), "/"));
        if(isset($urls[$index]))
            return $urls[$index];
        else return null;
    }
}