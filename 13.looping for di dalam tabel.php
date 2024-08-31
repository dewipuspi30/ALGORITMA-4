<!DOCTYPE html>
<html>
<head>
	<title>Cara Membuat Looping For di dalam Tabel</title>
</head>
<body>		
	<h2>Cara Membuat Looping For di dalam Tabel</h2> 
	<form>
		<table border="1" cellspacing="0">
			<tr>
<th>NO</th>
<th>BUAH</th>
<th>SAYUR</th>
			</tr> 
			<tr>
<td></td>
<td></td>
<td></td>
			</tr> 
		</table>
	</form>
</body>
</html>
 


<style>
	table{width:300px; text-align:center; margin:auto;}
	table th { background-color: #95a5a6; }
	h2 {text-align:center; font-style:italic; font-weight:bold;}
</style>

<form>
		<table border="1" cellspacing="0">
			<tr>
<th>NO</th>
<th>BUAH</th>
<th>SAYUR</th>
			</tr>
 
<?php  for ($no = 1, $i=10, $a=100; $i<=100, $a<=1000  ; $i+=10, $a+=100) { ?>
 
			<tr>
<td> <?php echo $no; ?></td>
<td><?php echo $i; ?></td>
<td><?php echo $a; ?></td>
			</tr>
 
		<?php $no++; } ?>
 
		</table>
	</form>

    <i><p><strong> By : dewi puspita sari