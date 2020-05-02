<section class="content-header">
	<h1>
		Edit Data Customer
	</h1>
</section>
<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" action="<?php echo base_url('Customer/edit/'.$customer[0]->id_cust); ?>" method="post">
			<div class="box-body">
				<div class="form-group">
					<label>Nama</label>
					<input class="form-control" name="nama" type="text" value="<?php echo $customer[0]->nama_cust ?>">
					<p class="text-red"><?php echo form_error('nama');?></p>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input class="form-control" name="alamat" type="text" value="<?php echo $customer[0]->alamat_cust ?>">
					<p class="text-red"><?php echo form_error('alamat');?></p>
				</div>
				<div class="form-group">
					<label>No Telpon</label>
					<input class="form-control" name="no_tlp" type="text" value="<?php echo $customer[0]->no_tlp_cust ?>">
					<p class="text-red"><?php echo form_error('no_tlp')?></p>
				</div>
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<a href="<?php echo base_url('Customer') ?>" class="btn btn-primary">Batal</a>
			</div>
		</form>
	</div>
</section>