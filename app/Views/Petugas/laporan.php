<?=$this->extend('dashboard');?>
<?=$this->section('content');?>
<style>
    body{
        background-image:url('https://media.istockphoto.com/id/1367078593/id/vektor/latar-belakang-modern-abu-abu-abstrak.jpg?s=170667a&w=0&k=20&c=lzLyyn4vDPTnEZDUTa5c7mY_tazh3C6nZjsyiHjKWXk=');
    }
</style>
<h2>Laporan Pengaduan Masyarakat Desa Bungurberes</h2>
<p>Untuk menampilkan laporan Pengaduan Masyarakat Desa Bungurberes, silahkan masukan tanggal pengaduan.</p>

    <div class="form-group">
    <label class="font-weight-bold">Tanggal Pengaduan</label>
        <div class="input-group">
            <input type="date" class="form-control" id="txtTglPengaduan" autofocus autocomplete="off">
            <div class="input-group-append">
                <button type="button" class="btn btn-outline-primary" id="tampilLaporan"><i class="fa-solid fa-calendar-days"></i> Tampilkan</button>
            </div>
        </div>
    </div>

<div id="hasilCariLaporan">
</div>
<?=$this->endSection();?>
