<html>
<style>
    table {
        border-collapse: collapse;
        width: 35%;
    }
    th{
        border: 1px solid black;
        text-align: left;
        background-color: gainsboro;
        padding-bottom: 10px;
        padding-left: 5px;
        vertical-align: top;
    }
    td {
        border: 1px solid black;
        text-align: left;
        vertical-align: top;
        padding-bottom: 10px;
        padding-left: 5px;
    }
</style>

<?php
$data_mahasiswa = array(
    array(
        "Nama" => "Andi",
        "NIM" => 2101001,
        "Nilai UTS" => 87,
        "Nilai UAS" => 65
    ),
    array(
        "Nama" => "Budi",
        "NIM" => 2101002,
        "Nilai UTS" => 76,
        "Nilai UAS" => 79
    ),
    array(
        "Nama" => "Tono",
        "NIM" => 2101003,
        "Nilai UTS" => 50,
        "Nilai UAS" => 41
    ),
    array(
        "Nama" => "Jessica",
        "NIM" => 2101004,
        "Nilai UTS" => 60,
        "Nilai UAS" => 75
    ),
);

foreach ($data_mahasiswa as $key => $value) {

    $nilai_akhir = 0.4 * $value['Nilai UTS'] + 0.6 * $value['Nilai UAS'];
    $data_mahasiswa[$key]['Nilai Akhir'] = $nilai_akhir;
    if ($nilai_akhir >= 80) {
        $huruf = 'A';
    } elseif ($nilai_akhir >= 70 && $nilai_akhir <= 79) {
        $huruf = 'B';
    } elseif ($nilai_akhir >= 60 && $nilai_akhir <= 69) {
        $huruf = 'C';
    } elseif ($nilai_akhir >= 50 && $nilai_akhir <= 59) {
        $huruf = 'D';
    } else {
        $huruf = 'E';
    }
    $data_mahasiswa[$key]['Huruf'] = $huruf;
}
?>

<table>
    <tr>
        <?php foreach ($data_mahasiswa[0] as $header => $value): ?>
            <th><?php echo $header; ?></th>
        <?php endforeach; ?>
    </tr>
    <?php foreach ($data_mahasiswa as $baris): ?>
        <tr>
            <?php foreach ($baris as $nilai): ?>
                <td><?php echo $nilai; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>

</html>