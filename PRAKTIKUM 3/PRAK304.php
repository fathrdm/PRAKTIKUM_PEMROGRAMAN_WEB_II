<?php
$jumlah_bintang = $link_gambar = $jumlah = "";
$baris = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['jumlah_bintang'])) {
        $jumlah_bintang = $_POST['jumlah_bintang'];
    }
}
?>

<?php
if (empty($jumlah_bintang)) {
    ?>
    <form method="POST">
        Jumlah bintang <input type="text" name="jumlah_bintang" value="<?php echo $jumlah_bintang; ?>">
        <br>
        <input type="submit">
    </form>
    <?php
}
?>

<?php
if (!empty($jumlah_bintang)) {

    echo "Jumlah bintang $jumlah_bintang";
    echo "<br><br><br>";
    while ($baris < $jumlah_bintang) {

        echo "<img class='gambar' src='star.png' width='50' height='50'> ";
        echo " ";
        $baris++;
    }
    echo "<br>";   
    ?>

    <form action="" method="POST" style="display: inline;">
        <input type="hidden" name="jumlah_bintang" value="<?php echo $jumlah_bintang + 1; ?>">
        <button type="submit">Tambah</button>
    </form>
    <form action="" method="POST" style="display: inline;">
        <input type="hidden" name="jumlah_bintang" value="<?php echo $jumlah_bintang - 1; ?>">
        <button type="submit">Kurang</button>
    </form>
    <?php
}
?>