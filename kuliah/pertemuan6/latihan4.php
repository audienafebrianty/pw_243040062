<?php
// Array Associative
// Array yang indexnya berupa string yang ber-asosiasi dengan tiap elemen
$mahasiswa = [
    [
        'nama' => 'Audiena',
        'nim' => '243040062',
        'email' => 'febriantyaudiena@gmail.com',
        'jurusan' => 'Teknik Informatika'
    ],
    [
        'nama' => 'Nisya',
        'nim' => '243040083',
        'jurusan' => 'Teknik Industri',
        'email' => 'kahfinisya@gmail.com',
    ]
];
var_dump($mahasiswa);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bersarang</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m['nama']; ?></li>
            <li>NIM: <?= $m['nim']; ?></li>
            <li>Email: <?= $m['email']; ?></li>
            <li>Jurusan: <?= $m['jurusan']; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>