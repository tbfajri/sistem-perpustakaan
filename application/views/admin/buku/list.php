<p>
	<a href="<?php echo base_url('admin/buku/tambah') ?>" class="btn btn-success btn-lg">
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
 <table class="table table-bordered table-hover table-striped" id="example1">
 	<thead>
 		<tr>
 			<th>NO</th>
 			<th>Nama Buku</th>
 			<th>Penerbit</th>
 			<th>Stok</th>
 		
 			<th>ACTION</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $no = 1; foreach($buku as $buku) { ?>
 		<tr>
 			<td><?php echo $no++ ?></td>
 			<td><?php echo $buku->nama_buku ?></td>
 			<td><?php echo $buku->penerbit ?></td>
 			<td><?php echo $buku->stok ?></td>
 			<td>
 				<a href="<?php echo base_url('admin/buku/edit/'.$buku->id_buku)?>" class="btb btn-warning btn-xs"><i class="fa fa-edit"></i>Edit</a>
 				<br>
 				<a href="<?php echo base_url('admin/buku/delete/'.$buku->id_buku)?>" class="btb btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i>Delete</a>
 				
 			</td>
 			
 		</tr>
 		<?php } ?>
 	</tbody>
 </table>
</div>