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
	return view('landing/whysimponi');
};
$routes['default'] = 'LandingController@index';

// control panel
$routes['control-panel'] = 'DashboardController@index';
$routes['control-panel/edukasi'] = 'EdukasiController@index';
$routes['control-panel/pengguna'] = 'PenggunaController@index';

// autentikasi
$routes['login'] = 'LandingController@login';
$routes['dologin'] = 'LandingController@doLogin';
$routes['logout'] = 'DashboardController@logout';
