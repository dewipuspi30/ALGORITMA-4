<?php
$bulan = array('1'=>'Januari', 
			'Februari', 
			'Maret' , 
			'April' , 
			'Mei', 
			'Juni', 
			'Juli', 
			'Agustus', 
			'September', 
			'Oktober', 
			'November', 
			'Desember'
		);

// Informai yang diperoleh dari database
$tahapan = array(
array('tahap' => 'Perencanaan',	'tgl' => '2015-01-31'),
array('tahap' => 'Analisis',	'tgl' => '2015-02-28'),
array('tahap' => 'Perancangan',	'tgl' => '2015-03-31'),
array('tahap' => 'Penerapan',	'tgl' => '2015-04-30'),
array('tahap' => 'Evaluasi',	'tgl' => '2015-05-31'),
array('tahap' => 'Penggunaan',	'tgl' => '2015-06-30')
			);

foreach ($tahapan as $key => $tahap)
{
	$bln_batas = date("n",strtotime($tahap['tgl']));
	$ref_tahapan[$bln_batas] = $key;
}
echo '<table>
		<tr>
			<th rowspan="2">Bulan</th>
			<th colspan="2">Deadline</th>
		</tr>
		<tr>
			<th>Tahapan</th>
			<th>Tanggal</th>
		</tr>
	
		';

$jml_bln = count($bulan);
for ($i = 1; $i <= $jml_bln; $i++)
{	
	echo '<tr>
			<td> ' . strtoupper($bulan[$i]) . ' </td>';
		
			if (key_exists($i, $ref_tahapan))
			{
echo '<td>'.$tahapan[$ref_tahapan[$i]]['tahap'].'</td>
	  <td>'.$tahapan[$ref_tahapan[$i]]['tgl'].'</td>';
			} 
			else
			{
echo '<td>-</td>
	 <td>-</td>';
			}
			
	echo '</tr>';
}
echo '</table>';
echo "<i><p><strong> By : dewi puspita sari";

?>