<?= $this->extend('dashboard') ?>
<?= $this->section('content') ?>
<style>
    body{
        background-image:url('https://media.istockphoto.com/id/1367078593/id/vektor/latar-belakang-modern-abu-abu-abstrak.jpg?s=170667a&w=0&k=20&c=lzLyyn4vDPTnEZDUTa5c7mY_tazh3C6nZjsyiHjKWXk=');
    }
</style>
<h2>Penambahan Data Masyarakat</h2>
<p>Silahkan gunakan form dibawah ini untuk mendata Masyarakat baru.</p>
<form method="POST" action="/masyarakat/simpan">
<div class="form-group">
<label class="font-weight-bold">Nik</label>
<input type="text" name="txtInputNik" maxlength="16" class="form-control" placeholder="Masukan NIK" autocomplete="off" autofocus>
</div>
<div class="form-group">
<label class="font-weight-bold">Nama Lengkap</label>
<input type="text" name="txtInputNama" class="form-control" placeholder="Masukan nama lengkap" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">Username</label>
<input type="text" name="txtInputUser" class="form-control" placeholder=" Masukan username" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">Password</label>
<input type="password" name="txtInputPassword" id="password-field"  class="form-control" placeholder="Masukan password" autocomplete="off">
</div>
<div class="form-group">
<label class="font-weight-bold">No Telphone</label>
<input  type="tel" id="phone"  name="txtInputTlp" maxlength="13" class="form-control" placeholder="Masukan no telphone" autocomplete="off">
</div>
<div class="form-group">
<button class="btn btn-primary">Simpan</button>

</div>
</form>
<?= $this->endSection() ?>