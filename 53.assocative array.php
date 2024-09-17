<?php
$orang = array(
    "nama" => "Ayu",
    "umur" => 25,
    "kota" => "Jakarta"
);
// Menggunakan fungsi array()
$buah = array(
    "apel" => "hijau",
    "strawberry" => "merah",
    "pisang" => "kuning"
);

// Menetapkan langsung
$mobil['Toyota'] = "Corolla";
$mobil['Honda'] = "Civic";
$mobil['Suzuki'] = "Swift";

echo $buah["apel"] . "<br>"; // Output: hijau
echo $mobil['Honda'] . "<br>"; // Output: Civic

// Menambahkan data baru
$buah["mangga"] = "kuning";

// Mengubah data yang ada
$buah["apel"] = "merah";

foreach ($buah as $kunci => $nilai) {
    echo "Kunci: $kunci, Nilai: $nilai<br>";
}

echo count($buah); // Menampilkan jumlah elemen di dalam array buahe
if (array_key_exists("apel", $buah)) {
    echo "<br>Buah apel tersedia!";
}

// Semua kunci
$kunci = array_keys($buah);

// Semua nilai
$nilai = array_values($buah);

// Berdasarkan kunci
ksort($buah);

// Berdasarkan nilai
asort($buah);

echo "<p><strong>By dewi puspita sari</strong>";