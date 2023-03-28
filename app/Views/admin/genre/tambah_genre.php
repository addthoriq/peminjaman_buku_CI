<?= $this->extend('layouts/core') ?>

<?= $this->section('content') ?>

<h1>Ini beranda Tambah Genre</h1>

<form action="<?= site_url('/admin/genre/tambah') ?>" method="POST">
  <div class="form-group">
    <label for="nam_genre">Nama Genre:</label>
    <input type="text" class="form-control" name="nm_genre" id="nam_genre" placeholder="Masukkan nama Genre">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?= $this->endsection() ?>