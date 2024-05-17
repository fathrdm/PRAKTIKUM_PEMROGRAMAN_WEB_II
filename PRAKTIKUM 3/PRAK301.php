<?php
$jumlah_peserta = "";
$banyak = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah_peserta = $_POST['jumlah_peserta'];
}
?>

<form method="post" ?>
    Jumlah Peserta : <input type="text" name="jumlah_peserta" value="<?php echo $jumlah_peserta; ?>">
    <br>
    <input type="submit" value="Cetak">
</form>

<?php
while ($banyak < $jumlah_peserta) {
    $banyak++;
    $warna = ($banyak % 2 == 0) ? "green" : "red";
    echo "<h2 style='color: $warna;'>Peserta ke-$banyak</h2>";
}
?>