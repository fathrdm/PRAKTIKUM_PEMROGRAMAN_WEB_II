<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>
<h1 style="text-align: center;">Tambah Buku</h1>
<?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('errors') ?>
            </div> <?php endif; ?>
<form action="<?php echo base_url('buku/save')?>" method="post" id="text-editor">
    <div class="user-input-box">
        <label for="judul">Judul</label>
        <input type="text" name="judul" placeholder="News title" ></input>
    </div>
    <div class="user-input-box">
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" cols="30" rows="10" placeholder="Penulis"></input>
    </div>
    <div class="user-input-box">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" placeholder="Penerbit">
    </div>
    <div class="user-input-box">
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" placeholder="Tahun Terbit"></input>
    </div>
    <div class="user-input-box">
        <button type="submit" name="status" value="published" class="btn btn-outline-success">Tambah</button>
        <a href="<?= base_url('buku/index') ?>" class="btn btn-outline-warning">Kembali</a>
    </div>
</form>
<?= $this->endSection() ?>