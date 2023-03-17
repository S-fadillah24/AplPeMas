<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboardmasyarakat extends BaseController
{
	public function index()
	{
		$data['intro']='<div class="jumbotron mt-5">
		<h1>Selamat Datang, '.session()->get('username').'</h1>
		<hr color="red" size="20">
		<p>Silahkan gunakan halaman ini untuk menampilkan informasi Pengaduan Masyarakat anda !</p>
	  </div>';
		return view ('Masyarakat/Dashboard', $data);
	}
}
