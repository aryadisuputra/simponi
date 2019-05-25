<?php
class RestaurantController{
	private $Restaurant;
	function __construct(){
		checkIfNotLogin();
		$this->Restaurant = model('restaurant');
	}

	public function index(){
		$tabel = new Table([
			'query' => [
				'sql' => 'SELECT * FROM tb_resto'
			]
		]);

		$tabel->addRow('No',function($data,$index){
			return $index+1;
		})
		->addRow('Nama Restaurant','nama_restoran')
		->addRow('Jenis','jenis')
		->addRow('Alamat','alamat_resto')
		->addRow('Jadwal Buka','jadwal_buka')
		->addRow('Jadwal Tutup','jadwal_tutup')
		->addRow('Gambar','gambar_resto')
		->addRow('Deskripsi','deskripsi')
		->addRow('Aksi',function($data){
			 return '<a href="'.base_url('menu/edit/'.$data['id_resto']).'" class="btn btn-warning btn-xs">Edit</a>';
		})
		->search([
			'nama_restoran',
			'jenis',
			'alamat_resto',
			'jadwal_buka',
			'jadwal_tutup',
			'gambar_resto',
			'deskripsi'
		]);
		$data = [
				'title' => 'Restaurant',
				'tabel' => $tabel->run()
		];

		return view('admin/menu/index',$data);
	}

	
	
}
?>