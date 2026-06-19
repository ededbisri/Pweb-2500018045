<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Nilai Mahasiswa</title>
</head>
<body>

<h2>APLIKASI DATA NILAI MAHASISWA</h2>

<?php

$nama = array(
    "Andi",
    "Budi",
    "Citra",
    "Dedi",
    "Eka"
);

$nilai = array(
    85,
    70,
    95,
    80,
    88
);

function rataRata($data)
{
    return array_sum($data) / count($data);
}

function nilaiTertinggi($data)
{
    return max($data);
}

function nilaiTerendah($data)
{
    return min($data);
}

echo "<table border='1' cellpadding='5'>";
echo "<tr>";
echo "<th>No</th>";
echo "<th>Nama</th>";
echo "<th>Nilai</th>";
echo "</tr>";

for($i=0; $i<count($nama); $i++)
{
    echo "<tr>";
    echo "<td>".($i+1)."</td>";
    echo "<td>".$nama[$i]."</td>";
    echo "<td>".$nilai[$i]."</td>";
    echo "</tr>";
}

echo "</table>";

echo "<br>";

echo "Rata-rata Nilai : ".rataRata($nilai)."<br>";
echo "Nilai Tertinggi : ".nilaiTertinggi($nilai)."<br>";
echo "Nilai Terendah : ".nilaiTerendah($nilai)."<br>";

echo "<hr>";

echo "<h3>Nilai Setelah Diurutkan (Descending)</h3>";

rsort($nilai);

foreach($nilai as $n)
{
    echo $n."<br>";
}

?>

</body>
</html>