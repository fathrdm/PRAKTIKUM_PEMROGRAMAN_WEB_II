<?php
$nilai_input = $panjang = $lebar = "";
$k = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai_input = $_POST['nilai'];
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $nilai = explode(" ", $nilai_input);
    $nilai_array = [];
}
?>

<form method="POST">
    Panjang : <input type="text" name="panjang" value="<?php echo $panjang; ?>">
    <br>
    Lebar : <input type="text" name="lebar" value="<?php echo $lebar; ?>">
    <br>
    Nilai : <input type="text" name="nilai" value="<?php echo $nilai_input; ?>">
    <br>
    <input type="submit" value="Cetak">
</form>

<?php
if (!empty($nilai) && count($nilai) != $panjang * $lebar) {
    echo "Panjang nilai tidak sesuai dengan ukuran matriks.";
} else {
    echo "<table style='border-collapse: collapse; width: 6%;'>";
    for ($i = 0; $i < $panjang; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $lebar; $j++) {
            $nilai_array[$i][$j] = $nilai[$k++];
            echo "<td style='border: 1px solid black; padding-bottom:10px; text-align: center; vertical-align: top;'>" . $nilai_array[$i][$j];
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>