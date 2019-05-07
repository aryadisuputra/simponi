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


$routes['why-simponi'] = function(){
	view('landing/whysimponi');
};
$routes['default'] = 'LandingController@index';
$routes['control-panel'] = 'AdminController@index';
$routes['login'] = 'LandingController@login';
$routes['dologin'] = 'LandingController@doLogin';
$routes['logout'] = 'AdminController@logout';
