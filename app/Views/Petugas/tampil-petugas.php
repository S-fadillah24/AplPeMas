<?= $this->extend('/dashboard') ?>
<?= $this->section('content') ?>
<style>
    body{
        background-image:url('https://media.istockphoto.com/id/1367078593/id/vektor/latar-belakang-modern-abu-abu-abstrak.jpg?s=170667a&w=0&k=20&c=lzLyyn4vDPTnEZDUTa5c7mY_tazh3C6nZjsyiHjKWXk=');
    }
</style>
<h2>Data Petugas</h2>
<p>Berikut ini daftar petugas pengelola aplikasi Pengaduan Masyarakat yang
sudah terdaftar dalam database.</p>
<p><a href="/petugas/tambah" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i> Tambah Petugas</a></p>
<table class="table table-bordered table-hovered text-center">
  <thead class="thead-dark">
<tr>
<th>No</th>
<th>Nama Petugas</th>
<th>Username</th>
<th>Level User</th>
<th>Aksi</th>
</tr>
</thead>
<tbody class="text-center">
<?php foreach($ListPetugas as $key => $row): ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $row['nama_petugas'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><?= $row['level'] ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="/petugas/edit/<?= $row['id_petugas']?>" class="btn btn-outline-secondary"><i class="fa-solid fa-user-pen"> Edit</i></a>
                                        <a onclick="return confirm('Anda Yakin Ingin Menghapus Y/N')" href="/petugas/hapus/<?=$row['id_petugas']?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"> Hapus</i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
</tbody>
</table>
<?= $this->endSection() ?>