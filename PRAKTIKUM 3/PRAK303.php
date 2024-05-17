<?php
$batas_bawah = $batas_atas = NULL;
$hasil= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['batas_bawah'])) {
        $batas_bawah = $_POST['batas_bawah'];

    }
    if (isset($_POST['batas_atas'])) {
        $batas_atas = $_POST['batas_atas'];

    }
}
?>

<form method="POST">
    Batas Bawah: <input type="text" name="batas_bawah" value="<?php echo $batas_bawah; ?>">
    <br>
    Batas Atas: <input type="text" name="batas_atas" value="<?php echo $batas_atas; ?>">
    <br>
    <input type="submit" value="Cetak">
</form>

<?php
do{
    if(($batas_bawah + 7) % 5 == 0) {
        echo "<img class='gambar' src='star.png' width='20' height='20'>";
    }else{
        echo "$batas_bawah";
    }
    echo " ";
    $batas_bawah++;

}while ($batas_bawah <= $batas_atas);   
?>