<?php
class KategoriEdukasiController{

	function __construct(){
		checkIfNotLogin();
	}

	public function index(){
		$tabel = new Table([
			'query' => [
				'sql' => 'SELECT * FROM kategori_pembelajaran'
			]
		]);

		$tabel->addRow('No',function($data,$index){
			return $index+1;
		})
		->addRow('Nama','nama')
		->addRow('Deskripsi','deskripsi')
		->addRow('Icon','icon')
		->addRow('Aksi',function($data){
			return '<a href="'.base_url('kategoriEdukasi/edit/'.$data['id']).'" class="btn btn-warning btn-xs">Edit</a>';
		})
		->search([
			'id',
			'nama'
		]);
		$data = [
				'title' => 'Kategori Edukasi',
				'tabel' => $tabel->run()
		];

		return view('admin/kategoriEdukasi/index',$data);
	}
}
?>