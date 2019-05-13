<?php

class PenggunaController
{
    function __construct()
    {
        checkIfNotLogin();
    }

    public function index(){
        $tabel = new Table([
            'query' => [
                'sql' => 'SELECT * FROM akun'
            ]
        ]);
        $tabel->addRow('No', function ($data, $index){
                return $index+1;
            })
            ->addRow('Email', 'email')
            ->addRow('Username', 'username')
            ->addRow('Hak Akses', function ($data){
                if($data['hak_akses'] == 1){
                    $hak_akses = 'Admin';
                }else if($data['hak_akses'] == 2){
                    $hak_akses = 'Supplier';
                }else{
                    $hak_akses = 'Petani';
                }

                return '<label class="badge badge-info">'.$hak_akses.'</label>';
            })
            ->addRow('Aksi', function ($data){
                return '<a href="'.base_url('pengguna/edit/'.$data['id']).'" class="btn btn-warning btn-xs">Edit</a>';
            })
            ->search([
                'id',
                'username'
            ]);


        $data = [
            'title' => 'Pengguna',
            'tabel' => $tabel->run()
        ];

        return view('admin/pengguna/index', $data);
    }

}