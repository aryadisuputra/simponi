<?php
class LandingController
{
	private $akun;
	function __construct()
	{
		$this->akun = model('akun');

	}
	public function index(){	
		return view('landing/index');
	}

	public function login(){
		checkIfLogin();

		$data = [
			'title' => 'Login',
			'panel' => false
		];
		return view('admin/login', $data);
	}

	public function doLogin(){
		checkIfLogin();
		
		$user = Input::post('username');
		$pass = md5(Input::post('password'));


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
			if($this->akun->login($user, $pass)){
				Session::sess('login', true);
				redirect('control-panel');
			}else{
				msg('Username atau password Anda salah!', 'danger');
				redirect('login');
			}
		}else{
			msg($valid->getErrors(), 'danger');
			redirect('login');
		}
	}
}