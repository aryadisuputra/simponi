<?php
class MitraController{
	private $Mitra;
	function __construct(){
		checkIfNotLogin();
		$this->Mitra = model('mitra');
	}

	public function index(){
		$tabel = new Table([
			'query' => [
				'sql' => 'SELECT * FROM tb_mitraresto'
			]
		]);

		$tabel->addRow('No',function($data,$index){
			return $index+1;
		})
		->addRow('Username','username')
		->addRow('Password','password')
		->addRow('Nama Mitra','nama_mitra')
		->addRow('No Telepon','no_telp')
		->addRow('Aksi',function($data){
			 return '<a href="'.base_url('menu/edit/'.$data['id_owner']).'" class="btn btn-warning btn-xs">Edit</a>';
		})
		->search([
			'username',
			'password',
			'nama_mitra',
			'no_telp'
		]);
		$data = [
				'title' => 'Mitra',
				'tabel' => $tabel->run()
		];

		return view('admin/menu/index',$data);
	}

	
	
}
?>