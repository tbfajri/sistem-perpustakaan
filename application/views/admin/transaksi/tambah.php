<?php 
// notifikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');

//form open
echo form_open(base_url('admin/transaksi/tambah'),' class="form-horizontal"');
?>

 


<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Nama Anggota</label>
    <div class="col-md-5">
        <select name="nama_anggota" class="form-control">
            <?php foreach($nama_anggota as $nama_anggota) { ?>
            <option value="<?php echo $nama_anggota->nama ?>">
                <?php echo $nama_anggota->nama ?>
            </option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Nama Buku</label>
    <div class="col-md-5">
        <select name="nama_buku" class="form-control">
            <?php foreach($nama_buku as $nama_buku) { ?>
            <option value="<?php echo $nama_buku->nama_buku ?>">
                <?php echo $nama_buku->nama_buku ?>
            </option>
            <?php } ?>
        </select>
    </div>
</div>


<div class="form-group">
    <label for="inputEmail3" class="col-md-2 control-label">Status</label>
    <div class="col-md-5">
        <select name="status" class="form-control">
            <option value="dipinjam">Dipinjam</option>
            <option value="kembalikan">Kembalikan</option>
        </select>
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