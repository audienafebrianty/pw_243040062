<?php
$mahasiswa = [
    ['Audiena', '243040062', 'febriantyaudiena@gmail.com', 'Teknik Informatika'],
    ['Nisya', '243040083', 'kahfinisya@gmail.com', 'Teknik Industri', [85, 100, 40]]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bersarang Baru</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m[0]; ?></li>
            <li>NIM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan: <?= $m[3]; ?></li>

            <?php if (isset($m[4]) && is_array($m[4])) : ?>
                <li>Nilai: 
                    <?= implode(", ", $m[4]); ?>
                </li>
            <?php endif; ?>
        </ul>
    <?php endforeach; ?>

</body>

</html>

