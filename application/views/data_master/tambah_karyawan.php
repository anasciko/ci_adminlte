<section class="content-header">
	<h1>
		Tambah Data Karyawan
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" action="<?php echo base_url('Karyawan/insert'); ?>" method="post">
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
					<label>Username</label>
					<input class="form-control" type="text" name="username">
					<p class="text-red"><?php echo form_error('username');?></p>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" type="text" name="password">
					<p class="text-red"><?php echo form_error('password');?></p>
				</div>

			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="<?php echo base_url('Karyawan') ?>" class="btn btn-primary">Batal</a>
			</div>
		</form>
	</div>
</section>