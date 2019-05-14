<?php
	class ProdukController{
		function __construct(){
			checkIfNotLogin();
		}
		public function index(){
			$tabel = new Table([
				'query' => [
					'sql' => 'SELECT * FROM produk'
				]
			]);
			$tabel->addRow('No',function($data,$index){
				return $index+1;
			})
			->addRow('Nama','nama')
			->addRow('Harga Jual','harga_jual')
			->addRow('Harga Beli','harga_beli')
			->addRow('Stok','stok')
			->addRow('Aksi',function($data){
				return '<a href="'.base_url('kategoriProduk/edit/'.$data['id']).'" class="btn btn-warning btn-xs">Edit</a>';
			})
			->search([
				'id',
				'nama',
				'stok'
			]);
			$data = [
				'title' => 'Produk',
				'tabel' => $tabel->run()
			];

			return view('admin/produk/index',$data);
		}
	}
?>