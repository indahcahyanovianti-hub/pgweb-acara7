<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>

<?php
$data_kecamatan = [
    ["nama" => "Moyudan", "luas" => 27.62, "penduduk" => 31497],
    ["nama" => "Minggir", "luas" => 27.27, "penduduk" => 29886],
    ["nama" => "Seyegan", "luas" => 26.63, "penduduk" => 47129],
    ["nama" => "Godean", "luas" => 26.84, "penduduk" => 72028],
    ["nama" => "Gamping", "luas" => 29.25, "penduduk" => 108675]
];
?>

    <table style="width: 70%;">
        <tr>
            <th style="width:40%">Kecamatan</th>
            <th style="width:20%">Luas</th>
            <th style="width:20%">Jumlah Penduduk</th>
        </tr>
        <?php foreach ($data_kecamatan as $row): ?>
            <tr>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['luas']; ?></td>
                <td><?php echo number_format($row['penduduk'], 0, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>