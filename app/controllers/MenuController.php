<?php
class MenuController{
	private $Menu;
	function __construct(){
		checkIfNotLogin();
		$this->Menu = model('menu');
	}

	public function index(){
		$tabel = new Table([
			'query' => [
				'sql' => 'SELECT * FROM tb_menu'
			]
		]);

		$tabel->addRow('No',function($data,$index){
			return $index+1;
		})
		->addRow('Nama','nama_menu')
		->addRow('Jenis Menu','jenis_menu')
		->addRow('Harga Menu','harga_menu')
		->addRow('Aksi',function($data){
			 return '<a href="'.base_url('menu/edit/'.$data['id_menu']).'" class="btn btn-warning btn-xs">Edit</a>';
		})
		->search([
			'nama_menu',
			'jenis_menu'
		]);
		$data = [
				'title' => 'Menu Resto',
				'tabel' => $tabel->run()
		];

		return view('admin/menu/index',$data);
	}

	
	
}
?>