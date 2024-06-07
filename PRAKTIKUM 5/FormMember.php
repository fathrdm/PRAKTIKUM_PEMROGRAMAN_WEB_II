<?php
include("Model.php");
$update = isset($_GET['update']);
$data = null;
if ($update) {
    $id_member = $_GET['update'];
    $data = getDataById($koneksi, 'member', $id_member);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_member = $_POST['nama_member'];
    $nomor_member = $_POST['nomor_member'];
    $alamat = $_POST['alamat'];
    $tgl_mendaftar = $_POST['tgl_mendaftar'];
    $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
    $formData = [
        'nama_member' => $nama_member,
        'nomor_member' => $nomor_member,
        'alamat' => $alamat,
        'tgl_mendaftar' => $tgl_mendaftar,
        'tgl_terakhir_bayar' => $tgl_terakhir_bayar];
    if ($update) {
        update_data($koneksi, 'member', $formData, $id_member);
        header("Location: member.php?sukses_update=1");
        exit;
    } else {
        tambah_data($koneksi, 'member', $formData);
        header("Location: member.php?sukses_create=1");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Form member</a>
            </div>
        </nav>
    </header>
    <main>
        <form action="" method="post">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_member" value="<?= $data['nama_member'] ?? '' ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nomor" class="col-sm-2 col-form-label">Nomor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomor_member" value="<?= $data['nomor_member'] ?? '' ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?? '' ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl_mendaftar" class="col-sm-2 col-form-label">Tanggal Mendaftar</label>
                <div class="col-sm-10">
                    <input type="datetime-local" class="form-control" name="tgl_mendaftar" value="<?= $data['tgl_mendaftar'] ?? '' ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl_terakhir_bayar" class="col-sm-2 col-form-label">Tanggal Terakhir Bayar</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_terakhir_bayar" value="<?= $data['tgl_terakhir_bayar'] ?? '' ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </form>
    </main>
</body>
</html>
