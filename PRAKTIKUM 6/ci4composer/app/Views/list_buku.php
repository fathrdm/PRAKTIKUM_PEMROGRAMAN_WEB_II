<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>List Buku</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-success" role="alert"><?= session()->getFlashdata('msg') ?>
            </div> <?php endif; ?>
        <?php $nomor = 1; ?>
        <?php foreach ($bukuwhere as $Buku): ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td>
                    <strong><?= $Buku['judul'] ?></strong><br>
                    <small class="text-muted"><?= $Buku['tahun_terbit'] ?></small>
                </td>
                <td>
                    <a href="<?= base_url('buku/' . $Buku['id'] . '/preview') ?>"
                        class="btn btn-outline-success">Preview</a>
                    <a href="<?= base_url('buku/edit/' . $Buku['id']) ?>" class="btn btn-outline-warning">Edit</a>
                    <a href="<?= base_url('buku/' . $Buku['id'] . '/delete') ?>"
                        onclick="return confirm ('Yakin ingin menghapus data ini?')"
                        class="btn btn-sm btn-outline-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection() ?>