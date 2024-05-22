<html>
<style>
    table {
        border-collapse: collapse;
        width: 50%;
    }

    th{
        border: 1px solid black;
        text-align: left;
        background-color: gainsboro;
    }
    td {
        border: 1px solid black;
        text-align: left;
        padding: 5px;
    }
</style>

<?php
$data_mahasiswa = array(
    array(
        "No" => 1,
        "Nama" => "Andi",
        "Mata Kuliah diambil" => array(
            array("Mata Kuliah diambil" => "Pemrograman I", "SKS" => 2),
            array("Mata Kuliah diambil" => "Praktikum Pemrograman I", "SKS" => 1),
            array("Mata Kuliah diambil" => "Pengantar Lingkungan Lahan Basah", "SKS" => 2),
            array("Mata Kuliah diambil" => "Arsitektur Komputer", "SKS" => 3)
        )
    ),
    array(
        "No" => 2,
        "Nama" => "Ratna",
        "Mata Kuliah diambil" => array(
            array("Mata Kuliah diambil" => "Basis Data I", "SKS" => 2),
            array("Mata Kuliah diambil" => "Praktikum Basis Data I", "SKS" => 1),
            array("Mata Kuliah diambil" => "Kalkulus", "SKS" => 3)
        )
    ),
    array(
        "No" => 3,
        "Nama" => "Tono",
        "Mata Kuliah diambil" => array(
            array("Mata Kuliah diambil" => "Rekayasa Perangkat Lunak", "SKS" => 3),
            array("Mata Kuliah diambil" => "Analisis dan Perancangan Sistem", "SKS" => 3),
            array("Mata Kuliah diambil" => "Komputasi Awan", "SKS" => 3),
            array("Mata Kuliah diambil" => "Kecerdasan Bisnis", "SKS" => 3)
        )
    )
);

foreach ($data_mahasiswa as $key => $value) {
    $total_sks=0;
    foreach($value["Mata Kuliah diambil"] as $mata_kuliah){
        $total_sks += $mata_kuliah["SKS"];
    }
    $data_mahasiswa[$key]["Total SKS"] = $total_sks;
    if ($total_sks < 7) {
        $keterangan = "Revisi KRS";
    } else {
        $keterangan = "Tidak Revisi";
    }
    $data_mahasiswa[$key]["Keterangan"] = $keterangan;
}
?>

<table>
    <tr>
        <?php foreach ($data_mahasiswa[0] as $header => $value): ?>
            <?php if ($header !== "Mata Kuliah diambil"): ?>
                <th><?php echo $header; ?></th>
            <?php else: ?>
                <th>Mata Kuliah diambil</th>
                <th>SKS</th>
            <?php endif; ?>
        <?php endforeach; ?>
    </tr>
    <?php foreach ($data_mahasiswa as $baris): ?>
        <?php 
        $baris_pertama = true;
        ?>
        <?php foreach ($baris['Mata Kuliah diambil'] as $mata_kuliah): ?>
            <tr>
                <?php if ($baris_pertama): ?>
                    <td><?php echo $baris['No']; ?></td>
                    <td><?php echo $baris['Nama']; ?></td>
                    <td><?php echo $mata_kuliah['Mata Kuliah diambil']; ?></td>
                    <td><?php echo $mata_kuliah['SKS']; ?></td>
                    <td><?php echo $baris['Total SKS']; ?></td>
                    <td style="background-color: <?php echo ($baris['Keterangan'] == 'Revisi KRS') ? 'red' : 'green'; ?>;"><?php echo $baris['Keterangan']; ?></td>
                    <?php $baris_pertama = false; ?>
                <?php else: ?>
                    <td></td>
                    <td></td>
                    <td><?php echo $mata_kuliah['Mata Kuliah diambil']; ?></td>
                    <td><?php echo $mata_kuliah['SKS']; ?></td>
                    <td></td>
                    <td></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>
</html>