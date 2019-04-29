<?php 

class AdminController
{
	public function index(){
		$data = [
			'title' => 'Dashboard'
		];
		return view('admin/dashboard/index');
	}

	public function login(){
		$data = [
			'title' => 'Login',
			'panel' => false
		];
		return view('admin/login', $data);
	}

	public function doLogin(){
		$user = Input::post('username');
		$pass = Input::post('password');


		$config = [
			'username' => [
				'required' => true,
			],
			'password' => [
				'required' => true
			]
		];

		$valid = new Validation($config);
		if($valid->run()){
			if($user === 'admin' && $pass === 'admin'){
				return redirect('control-panel');
			}else{
				msg('Tidak dapat login', 'danger', 'Admin');
				return redirect('login');
			}
		}else{
			msg($valid->getErrors(), 'danger');
			redirect('login');
		}
	}
}