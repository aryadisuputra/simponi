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
$routes['home'] = 'LandingController@home';
$routes['pesan'] = 'LandingController@pesan';
$routes['reservasi'] = 'LandingController@reservasi';
$routes['konfreservasi'] = 'LandingController@konfreservasi';
$routes['konfpesan'] = 'LandingController@konfpesan';
$routes['login'] = 'LandingController@login';
$routes['dologin'] = 'LandingController@dologin';
$routes['register'] = 'LandingController@register';
$routes['logout'] = 'DashboardController@logout';
$routes['control-panel'] = 'DashboardController@index';

// dashboard


//menu
$routes['control-panel/menu'] = 'MenuController@index';
$routes['control-panel/menu/edit/:id'] = 'MenuController@edit';	