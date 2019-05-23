<p>
	<a href="<?php echo base_url('admin/transaksi/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i>Tambah Baru
	</a>
</p>

<?php 
// notifikasi

if($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

 ?>
<div class="box-body table-responsive no-padding">
 <table class="table table-bordered table-hover table-striped" id="example3">
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
 			<th>ACTION</th>
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
 			<td>
 				
 				<a href="<?php echo base_url('admin/transaksi/edit/'.$transaksi->id_transaksi)?>" class="btb btn-warning btn-xs" onclick="return confirm('Yakin data buku ini sudah di kembalikan ?')"><i class="fa fa-edit"></i>Sudah Dikembalikan</a>
 				<br>
 				<a href="<?php echo base_url('admin/transaksi/delete/'.$transaksi->id_transaksi)?>" class="btb btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i>Delete</a>
 				
 			</td>
 			
 		</tr>
 		<?php } ?>
 	</tbody>
 </table>
</div>