<?php
function hitungLuasLingkaran($r)
{
    return round(pi() * pow($r, 2));
}

function hitungKelilingLingkaran($r)
{
    return floor((2 * pi() * $r) * 10) / 10;
}

$jariJariLuas = 10;
$jariJariKeliling = 20;

$luas = hitungLuasLingkaran($jariJariLuas);
$keliling = hitungKelilingLingkaran($jariJariKeliling);

echo "<h4>Menghitung Luas Lingkaran</h4>";
echo "Jari-jari = $jariJariLuas cm.<br>";
echo "Luas lingkaran = $luas cm²";
echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
echo "Jari-jari = $jariJariKeliling cm.<br>";
echo "Keliling lingkaran = $keliling cm";
echo "<hr>";
