<?= $this->extend('layouts/core') ?>

<?= $this->section('content') ?>

<h1>Ini beranda Buku</h1>
<a href="<?= site_url('/admin/buku/tambah') ?>" class="btn btn-primary">Tambah Buku</a>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Nomor</th>
      <th>Genre</th>
      <th>Judul</th>
      <th>Penulis</th>
      <th>ISBN</th>
      <th>Deskripsi</th>
      <th>Gambar</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($books as $buku) : ?>
      <tr>
        <th><?= $buku['id'] ?></th>
        <th><?= $buku['nama_genre'] ?></th>
        <th><?= $buku['judul_buku'] ?></th>
        <th><?= $buku['penulis'] ?></th>
        <th><?= $buku['kode_isbn'] ?></th>
        <th><?= $buku['deskripsi_buku'] ?></th>
        <th><img src="<?= base_url($buku['gambar']) ?>" width="100"></th>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?= $this->endsection() ?>