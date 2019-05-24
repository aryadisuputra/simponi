<?php

class Edukasi{
    public function tambah(){
        try{
            DB::connection()->beginTransaction();
            $judul = Input::post('judul');
            $deskripsi = Input::post('deskripsi');
            $tipe_pembelajaran = Input::post('jenis_pembelajaran');
            if($tipe_pembelajaran ===  'text'){
                $konten = Input::post('konten');
            }else if($tipe_pembelajaran === 'video'){
                $konten = Input::post('video');
            }else{
                $konten = '';
            }

            $urutan = Input::post('urutan');
            $slug = url_slug($judul);

            $id_kategori_pembelajaran = Input::post('kategori');
            $status = 'aktif';

            $sql = "INSERT INTO pembelajaran(judul, deskripsi, konten, tipe_pembelajaran, status, id_kategori_pembelajaran, urutan, slug) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

            $prep = DB::connection()->prepare($sql);
            $prep->execute([$judul, $deskripsi, $konten, $tipe_pembelajaran, $status, $id_kategori_pembelajaran, $urutan, $slug]);


            if($prep->rowCount()){
                msg('Data berhasil dimasukkan', 'info');
            }else{
                msg('Data gagal dimasukkan', 'danger');
            }

            DB::connection()->commit();
        }catch (PDOException $e){
            DB::connection()->rollBack();
            msg('Kesalahan : '.$e->getMessage(), 'danger');
            redirect('control-panel/edukasi/add');
        }
    }
}