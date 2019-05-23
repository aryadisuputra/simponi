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
$routes['why-simponi'] = 'LandingController@whysimponi';
$routes['contact-us'] = 'LandingController@kontak';
$routes['blog'] = 'LandingController@blog';
$routes['edukasi'] = 'LandingController@edukasi';

// dashboard
$routes['control-panel'] = 'DashboardController@index';

// edukasi
$routes['control-panel/edukasi'] = 'EdukasiController@index';

// pengguna
$routes['control-panel/pengguna'] = 'PenggunaController@index';

$routes['control-panel/kategori-edukasi'] = 'KategoriEdukasiController@index';
$routes['control-panel/kategori-produk'] = 'KategoriProdukController@index';
$routes['control-panel/produk'] = 'ProdukController@index';

$routes['control-panel/pengguna/add'] = 'PenggunaController@add';
$routes['control-panel/pengguna/create'] = 'PenggunaController@create';


// autentikasi
$routes['login'] = 'LandingController@login';
$routes['dologin'] = 'LandingController@doLogin';
$routes['logout'] = 'DashboardController@logout';

