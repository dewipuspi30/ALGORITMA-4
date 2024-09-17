<?php
echo "<pre>";
$array1 = ["warna" => "merah", 2, 4];
$array2 = ["a", "b", "warna" => "hijau", "bentuk" => "trapesium", 4];
$result = array_merge($array1, $array2);
print_r($result);
echo "</pre>";

echo "<p><strong>By dewi puspita sari</strong>";