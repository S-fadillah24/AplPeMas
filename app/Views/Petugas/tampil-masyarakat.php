<?= $this->extend('/dashboard') ?>
<?= $this->section('content') ?>
<style>
    body{
        background-image:url('https://media.istockphoto.com/id/1367078593/id/vektor/latar-belakang-modern-abu-abu-abstrak.jpg?s=170667a&w=0&k=20&c=lzLyyn4vDPTnEZDUTa5c7mY_tazh3C6nZjsyiHjKWXk=');
    }
</style>
<h2>Data Masyarakat</h2>
<p>Berikut ini daftar masyarakat aplikasi Pelayanan Pengaduan yang
sudah masuk .</p>
<p>
<a href="/masyarakat/tambah" class="btn btn-primary
btn-sm"><i class="fa-solid fa-plus"></i> Tambah Masyarakat</a>
</p>
<table class="table table-bordered table-hovered text-center">
  <thead class="thead-dark" style="background-color:#707f94;">
<tr>
<th>No</th>
<th>NIK</th>
<th>Nama</th>
<th>Nomor Telphone</th>
<th>Username</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php foreach($ListMasyarakat as $key => $row): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['nik'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['telp'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="/masyarakat/edit/<?= $row['nik']?>" class="btn btn-outline-secondary"><i class="fa-solid fa-user-pen"> Edit </i></a>
                                        <a onclick="return confirm('Anda Yakin Ingin Menghapus Y/N')" href="/masyarakat/hapus/<?=$row['nik']?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt">  Hapus </i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
</tbody>
</table>
<?= $this->endSection() ?>