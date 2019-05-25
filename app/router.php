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
$routes['control-panel/menu/create'] = 'MenuController@create';
$routes['control-panel/menu/add'] = 'MenuController@add';
$routes['control-panel/menu/update'] = 'MenuController@update';
$routes['control-panel/menu'] = 'menuController@index';
$routes['control-panel/menu/add'] = 'menuController@add';
$routes['control-panel/menu/create'] = 'menuController@create';
$routes['control-panel/menu/edit/:id'] = 'menuController@edit';
$routes['control-panel/menu/destroy'] = 'menuController@destroy';


//restaurant
$routes['control-panel/restaurant'] = 'RestaurantController@index';
$routes['control-panel/restaurant/edit/:id'] = 'RestaurantController@edit';

//paket
$routes['control-panel/paket'] = 'PaketController@index';
$routes['control-panel/paket/edit/:id'] = 'PaketController@edit';

//customers
$routes['control-panel/customer'] = 'CustomerController@index';
$routes['control-panel/customer/edit/:id'] = 'CustomerController@edit';

//mitra
$routes['control-panel/mitra'] = 'MitraController@index';
$routes['control-panel/mitra/edit/:id'] = 'MitrarController@edit';