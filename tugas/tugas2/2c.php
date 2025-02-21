<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2c</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        td {
            width: 30px;
            height: 30px;
            text-align: center;
            border: 1px solid black;
            background-color:#d9534f;
            color: black;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <table>
        <?php
        $n = 10;
        for ($i = $n; $i >= 1; $i--) {
            echo "<tr>";
            for ($j = 1; $j <= $i; $j++) {
                echo "<td>$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>