<!DOCTYPE html>
<html>
    
<?php
$jarijari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;
$phi = 3.14;
$volume = 1 / 3 * $phi * $jarijari * $jarijari * $tinggi;
$format_hasil = number_format($volume, 3);
echo "Volume Kerucut = $format_hasil m3";
?>

</html>