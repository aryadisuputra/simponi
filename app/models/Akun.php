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
}