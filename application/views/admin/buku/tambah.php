<?php 
// notifikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');

//form open
echo form_open(base_url('admin/buku/tambah'),' class="form-horizontal"');
?>

<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Nama Buku</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="nama_buku" placeholder="Nama Buku " value="<?php echo set_value('nama_buku')?>" required>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Nama Penerbit</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="nama_penerbit" placeholder="nama penerbit " value="<?php echo set_value('nama_penerbit')?>" required>
    </div>
</div>


<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Stok</label>
    <div class="col-md-5">
        <input type="text" class="form-control" name="stok" placeholder="stok" value="<?php echo set_value('stok')?>" required>
    </div>
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