<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------

	public function show()
	{
		$data['nama'] = 'Intania Rahmadhilla';
		$data['npm'] = '1817051025';

		echo view('Mahasiswa/header');
		echo view('Mahasiswa/index', $data);
		echo view('Mahasiswa/footer');

	}

}
