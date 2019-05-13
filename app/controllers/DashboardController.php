<?php 

class DashboardController
{
	private $akun;

	function __construct()
	{
		$this->akun = model('akun');

		checkIfNotLogin();
	}

	public function index(){
		$data = [
			'title' => 'Dashboard'
		];

		return view('admin/dashboard/index', $data);
	}

	public function logout(){
		session_destroy();
		redirect('login');
	}
}