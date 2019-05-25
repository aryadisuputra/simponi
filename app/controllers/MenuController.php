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
	function add(){
        $data = [
            'title' => 'Tambah Menu'
        ];

        return view('admin/menu/add', $data);
    }

    function create(){
         $config = [
            'nama_menu' => [
                'required' => true
            ],
            'jenis_menu' => [
                'required' => true
            ],
            'harga_menu' => [
                'required' => true
            ],
        ];

        $valid = new Validation($config);

        if($valid->run()){
            $this->Menu->tambah();

            redirect('control-panel/menu/add');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('control-panel/menu/add');
        }
    }

    function edit($id){
        $menu = $this->menu->getById($id);

        if($menu === false){
            abort(404);
        }

        $data = [
            'title' => 'Edit Menu '.$menu->jenis_menu,
            'item'  => $menu
        ];

        return view('admin/menu/edit', $data);
    }

    function destroy(){
        $config = [
            'id_menu' => [
                'required' => true
            ]
        ];

        $valid = new Validation($config);

        if($valid->run()){
            $this->menu->hapus();

            redirect('control-panel/menu');
        }else{
            msg($valid->getErrors(), 'danger');
            redirect('control-panel/menu');
        }
    }
	
	
}
?>