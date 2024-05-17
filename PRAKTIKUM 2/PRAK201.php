<html>
    
<style>
    table,
    tr,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<?php
$nama1 = $nama2 = $nama3 = $urutan = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];

    if ($nama1 <= $nama2 && $nama2 <= $nama3) {
        $urutan = "$nama1<br>$nama2<br>$nama3";
    } elseif ($nama1 <= $nama3 && $nama3 <= $nama2) {
        $urutan = "$nama1<br>$nama3<br>$nama2";
    } elseif ($nama2 <= $nama1 && $nama1 <= $nama3) {
        $urutan = "$nama1<br>$nama1<br>$nama3";
    } elseif ($nama2 <= $nama3 && $nama3 <= $nama1) {
        $urutan = "$nama2<br>$nama3<br>$nama1";
    } elseif ($nama3 <= $nama1 && $nama1 <= $nama2) {
        $urutan = "$nama3<br>$nama1<br>$nama2";
    } else {
        $urutan = "$nama3<br>$nama2<br>$nama1";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nama 1: <input type="text" name="nama1" value="<?php echo $nama1; ?>"><br>
    Nama 2: <input type="text" name="nama2" value="<?php echo $nama2; ?>"><br>
    Nama 3: <input type="text" name="nama3" value="<?php echo $nama3; ?>"><br>
    <input type="submit" value="Urutkan">
</form>

<table style="width:20%">
    <tr>
        <td> <b> Output</b></td>
    </tr>
    <tr>
        <td> <?php echo $urutan;
        ?> <br></td>
    </tr>
</table>

</html>