<?php

class EdukasiController
{
    function __construct()
    {
        checkIfNotLogin();
    }

    public function index(){

        $data = [
            'title' => 'Edukasi'
        ];

        return view('admin/edukasi/index', $data);
    }

}