<?php
include("Model.php");
$update = isset($_GET['update']);
$data = null;
if ($update) {
    $id_peminjaman = $_GET['update'];
    $data = getDataById($koneksi, 'peminjaman', $id_peminjaman);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $formData = [
        'tgl_pinjam' => $tgl_pinjam,
        'tgl_kembali' => $tgl_kembali];
    if ($update) {
        update_data($koneksi, 'peminjaman', $formData, $id_peminjaman);
        header("Location: peminjaman.php?sukses_update=1");
        exit;
    } else {
        tambah_data($koneksi, 'peminjaman', $formData);
        header("Location: peminjaman.php?sukses_create=1");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Form peminjaman</a>
            </div>
        </nav>
    </header>
    <main>
        <form action="" method="post">
            <div class="mb-3 row">
                <label for="tgl_pinjam" class="col-sm-2 col-form-label">Tanggal Mendaftar</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_pinjam" value="<?= $data['tgl_pinjam'] ?? '' ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl_kembali" class="col-sm-2 col-form-label">Tanggal Terakhir Bayar</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_kembali" value="<?= $data['tgl_kembali'] ?? '' ?>" required>
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
