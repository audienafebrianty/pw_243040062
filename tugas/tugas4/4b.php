<?php
$perangkatKeras = ["Motherboard", "Processor", "Hard Disk", "PC Cooler", "VGA Card", "SSD"];

$perangkatKerasAwal = $perangkatKeras;

$perangkatKeras[] = "Card Reader";
$perangkatKeras[] = "Modem";

sort($perangkatKeras);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perangkat Keras Komputer</title>
</head>

<body>

    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach ($perangkatKerasAwal as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ol>

    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php foreach ($perangkatKeras as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ol>

</body>

</html>