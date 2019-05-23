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
			<center><h2>Laporan Peminjam Buku</h2>
 <table class="table table-bordered table-hover table-striped" id="example4">
 	<thead>
 		<tr>
 			<th>NO</th>
 			<th>Nama Anggota</th>
 			<th>Nama Petugas</th>
 			<th>Nama Buku</th>
 			<th>Tanggal Pinjam</th>
 			<th>Batas Lama Pinjam</th>
 			<th>Tanggal Kembali</th>
 			<th>Status</th>
 			<th>Denda</th>
 			
 		</tr>
 	</thead>
 	<tbody>
 		<?php $no = 1; foreach($transaksi as $transaksi) { ?>
 		<tr>
 			<td><?php echo $no++ ?></td>
 			<td><?php echo $transaksi->nama_anggota ?></td>
 			<td><?php echo $transaksi->nama_pustakawan ?></td>
 			<td><?php echo $transaksi->nama_buku ?></td>
 			<td><?php echo $transaksi->tgl_pinjam ?></td>
 			<td><?php echo $transaksi->tgl_maksimal ?></td>
 			<td><?php echo $transaksi->tgl_kembali ?></td>
 			<td><?php echo $transaksi->status ?></td>
 			<td><?php echo $transaksi->denda ?></td>
 			
 			
 		</tr>
 		<?php } ?>
 	</tbody>
 </table>
 </center>
</div>
	</div>
	
</body>
</html>