<section class="content-header">
	<h1>
		Tambah Data Barang
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<form role="form" action="<?php echo base_url('Barang/insert'); ?>" method="post">
			<div class="box-body">
				<div class="form-group">
					<label>Nama Barang</label>
					<input class="form-control" type="text" name="nama">
					<p class="text-red"><?php echo form_error('nama');?></p>
				</div>
				<div class="form-group">
					<label>Kategory</label>
					<div>
						<?php echo form_dropdown('kategory', $kategory)?>
					</div>
					<p class="text-red"><?php echo form_error('kategory');?></p>
				</div>
				<div class="form-group">
					<label>Stok</label>
					<input class="form-control" type="text" name="stok">
					<p class="text-red"><?php echo form_error('stok');?></p>
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input class="form-control" type="text" name="harga">
					<p class="text-red"><?php echo form_error('harga');?></p>
				</div>
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="<?php echo base_url('barang') ?>" class="btn btn-primary">Batal</a>
			</div>
		</form>
	</div>
</section>