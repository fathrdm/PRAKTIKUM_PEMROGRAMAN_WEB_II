<?php
include("Model.php");
$update = isset($_GET['update']);
$data = null;
if ($update) {
    $id_buku = $_GET['update'];
    $data = getDataById($koneksi, 'buku', $id_buku);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $formData = [
        'judul_buku' => $judul_buku,
        'penulis' => $penulis,
        'penerbit' => $penerbit,
        'tahun_terbit' => $tahun_terbit,];
    if ($update) {
        update_data($koneksi, 'buku', $formData, $id_buku);
        header("Location: Buku.php?sukses_update=1");
        exit;
    } else {
        tambah_data($koneksi, 'buku', $formData);
        header("Location: Buku.php?sukses_create=1");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Form buku</a>
            </div>
        </nav>
    </header>
    <main>
        <form action="" method="post">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul_buku" value="<?= $data['judul_buku'] ?? '' ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nomor" class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="penulis" value="<?= $data['penulis'] ?? '' ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="penerbit" value="<?= $data['penerbit'] ?? '' ?>" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="penerbit" class="col-sm-2 col-form-label">Tahun Terbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tahun_terbit" value="<?= $data['tahun_terbit'] ?? '' ?>" required>
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
