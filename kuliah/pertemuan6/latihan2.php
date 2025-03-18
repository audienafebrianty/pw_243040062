<?php
// Mencetak array menggunakan looping
$binatang = ['🐸', '🦓', '🐍', '🦔', '🐔', '🐇'];
$makanan = ['🍕', '🍤', '🍟', '🍔', '🍜'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak Array</title>
</head>

<body>

    <!-- Menggunakan For -->
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) : ?>
            <li><?= $binatang[$i]; ?></li>
        <?php endfor; ?>
    </ul>

    <h2>Daftar Makanan</h2>
    <ul>
        <?php for ($i = 0; $i < count($makanan); $i++) : ?>
            <li><?= $makanan[$i]; ?></li>
        <?php endfor; ?>
    </ul>

    <!-- Menggunakan Foreach -->
    <h2>Daftar Binatang Baru</h2>
    <ul>
        <?php foreach ($binatang as $b) : ?>
            <li><?= $b; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Daftar Makanan Baru</h2>
    <ul>
        <?php foreach ($makanan as $m) : ?>
            <li><?= $m; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>
