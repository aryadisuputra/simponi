<?php
class PaketController{
	private $Paket;
	function __construct(){
		checkIfNotLogin();
		$this->Paket = model('paket');
	}

	public function index(){
		$tabel = new Table([
			'query' => [
				'sql' => 'SELECT * FROM tb_paket'
			]
		]);

		$tabel->addRow('No',function($data,$index){
			return $index+1;
		})
		->addRow('Id Paket','id_paket')
		->addRow('Nama Paket','nama_paket')
		->addRow('Harga Paket','harga_paket')
		->addRow('Gambar Paket','gambar_paket')
		->addRow('Aksi',function($data){
			 return '<a href="'.base_url('menu/edit/'.$data['id_paket']).'" class="btn btn-warning btn-xs">Edit</a>';
		})
		->search([
			'id_paket',
			'nama_paket',
			'harga_paket',
			'gambar_paket'
		]);
		$data = [
				'title' => 'Paket Restaurant',
				'tabel' => $tabel->run()
		];

		return view('admin/menu/index',$data);
	}

	
	
}
?>