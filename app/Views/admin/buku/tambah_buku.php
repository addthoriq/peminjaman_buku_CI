<?= $this->extend('layouts/core') ?>

<?= $this->section('content') ?>

<h1>Ini beranda Tambah Genre</h1>

<?php if (service('validation')->getErrors()) : ?>
  <div class="alert alert-danger" role="alert">
    <?= service('validation')->listErrors() ?>
  </div>
<?php endif; ?>

<form action="/admin/buku/tambah-proses" method="POST" enctype="multipart/form-data">
  <?= csrf_field() ?>
  <div class="form-group">
    <label for="nm_genre">Genre</label>
    <select class="form-control" name="nm_genre" id="nm_genre">
      <option value="">== Silahkan Pilih ==</option>
      <?php foreach ($genres as $genre) : ?>
        <option value="<?= $genre['id'] ?>"><?= $genre['nama_genre'] ?></option>
      <?php endforeach ?>
    </select>
  </div>
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
    <label for="gambar">Nama File Gambar:</label>
    <input type="file" class="form-control" name="gbr_buku" id="gambar" placeholder="Masukkan nama Genre">
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi Buku</label>
    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?= $this->endsection() ?>