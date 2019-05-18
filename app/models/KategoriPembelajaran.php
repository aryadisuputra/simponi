<?php
Class KategoriPembelajaran{
	function login($user, $pass){
		try {
			$sql = "SELECT * FROM akun WHERE username = ? AND password = ?";
			$prep = DB::connection()->prepare($sql);
			$prep->execute([$user, $pass]);
			return $prep->rowCount();
		} catch (PDOException $e) {
			msg('Kesalahan : '.$e->getMessage(), 'danger');
			redirect('login');
		}
	}

	function tambah(){
	    try{
            $nama = Input::post('nama');
            $deskripsi = Input::post('deskripsi');

            $sql = "INSERT INTO kategori_pembelajaran(nama, deskripsi) VALUES(?, ?)";

            $prep = DB::connection()->prepare($sql);
            $prep->execute([$nama, $deskripsi]);

            if($prep->rowCount()){
                msg('Data berhasil dimasukkan', 'info');
            }else{
                msg('Data gagal dimasukkan', 'danger');
            }
        }catch (PDOException $e){
            msg('Kesalahan : '.$e->getMessage(), 'danger');
            redirect('control-panel/kategoriedukasi/add');
        }
    }
}