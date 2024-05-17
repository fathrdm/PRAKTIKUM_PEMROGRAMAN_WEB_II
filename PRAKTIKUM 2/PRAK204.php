<?php
$nilai = $hasil_ejaan = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'];

    if ($nilai >= 1000){
        $hasil_ejaan = "Anda Menginput Melebihi Limit Bilangan 
        ";
    }

    if ($nilai >= 100 && $nilai < 1000){
        $hasil_ejaan = "Ratusan";
    }

    if ($nilai >= 20 && $nilai < 100) {
        $hasil_ejaan = "Puluhan";
    }


    if ($nilai >= 10 && $nilai < 20) {
        $hasil_ejaan = "Belasan";
    }

    if ($nilai < 10) {
        $hasil_ejaan = "Satuan";
    }
    if ($nilai == 0) {
        $hasil_ejaan = "Nol";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nilai: <input type="text" name="nilai" value="<?php echo $nilai; ?>">
    <br>
    <input type="submit">
</form>

<?php
echo "<h2>Hasil: $hasil_ejaan</h2>";
?>