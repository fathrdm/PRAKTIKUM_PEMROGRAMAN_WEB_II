<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>
<h1 style="text-align: center;">Edit Buku</h1>
<?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('errors') ?>
            </div> <?php endif; ?>
<form action="<?= base_url( 'buku/update/' . $buku['id'])?>" method="post" id="text-editor">
    <div class="user-input-box">
        <label for="judul">Judul</label>
        <input type="text" name="judul" placeholder="Buku title" value="<?= $buku['judul'] ?>" >
    </div>
    <div class="user-input-box">
        <label for="penulis">Penulis</label>
        <input name="penulis" cols="30" rows="10" placeholder="Write a great Buku!" value="<?= $buku['penulis'] ?>" ></input>
    </div>
    <div class="user-input-box">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" placeholder="Penerbit" value="<?= $buku['penerbit'] ?>" >
    </div>
    <div class="user-input-box">
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" placeholder="Tahun Terbit" value="<?= $buku['tahun_terbit'] ?>" >
    </div>
    <div class="user-input-box">
        <button type="submit" name="status" value="published" class="btn btn-outline-success">Update</button>
        <a href="<?= base_url('buku/index') ?>" class="btn btn-outline-warning">Kembali</a>
    </div>
</form>
<?= $this->endSection() ?>
