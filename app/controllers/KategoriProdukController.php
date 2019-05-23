<?php
	class KategoriProdukController{
		function __construct(){
			checkIfNotLogin();
		}

		public function index(){
			$tabel = new Table([
				'query' => [
					'sql' => 'SELECT * FROM kategori_produk'
				]

			]);

			$tabel->addRow('No',function($data,$index){
				return $index+1;
			})
			->addRow('ID','id')
			->addRow('Nama','nama')
			->addRow('Aksi',function($data){
				return '<a href="'.base_url('kategoriProduk/edit/'.$data['id']).'" class="btn btn-warning btn-xs">Edit</a>';
			})
			->search([
				'id',
				'nama'
			]);

			$data = [
				'title' => 'Kategori Produk',
				'tabel' => $tabel->run()
			];

			return view('admin/kategoriProduk/index',$data);
		}
		
	}
	
?>