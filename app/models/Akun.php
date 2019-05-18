<?php 
class Akun{
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
            $nama_depan = Input::post('nama_depan');
            $nama_belakang = Input::post('nama_belakang');
            $jenis_kelamin = Input::post('jenis_kelamin');
            $tgl_lahir = Input::post('tgl_lahir');
            $email = Input::post('email');
            $username = Input::post('username');
            $password = md5(Input::post('password'));


            $sql = "INSERT INTO akun(email, username, password, hak_akses) VALUES(?, ?, ?, 3)";

            $prep = DB::connection()->prepare($sql);
            $prep->execute([$email, $username, $password]);

            $id_user = DB::connection()->lastInsertId();

            $sql = "INSERT INTO petani(nama_depan, nama_belakang, jenis_kelamin, tgl_lahir, foto, id_user) VALUES(?, ?, ?, ?, ?, ?)";

            $prep = DB::connection()->prepare($sql);
            $prep->execute([$nama_depan, $nama_belakang, $jenis_kelamin, $tgl_lahir, '', $id_user]);

            if($prep->rowCount()){
                msg('Data berhasil dimasukkan', 'info');
            }else{
                msg('Data gagal dimasukkan', 'danger');
            }
        }catch (PDOException $e){
            msg('Kesalahan : '.$e->getMessage(), 'danger');
            redirect('control-panel/pengguna/add');
        }
    }
}