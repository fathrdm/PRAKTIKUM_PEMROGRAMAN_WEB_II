<?php
include ("Koneksi.php");
include ("Model.php");
if (isset($_GET['delete'])) {
    $id_buku = $_GET["delete"];
    if ( $id_buku) {
        delete_data($koneksi, 'buku', $id_buku);
        header("Location: Buku.php?sukses_delete=");
    } else {
        $error = "Gagal menambahkan data ke tabel datasiswa: ";
    }
}
$data_buku= get_semua_data($koneksi, 'buku')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>
<body class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Buku</a>
            </div>
        </nav>
    </header>
    <main>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET['sukses_create'])) {
                    $sukses_create = $_GET['sukses_create'];
                    $sukses_create = "Sukses menambahkan data";
                    ?>
                    <div class="alert alert-success  alert-dismissible fade show" role="alort" name="sukses_create">
                        <?php echo $sukses_create ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                if (isset($_GET['sukses_delete'])) {
                    $sukses_delete = $_GET['sukses_delete'];
                    $sukses_delete = "Sukses menghapus data";
                    ?>
                    <div class="alert alert-success  alert-dismissible fade show" role="alort" name="sukses_delete">
                        <?php echo $sukses_delete ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                if (isset($_GET['sukses_update'])) {
                    $sukses_update = $_GET['sukses_update'];
                    $sukses_update = "Sukses merubah data";
                    ?>
                    <div class="alert alert-success  alert-dismissible fade show" role="alort" name="sukses_update">
                        <?php echo $sukses_update ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                $nomor = 1;
                while ($data = mysqli_fetch_array($data_buku)) {
                    ?>
                    <tr>
                        <td><?php echo $nomor++ ?></td>
                        <td><?php echo $data['judul_buku'] ?></td>
                        <td><?php echo $data['penulis'] ?></td>
                        <td><?php echo $data['penerbit'] ?></td>
                        <td><?php echo $data['tahun_terbit'] ?></td>
                        <td>
                            <a href="FormBuku.php?update=<?php echo $data['id_buku'] ?>">
                                <span class="badge bg-success" name="update">Edit</span>
                            </a>
                            <a href="Buku.php?delete=<?php echo $data['id_buku'] ?>"
                                onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                                <span class="badge bg-danger">Delete</span>
                            </a>
                            <a href="FormBuku.php">
                                <span class="badge bg-primary">Tambah</span>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </main>