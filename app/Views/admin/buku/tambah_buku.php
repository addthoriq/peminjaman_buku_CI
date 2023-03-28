<?= $this->extend('layouts/core') ?>

<?= $this->section('content') ?>

<h1>Ini beranda Tambah Genre</h1>

<form action="<?= site_url('/admin/buku/tambah') ?>" method="POST" enctype="multipart/form-data">
  <?= csrf_field() ?>
  <div class="form-group">
    <label for="jdl_buku">Judul Buku</label>
    <input type="text" class="form-control" id="jdl_buku" name="jdl_buku">
  </div>
  <div class="form-group">
    <label for="pengarang">Penulis</label>
    <input type="text" class="form-control" id="pengarang" name="pengarang">
  </div>
  <div class="form-group">
    <label for="isbn">ISBN</label>
    <input type="text" class="form-control" id="isbn" name="isbn">
  </div>
  <div class="form-group">
    <label for="nam_genre">Nama Genre:</label>
    <input type="file" class="form-control" name="gbr_buku" id="nam_genre" placeholder="Masukkan nama Genre">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?= $this->endsection() ?>