<?php
class KategoriEdukasiController{
	private $KategoriPembelajaran;
	function __construct(){
		checkIfNotLogin();
		$this->KategoriPembelajaran = model('KategoriPembelajaran');
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
			return '<a href="'.base_url('kategori-edukasi/edit/'.$data['id']).'" class="btn btn-warning btn-xs">Edit</a>';
		})
		->search([
			'id',
			'nama'
		]);
		$data = [
				'title' => 'Kategori Edukasi',
				'tabel' => $tabel->run()
		];

		return view('admin/kategoriedukasi/index',$data);
	}

	function add(){
        $data = [
            'title' => 'Tambah Kategori Edukasi'
        ];

        return view('admin/kategoriedukasi/add', $data);
    }
	public function create(){
		$config = [
			'nama' => [
				'required' => true
			],
			'deskripsi' => [
				'required' => true
			],
		];

		$valid = new Validation($config);
		if($valid->run()){
            $this->KategoriPembelajaran->tambah();

            redirect('control-panel/kategori-edukasi/add');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('control-panel/kategori-edukasi/add');
        }
	}
}
?>