<?php
$tinggi_segitiga = $link_gambar = "";
$baris = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tinggi_segitiga = $_POST['tinggi_segitiga'];
    $link_gambar = $_POST['link_gambar'];
}
?>

<form method="POST">
    Tinggi : <input type="text" name="tinggi_segitiga" value="<?php echo $tinggi_segitiga; ?>">
    <br>
    Alamat Gambar : <input type="url" name="link_gambar" value="<?php echo $link_gambar; ?>">
    <br>
    <input type="submit" value="Cetak">
</form>

<?php
while ($baris <= $tinggi_segitiga) {
    $kolom = 1;
    while ($kolom <= $baris) {
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
        $kolom++;
    }
    $kanan = $tinggi_segitiga;
    while ($kanan > $baris) {
        echo "<img class='gambar' src='$link_gambar' width='20' height='20'>";
        $kanan--;
    }
    echo "<br>";
    $baris++;
}
?>