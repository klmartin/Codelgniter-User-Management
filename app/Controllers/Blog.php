<?php namespace App\Controllers;
class Blog extends BaseController
{
	public function index()
	{
		$session = session();
		// echo "Welcome back, ".$session->get('user_name');
		// echo "Welcome back, ".$session->get('user_name');
		// echo "Welcome back, ".$session->get('user_name');

		echo view('layouts.header');
		echo view('addblog');
		echo view('layouts.footer');
	}
}

?>
