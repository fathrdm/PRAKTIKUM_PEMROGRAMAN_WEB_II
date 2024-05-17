<?php
$jumlah_huruf = $jumlah_output = $jumlah = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah_huruf = $_POST['jumlah_huruf'];
    $jumlah = strlen($jumlah_huruf);
}
?>

<form method="post" ?>
    <input type="text" name="jumlah_huruf" value="<?php echo $jumlah_huruf; ?>">
    <input type="submit">
</form>

<?php
for ($i = 0; $i < $jumlah; $i++) {
    $jumlah_output .= strtoupper($jumlah_huruf[$i]) . strtolower($jumlah_huruf[$i]) . str_repeat(strtolower($jumlah_huruf[$i]), $jumlah - 1);
}
if (!empty($jumlah_huruf)) {
    echo "<b>Input:</b> <br><br> $jumlah_huruf";
    echo "<br><br>";
    echo "<b>Output:</b> <br><br> $jumlah_output";
}
?>