<?php
$mahasiswa = [
  [
    'nama' => 'Audienaa',
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <ul>
    <?php foreach ($mahasiswa as $m) : ?>
      <li>
        <a href="latihan4.php?nama=<?= $m['nama']; ?>">
          <?= $m['nama']; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>