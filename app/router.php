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

// dashboard
$routes['control-panel'] = 'DashboardController@index';

// edukasi
$routes['control-panel/edukasi'] = 'EdukasiController@index';

// pengguna
$routes['control-panel/pengguna'] = 'PenggunaController@index';
<<<<<<< HEAD
$routes['control-panel/kategori-edukasi'] = 'KategoriEdukasiController@index';
$routes['control-panel/kategori-produk'] = 'KategoriProdukController@index';
$routes['control-panel/produk'] = 'ProdukController@index';
=======
$routes['control-panel/pengguna/add'] = 'PenggunaController@add';
$routes['control-panel/pengguna/create'] = 'PenggunaController@create';

>>>>>>> 3ce49f5613abd37df3b2cafcf86da08e4bd4b87b
// autentikasi
$routes['login'] = 'LandingController@login';
$routes['dologin'] = 'LandingController@doLogin';
$routes['logout'] = 'DashboardController@logout';

