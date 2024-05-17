<!DOCTYPE html>
<html>

<?php
$celcius = 37.841;
$fahrenheit = $celcius * 9/5 + 32;
$reamur = $celcius * 0.80000;
$kelvin = $celcius + 273.15;
$format_hasil_1 = number_format($fahrenheit, 4);
$format_hasil_2 = number_format($reamur, 4);
$format_hasil_3 = number_format($kelvin, 4);
echo "Fahrenheit (F) = $format_hasil_1<br>";
echo "Reamur (R) = $format_hasil_2<br>";
echo "Kelvin (K) = $format_hasil_3";
?>

</html>