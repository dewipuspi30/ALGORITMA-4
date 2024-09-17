<?php
$buah = array("apel", "mangga", "pisang");
// atau
$buah = ["apel", "mangga", "pisang"];

$umur = array("Ali" => 20, "Budi" => 25, "Citra" => 22);

echo $buah[0] . "<br>"; // menampilkan "apel"
echo $umur["Ali"] ."<br>"; // menampilkan 20

foreach ($buah as $b) {
    echo $b . " "; // menampilkan "apel mangga pisang "
}

$buah[0] = "jeruk"; // mengubah nilai elemen pertama menjadi "jeruk"
$umur["Ali"] = 21; // mengubah umur Ali menjadi 21

array_push($buah, "durian"); // menambah "durian" ke dalam array $buah
$umur["Dina"] = 18; // menambah key "Dina" dengan nilai 18 ke dalam array $umur

unset($buah[2]); // menghapus elemen dengan index 2 dari array $buah
unset($umur["Budi"]); // menghapus elemen dengan key "Budi" dari array $umur

unset($buah); // menghapus keseluruhan array $buah

echo "<p><strong>By dewi puspita sari</strong>";