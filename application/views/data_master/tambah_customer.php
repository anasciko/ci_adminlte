<section class="content-header">
	<h1>
		Tambah Data Customer
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" action="<?php echo base_url('Customer/insert'); ?>" method="post">
			<div class="box-body">
				<div class="form-group">
					<label>Nama</label>
					<input class="form-control" type="text" name="nama">
					<p class="text-red"><?php echo form_error('nama');?></p>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input class="form-control" type="text" name="alamat">
					<p class="text-red"><?php echo form_error('alamat');?></p>
				</div>
				<div class="form-group">
					<label>No telpon</label>
					<input class="form-control" type="text" name="no_tlp">
					<p class="text-red"><?php echo form_error('no_tlp')?></p>
				</div>
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="<?php echo base_url('Customer') ?>" class="btn btn-primary">Batal</a>
			</div>
		</form>
	</div>
</section>