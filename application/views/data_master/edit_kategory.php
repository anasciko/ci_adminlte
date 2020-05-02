<section class="content-header">
	<h1>
		Edit Data Kategory
	</h1>
</section>
<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" action="<?php echo base_url('Kategory/edit/'.$kategory[0]->id_kat); ?>" method="post">
			<div class="box-body">
				<div class="form-group">
					<label>Kategory</label>
					<input class="form-control" name="kategory" type="text" value="<?php echo $kategory[0]->kategory ?>">
					<p class="text-red"><?php echo form_error('kategory');?></p>
				</div>
			</div>
			<!-- /.box-body -->

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<a href="<?php echo base_url('Kategory') ?>" class="btn btn-primary">Batal</a>
			</div>
		</form>
	</div>
</section>