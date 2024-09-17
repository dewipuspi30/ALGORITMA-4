<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Berwarna di PHP</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: pink;
            color: hitam;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
            
        }
        tr:hover {
            background-color: #ddd;
            
        }
    </style>
</head>
<body>


<?php
// Contoh array asosiatif untuk menyimpan data produk
$customer = [
    [
        "No" => 1,
        "name" => "dewi puspita sari",
        "Alamat" => "Bundar",
        "No. Telp" => "081285331709",
        "Pekerjaan" => "dokter",
        "Gaji" => "6.000.000",

    ],
   
    [
        "No" => 2,
        "name" => "naza",
        "Alamat" => "Kampung selamat",
        "No. Telp" => "082340442122",
        "Pekerjaan" => " polwan",
        "Gaji" => "9.000.000",

    ],

    [
        "No" => 3,
        "name" => "alya",
        "Alamat" => "kuala simpang",
        "No. Telp" => "082280442211",
        "Pekerjaan" => "Wirasswasta",
        "Gaji" => "10.000.000",

    ],

];

// Menampilkan data produk dalam bentuk tabel HTML
echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Alamat</th><th>No. Telp</th><th>pekerjaan</th><th>Gaji</th></tr>";

foreach ($customer as $customer) {
    echo "<tr>";
    echo "<td>" . $customer['No'] . "</td>";
    echo "<td>" . $customer['name'] . "</td>";
    echo "<td>" . $customer['Alamat'] . "</td>";
    echo "<td>" . $customer['No. Telp'] . "</td>";
    echo "<td>" . $customer['Pekerjaan'] . "</td>";
    echo "<td>" . $customer['Gaji'] . "</td>";





    echo "</tr>";
}

echo "</table>";

echo "<p><strong>By dewi puspita sari</strong>";

?>
</body>
</html>