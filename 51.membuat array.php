<?php
// Menggunakan fungsi array()
$buah = array('apel', 'jeruk', 'pisang');

// Menggunakan tanda kurung siku []
$warna = ['merah', 'hijau', 'biru'];

$pengguna = ['nama' => 'dewi puspita sari', 'umur' => 18, 'pekerjaan' => 'Pengembang Web'];

$buah[1] = 'semangka';

$buah[2] = 'ceri'; 

echo $buah[1] . "<br>"; // akan menampilkan 'jeruk'
echo $warna[0] . "<br>"; // akan menampilkan 'merah'
echo $pengguna['nama'] . "<br>"; // akan menampilkan 'Ali'
echo $buah[1] . "<br>"; // akan menampilkan 'mangga'
echo $buah[2] . "<br>";// akan menambahkan 'anggur' ke akhir array
unset($buah[1]); // akan menghapus elemen dengan indeks 1 dari array $buah
echo count($buah) . "<br>"; // akan menampilkan jumlah elemen dalam array $buah

foreach ($warna as $w) {
    echo $w . '<br>';
}

foreach ($pengguna as $kunci => $nilai) {
    echo $kunci . ': ' . $nilai . '<br>';
}


echo "<p><strong>Bydewi puspita sari</strong>";