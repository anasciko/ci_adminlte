<section class="content-header">
	<h1>
		Data Master
	</h1>
</section>

<!-- Main content -->
<section class="content">
	
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('Kategory/insert')?>"><i class="fa fa-plus"></i>Tambah data</a></li>
	</ol>
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Kategory</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Id</th>
								<th>Kategory</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<?php
								foreach ($kategory as $data) {
							?>
								<tr>
									<td><?php echo $data->id_kat ?></td>
									<td><?php echo $data->kategory ?></td>
									<td>
										<a href="<?php echo base_url('Kategory/edit/'.$data->id_kat);?>">
											<button type="button" class="btn btn-primary btn-xs">Edit</button>
										</a>
										<a href="<?php echo base_url('Kategory/delete/'.$data->id_kat);?>">
											<button type="button" class="btn btn-primary btn-xs">Delete</button>
										</a>
									</td>
								</tr>		
							<?php	} ?>
						</tbody>
					</table>
				</div>

				<div>
					<?php echo $this->session->flashdata('pesan');  ?>
				</div>
			</div>
		</div>
	</div>
</section>