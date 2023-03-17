<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboardpetugas extends BaseController
{
	public function index()
	{
		$data['intro']='<div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
		<div class="d-flex justify-content-center align-items-center h-100">
		  <div class="text-white">
		  
		   <h1>Selamat Datang, '.session()->get('username').'</h1>
		   <hr color="red" size="20">
		<p>Silahkan gunakan halaman ini untuk menampilkan informasi Pengaduan Masyarakat anda !</p>
		<a class="btn btn-outline-light btn-lg" href="/verifikasi" role="button">Kelola Pengaduan</a>
		  </div>
		</div>
 ';
		return view ('dashboard', $data);
	}
}
