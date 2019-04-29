<?php 
/*
Contoh menggunakan router


Yang ini kalo mau pake class 
	$routes['admin/:param'] = 'Landing@admin';

Yang ini kalo mau pake prosedural
	$routes['admin/:param'] = function($halo){
		echo $halo;
	};

Yang ini routes default
	$routes['default'] = 'Landing@index';

*/

$routes['default'] = 'LandingController@index';
$routes['control-panel'] = 'AdminController@index';
$routes['login'] = 'AdminController@login';
$routes['dologin'] = 'AdminController@doLogin';
