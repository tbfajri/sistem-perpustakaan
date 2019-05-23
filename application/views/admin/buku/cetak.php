<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title ?></title>
	<style type="text/css" media="print">
		body {
			font-family: Arial;
			font-size: 12px;
		}
		table {
			border: solid thin #000;
			border-collapse: collapse;
		}
		td, th {
			padding: 3mm 6mm;
			text-align: left;
			vertical-align: top;
		}
		th {
			background-color: #f5f5f5;
			font-weight: bold;
		}
		h1 {
			text-align: center;
			font-size: 18px;
			text-transform: uppercase;
		}
	</style>
	<style type="text/css" media="screen">
		body {
			font-family: Arial;
			font-size: 12px;
		}
		table {
			border: solid thin #000;
			border-collapse: collapse;
		}
		td, th {
			padding: 3mm 6mm;
			text-align: left;
			vertical-align: top;
		}
		th {
			background-color: #f5f5f5;
			font-weight: bold;
		}
		h1 {
			text-align: center;
			font-size: 18px;
			text-transform: uppercase;
		}
	</style>
</head>
	<div class="cetak">
		<div class="box-body table-responsive no-padding">
			<center><h2>Laporan Data Informasi Buku</h2>
 <table class="table table-bordered table-hover table-striped" id="example3">
 	<thead>
 		<tr>
 			<th>NO</th>
 			<th>Nama Buku</th>
 			<th>Penerbit</th>
 			<th>Stok</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $no = 1; foreach($buku as $buku) { ?>
 		<tr>
 			<td><?php echo $no++ ?></td>
 			<td><?php echo $buku->nama_buku ?></td>
 			<td><?php echo $buku->penerbit ?></td>
 			<td><?php echo $buku->stok ?></td>
 			
 		</tr>
 		<?php } ?>
 	</tbody>
 </table>
</center>
	</div>
	
</body>
</html>