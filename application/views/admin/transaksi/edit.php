<?php 
// notifikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');

//form open
echo form_open(base_url('admin/transaksi/edit/'.$transaksi->id_transaksi),' class="form-horizontal"');
?>

<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Nama Anggota</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="nama_anggota" placeholder="Nama Anggota" value="<?php echo $transaksi->nama_anggota?>" required>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Nama Pustakawan</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="nama_petugas" placeholder="Nama Pustakawan" value="<?php echo $transaksi->nama_petugas?>" required>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Nama Buku</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="nama_buku" placeholder="Nama Buku" value="<?php echo $transaksi->nama_buku ?>" required>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Tanggal Pinjam</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="tgl_pinjam" placeholder="Nama Transaksi" value="<?php echo $transaksi->tgl_pinjam ?>" required>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Tanggal Kembali</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="tgl_kembali" placeholder="Nama Transaksi" value="<?php echo $transaksi->tgl_kembali ?>" required>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Status</label>
    <div class="col-md-5">
        <select name="status" class="form-control">
            <option value="dipinjam"> <?php if($transaksi->status=="Dipinjam") {echo "Dipinjam";} ?></option>
            <option value="kembalikan">Kembalikan</option>
        </select>
    </div>
</div>


<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label"></label>
    <div class="col-md-5">
        <button class="btn btn-success btn-lg" name="submit" type="submit">
        	<i class="fa fa-save"></i> Simpan
        </button>
        <button class="btn btn-info btn-lg" name="reset" type="reset">
        	<i class="fa fa-save"></i> Riset
        </button>
    </div>
</div>


<?php echo form_close(); ?>