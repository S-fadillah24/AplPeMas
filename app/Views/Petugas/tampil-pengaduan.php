<?= $this->extend('/dashboard') ?>
<?= $this->section('content') ?>
<style>
    body{
        background-image:url('https://media.istockphoto.com/id/1367078593/id/vektor/latar-belakang-modern-abu-abu-abstrak.jpg?s=170667a&w=0&k=20&c=lzLyyn4vDPTnEZDUTa5c7mY_tazh3C6nZjsyiHjKWXk=');
    }
</style>
<h2>Data Pengaduan Masyarakat</h2>
<p>Berikut ini data Pengaduan dari Masyarakat.</p>
<table class="table table-bordered table-hovered text-center">
  <thead class="thead-dark">
<tr>
<th>No</th>
<th>Nik</th>
<th>Nama</th>
<th>Tanggal Masuk</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php foreach($ListPengaduan as $key => $row): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['nik'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['tgl_pengaduan'] ?></td>
                                <td><?= $row['status'] ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="/pengaduan/validasi/<?= $row['id_pengaduan']?>"class="btn btn-outline-info"><i class="far fa-edit"> Validasi </i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
</tbody>
</table>
<?= $this->endSection() ?>