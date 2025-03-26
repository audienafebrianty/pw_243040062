<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 6a</title>
    <style>
        .ungu {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            display: inline-block;
            background-color: #DDA0DD;
            border: 2px solid black;
        }

        .pink {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            display: inline-block;
            background-color: #FFE4E1;
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET["angka"])) {
        $angka = $_GET["angka"];
        for ($i = $angka; $i >= 1; $i--) {
            for ($t = 1; $t <= $i; $t++) {
                if ($i % 2 == 0) {
                    echo "<div class='ungu'>$i</div>";
                } else {
                    echo "<div class='pink'>$i</div>";
                }
            }
            echo "<br>";
        }
    } else {
    }
    ?>
</body>

</html>