<?php
// NESTED LOOP / LOOPING BERSARANG / LOOPING DI DALAM LOOPING

for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 7; $j++) {
        echo "$j ";
    }
    echo "<br>";

    echo "<hr>";
}
for ($i = 8; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }
    echo "<br>";
}
