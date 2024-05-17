<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
        th {
            font-weight: bold;
        }
    </style>
</head>

<?php
$HP = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
?>

<table>
    <tr>
        <th>Daftar Smathphone Samsung</th>
    </tr>
    <tr>
        <td>
            <?php echo $HP[0];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $HP[1];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $HP[2];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $HP[3];
            ?>
        </td>
    </tr>
</table>

</html>