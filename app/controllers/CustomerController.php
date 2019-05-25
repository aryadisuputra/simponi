<?php
class CustomerController{
	private $Customer;
	function __construct(){
		checkIfNotLogin();
		$this->Customer = model('customer');
	}

	public function index(){
		$tabel = new Table([
			'query' => [
				'sql' => 'SELECT * FROM tb_customer'
			]
		]);

		$tabel->addRow('No',function($data,$index){
			return $index+1;
		})
		->addRow('Username','username')
		->addRow('Password','password')
		->addRow('No Telepon','notlp_customer')
		->addRow('Aksi',function($data){
			 return '<a href="'.base_url('menu/edit/'.$data['id_customer']).'" class="btn btn-warning btn-xs">Edit</a>';
		})
		->search([
			'username',
			'password',
			'notlp_customer'
		]);
		$data = [
				'title' => 'Customer',
				'tabel' => $tabel->run()
		];

		return view('admin/menu/index',$data);
	}

	
	
}
?>