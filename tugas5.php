<!DOCTYPE html>
<html>
<head>
    <title>tugas5</title>
    <style>
        .header {
            background-color: lime ; 
        }
        .ganjil {
            background-color: yellow; 
        }
        .genap {
            background-color: cyan; 
        }
    </style>
</head>
<body>

<h2>Perulangan</h2>
<?php
$angka = range(1, 10);
foreach ($angka as $numbers) {
    if ($numbers % 2 == 0) {
        echo "$numbers<br>";
    }
}
?>

<h2>Tabel Matriks</h2>
<table border="1">
    <tr>
        <th class="header">bilangan</th>
        <?php
        $kolom = range(1, 10);
        foreach($kolom as $k) {
            echo "<th class='header'>$k</th>";
        }
        echo "</tr>";

        $baris = range(1, 10);
        foreach($baris as $i) {
            echo "<tr>";
            echo "<th class='header'>$i</th>";
            foreach($kolom as $j) {
                $hasil = $i * $j;
                $class = ($hasil % 2 != 0) ? 'ganjil' : 'genap';
                echo "<td class='$class'>$hasil</td>";
            }
            echo "</tr>";
        }
        ?>
</table>

</body>
</html>

