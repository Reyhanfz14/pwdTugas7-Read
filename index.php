<?php
require_once "Buku.php";
$buku = new Buku();
$data = $buku->getAllData();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Data Buku Perpustakaan</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun Terbit</th>
    </tr>

    <?php while ($row = $data->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['judul']; ?></td>
        <td><?= $row['penulis']; ?></td>
        <td><?= $row['tahun_terbit']; ?></td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>
