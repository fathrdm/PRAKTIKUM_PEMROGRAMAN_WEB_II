<?php
include ("Koneksi.php");
function getDataById($koneksi, $table, $id)
{
    $primaryKey = "";
    switch ($table) {
        case 'member':
            $primaryKey = 'id_member';
            break;
        case 'buku':
            $primaryKey = 'id_buku';
            break;
        case 'peminjaman':
            $primaryKey = 'id_peminjaman';
            break;
        default:
            break;
    }
    $sql = "SELECT * FROM $table WHERE $primaryKey = '$id' LIMIT 1";
    $result = mysqli_query($koneksi, $sql);
    return mysqli_fetch_assoc($result);
}
function get_semua_data($koneksi, $table)
{
    $sql = "SELECT * FROM $table";
    return mysqli_query($koneksi, $sql);
}
function tambah_data($koneksi, $table, $data)
{
    $columns = implode(", ", array_keys($data));
    $values = implode("', '", array_values($data));
    $sql = "INSERT INTO $table ($columns) VALUES ('$values')";
    return mysqli_query($koneksi, $sql);
}
function update_data($koneksi, $table, $data, $id)
{
    $updates = [];
    foreach ($data as $column => $value) {
        $updates[] = "$column = '$value'";
    }
    $updateStr = implode(", ", $updates);
    $primaryKey = "";
    switch ($table) {
        case 'member':
            $primaryKey = 'id_member';
            break;
        case 'buku':
            $primaryKey = 'id_buku';
            break;
        case 'peminjaman':
            $primaryKey = 'id_peminjaman';
            break;
        default:
            break;
    }
    $sql = "UPDATE $table SET $updateStr WHERE $primaryKey = '$id'";
    return mysqli_query($koneksi, $sql);
}
function delete_data($koneksi, $table, $id)
{
    $primaryKey = "";
    switch ($table) {
        case 'member':
            $primaryKey = 'id_member';
            break;
        case 'buku':
            $primaryKey = 'id_buku';
            break;
        case 'peminjaman':
            $primaryKey = 'id_peminjaman';
            break;
        default:
            break;
    }
    $sql = "DELETE FROM $table WHERE $primaryKey = '$id'";
    return mysqli_query($koneksi, $sql);
}
?>