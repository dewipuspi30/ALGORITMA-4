<?php
$bulan = array (1=>'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

$opsi_bulan = '<select name="bulan">';
foreach ($bulan as $key => $value) {
	$opsi_bulan .= '<option value="' . $key . '">' . $value . '</option>' . "\r\n";
}
$opsi_bulan .= '</select>';

echo $opsi_bulan;

echo "<p><strong>By dewi puspita sari</strong>";