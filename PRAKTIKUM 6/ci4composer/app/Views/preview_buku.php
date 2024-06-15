<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>
        <div class="mb-3">
            <strong>Judul:</strong> <?= esc($buku['judul']) ?>
        </div>
        <div class="mb-3">
            <strong>Penulis:</strong> <?= esc($buku['penulis']) ?>
        </div>
        <div class="mb-3">
            <strong>Penerbit:</strong> <?= esc($buku['penerbit']) ?>
        </div>
        <div class="mb-3">
            <strong>Tahun Terbit:</strong> <?= esc($buku['tahun_terbit']) ?>
        </div>
        <div class="mt-4">
            <a href="<?= base_url('buku/index') ?>" class="btn btn-outline-warning">Kembali</a>
        </div>
<?= $this->endSection() ?>