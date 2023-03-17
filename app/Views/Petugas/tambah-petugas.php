<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<style>
    body{
        background-image:url('https://media.istockphoto.com/id/1367078593/id/vektor/latar-belakang-modern-abu-abu-abstrak.jpg?s=170667a&w=0&k=20&c=lzLyyn4vDPTnEZDUTa5c7mY_tazh3C6nZjsyiHjKWXk=');
    }
</style>
<h2>Penambahan Data Petugas</h2>
<p>Silahkan gunakan form dibawah ini untuk mendata petugas baru.</p>
<form method="POST" action="/petugas/simpan">
<div class="form-group">
<label class="font-weight-bold">Username</label>
<input type="text" name="txtInputUser" class="form-control" placeholder="Masukan username" autocomplete="off" autofocus>
</div>
<div class="form-group">
<label class="font-weight-bold">Nama Lengkap</label>
<input type="text" name="txtInputNama" class="form-control" placeholder="Masukan nama lengkap petugas" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">Password</label>
<input type="password" name="txtInputPassword" class="form-control" placeholder="Masukan password petugas" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">No Telphone</label>
<input  type="tel" id="phone"  name="txtInputTlp" class="form-control" placeholder="Masukan no telphone petugas" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">Level Petugas</label>
<select name="selectLevel" class="form-control">
<option value="admin">Admin</option>
<option value="petugas">Petugas</option>
</select>
</div>
<div class="form-group">
<button class="btn btn-primary">Simpan Petugas</button>
</div>
</form>
<?= $this->endSection() ?>