<?php namespace App\controllers;

class Helloworld extends BaseController {

	public function index($nama, $npm)
	{
//		echo $this->name;
		echo $nama."<br>";
		echo $npm."<br>";
//		echo "Hello Intan";
	}

	public function show()
	{
		echo "Intania Rahmadhilla";
		echo "1817051025";
	}
}

