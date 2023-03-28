<?= $this->extend('layouts/core') ?>

<?= $this->section('content') ?>

<h1>Ini beranda Genre</h1>
<a href="<?= site_url('/admin/genre/tambah') ?>" class="btn btn-primary">Tambah Genre</a>

<?= $this->endsection() ?>