<?php
// $mahasiswa = [
// ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
// ["033040001", "Doddy Ferdiansyah", "doddy@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nrp" => "043040023",
        "nama" => "Sandhika Galih",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sandhika.jpg"
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "033040001",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "doddy.jpg"
    ],
    [
        "nrp" => "241003045",
        "nama" => "Noah Beck",
        "email" => "noah.beck@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "noah.jpg"
    ],
    [
        "nrp" => "241004067",
        "nama" => "Drew Ray Tanner",
        "email" => "drewtanner@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "drew.jpg"
    ],
    [
        "nrp" => "241005089",
        "nama" => "Mathew Broome",
        "email" => "matthewbroome@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "matthew.jpg"
    ],
    [
        "nrp" => "241006011",
        "nama" => "Nicole Wallace",
        "email" => "nicole.wallace@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "nicole.jpg"
    ],
    [
        "nrp" => "241007033",
        "nama" => "Siena Agudong",
        "email" => "agudongsiena@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "siena.jpg"
    ],
    [
        "nrp" => "241008055",
        "nama" => "Asha Banks",
        "email" => "asha.banks@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "asha.jpg"
    ],
    [
        "nrp" => "241009077",
        "nama" => "Asia Lizardo",
        "email" => "lizardo.asia@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "asia.jpg"
    ],
    [
        "nrp" => "241010099",
        "nama" => "Enva Lewis",
        "email" => "envalewis@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "enva.jpg"
    ]
];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>




</body>

</html>