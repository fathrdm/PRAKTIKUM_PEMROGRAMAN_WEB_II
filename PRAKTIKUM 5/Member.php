<?php
include ("Koneksi.php");
include ("Model.php");
if (isset($_GET['delete'])) {
    $id_member = $_GET["delete"];
    if ($id_member) {
        delete_data($koneksi, 'member', $id_member);
        header("Location: member.php?sukses_delete=");
    } else {
        $error = "Gagal menambahkan data ke tabel datasiswa: ";
    }
}
$data_member = get_semua_data($koneksi, 'member') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 12</title>
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
                <a class="navbar-brand" href="#">Member</a>
            </div>
        </nav>
    </header>
    <main>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-1">No</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>Alamat</th>
                    <th>Tanggal Mendaftar</th>
                    <th>Tanggal Terakhir Bayar</th>
                    <th class="col-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_GET['sukses_create'])) {
                    $sukses_create = $_GET['sukses_create'];
                    $sukses_create = "Sukses menambahkan data";
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alort" name="sukses_create">
                        <?php echo $sukses_create ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    </div>
                    <?php
                }
                if (isset($_GET['sukses_delete'])) {
                    $sukses_delete = $_GET['sukses_delete'];
                    $sukses_delete = "Sukses menghapus data";
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alort" name="sukses_delete">
                        <?php echo $sukses_delete ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                if (isset($_GET['sukses_update'])) {
                    $sukses_update = $_GET['sukses_update'];
                    $sukses_update = "Sukses merubah data";
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alort" name="sukses_update">
                        <?php echo $sukses_update ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                $nomor = 1;
                while ($data = mysqli_fetch_array($data_member)) {
                    ?>
                    <tr>
                        <td><?php echo $nomor++ ?></td>
                        <td><?php echo $data['nama_member'] ?></td>
                        <td><?php echo $data['nomor_member'] ?></td>
                        <td><?php echo $data['alamat'] ?></td>
                        <td><?php echo $data['tgl_mendaftar'] ?></td>
                        <td><?php echo $data['tgl_terakhir_bayar'] ?></td>
                        <td>
                            <a href="FormMember.php?update=<?php echo $data['id_member'] ?>">
                                <span class="badge bg-success" name="update">Edit</span>
                            </a>
                            <a href="member.php?delete=<?php echo $data['id_member'] ?>"
                                onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">
                                <span class="badge bg-danger">Delete</span>
                            </a>
                            <a href="FormMember.php">
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
</body>