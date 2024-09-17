<?php
$merk    = array("Oppo", "Samsung", "Vivo", "Xiaomi", "Nokia", "Realme", "Sonny");
$harga   = array("19000000", "12000000", "16000000", "12000000", "16000000", "11000000", "19000000");

$totalArray = count($harga);

echo "<table border='1'>";
echo "<tr>";
echo "<th>Merk handphone</th>";
echo "<th>Harga handphone</th>";
echo "</tr>";

for ($i = 0; $i < $totalArray; $i++) {
    echo "<tr>";
    echo "<td>$merk[$i]</td>";
    echo "<td>$harga[$i]</td>";
    echo "</tr>";
}
echo "</table>";
echo "<br>";

echo "<p><strong>By dewi puspita sari</strong>";