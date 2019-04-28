<?php
class Landing
{
	public function index(){
		// echo $str;	
		return view('landing/index');
	}

	public function admin($str){
		echo $str;
		return;
	}
}