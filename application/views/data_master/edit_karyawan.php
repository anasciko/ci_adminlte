<section class="content-header">
	<h1>
		Edit Data Karyawan
	</h1>
</section>
<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" action="<?php echo base_url('Karyawan/edit/'.$karyawan[0]->id_kar); ?>" method="post">
			<div class="box-body">
				<div class="form-group">
					<label>Nama</label>
					<input class="form-control" name="nama" type="text" value="<?php echo $karyawan[0]->nama_kar ?>">
					<p class="text-red"><?php echo form_error('nama');?></p>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input class="form-control" name="alamat" type="text" value="<?php echo $karyawan[0]->alamat_kar ?>">
					<p class="text-red"><?php echo form_error('alamat');?></p>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input class="form-control" name="username" type="text" value="<?php echo $karyawan[0]->username ?>">
					<p class="text-red"><?php echo form_error('username')?></p>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input class="form-control" name="password" type="text" value="<?php echo $karyawan[0]->password ?>">
					<p class="text-red"><?php echo form_error('password')?></p>
				</div>

			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<a href="<?php echo base_url('Karyawan') ?>" class="btn btn-primary">Batal</a>
			</div>
		</form>
	</div>
</section>