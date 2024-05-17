<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        td {
            border: 1px solid black;
        }

        th {
            background-color: #ff0000;
            border: 1px solid black;
            font-weight: bold;
            font-size: 25px;
            padding-bottom: 20px;
            padding-top: 20px;

        }
    </style>
</head>

<?php
$HP = array("satu" => "Samsung Galaxy S22", "dua" => "Samsung Galaxy S22+", "tiga" => "Samsung Galaxy A03", "empat" => "Samsung Galaxy Xcover 5");
?>
<table>
    <tr>
        <th>Daftar Smathphone Samsung</th>
    </tr>
    <tr>
        <td>
            <?php echo $HP["satu"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $HP["dua"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $HP["tiga"];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $HP["empat"];
            ?>
        </td>
    </tr>
</table>

</html>