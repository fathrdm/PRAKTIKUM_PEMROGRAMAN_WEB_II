<?php
$nilai = $hasil = $dari = $ke = $satuan = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'];
    $dari = $_POST['dari'];
    $ke = $_POST['ke'];
    if ($dari == "celcius" && $ke == "fahrenheit") {
        $hasil = ($nilai * 9 / 5) + 32;
        $satuan = "°F";
    } elseif ($dari == "celcius" && $ke == "reamur") {
        $hasil = (4 / 5) * $nilai;
    } elseif ($dari == "celcius" && $ke == "kelvin") {
        $hasil = $nilai + 273.15;
    }
    if ($dari == "fahrenheit" && $ke == "celcius") {
        $hasil = ($nilai - 32) + 5 / 9;
    } elseif ($dari == "fahrenheit" && $ke == "reamur") {
        $hasil = 4 / 9 * ($nilai - 32);
    } elseif ($dari == "fahrenheit" && $ke == "kelvin") {
        $hasil = ($nilai + 459.67) * 5 / 9;
    }
    if ($dari == "reamur" && $ke == "celcius") {
        $hasil = (4/5) * $nilai;
    } elseif ($dari == "reamur" && $ke == "fahrenheit") {
        $hasil = 4/9 * ($nilai-32);
    } elseif ($dari == "reamur" && $ke == "kelvin") {
        $hasil = 4/5 * ($nilai-273);
    }
    if ($dari == "kelvin" && $ke == "celcius") {
        $hasil = $nilai + 273;
    } elseif ($dari == "kelvin" && $ke == "fahrenheit") {
        $hasil = $nilai + 273;
    } elseif ($dari == "kelvin" && $ke == "reamur") {
        $hasil = 5/9 * ($nilai-32) + 273;
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nilai: <input type="text" name="nilai" value="<?php echo $nilai; ?>">
    <br>
    Dari:
    <br>
    <input type="radio" name="dari" value="celcius" <?php if ($dari == "celcius")
        echo "checked"; ?>>Celcius
    <br>
    <input type="radio" name="dari" value="fahrenheit" <?php if ($dari == "fahrenheit")
        echo "checked"; ?>>Fahrenheit
    <br>
    <input type="radio" name="dari" value="reamur" <?php if ($dari == "reamur")
        echo "checked"; ?>>Reamur
    <br>
    <input type="radio" name="dari" value="kelvin" <?php if ($dari == "kelvin")
        echo "checked"; ?>>Kelvin
    <br>
    Ke :
    <br>
    <input type="radio" name="ke" value="celcius" <?php if ($ke == "celcius")
        echo "checked"; ?>>Celcius
    <br>
    <input type="radio" name="ke" value="fahrenheit" <?php if ($ke == "fahrenheit")
        echo "checked"; ?>>Fahrenheit
    <br>
    <input type="radio" name="ke" value="reamur" <?php if ($ke == "reamur")
        echo "checked"; ?>>Reamur
    <br>
    <input type="radio" name="ke" value="kelvin" <?php if ($ke == "kelvin")
        echo "checked"; ?>>Kelvin
    <br>
    <input type="submit" name="Konversi" value="Konversi">
</form>

<?php
echo "<h2>Hasil Konversi: $hasil $satuan</h2>";
?>

