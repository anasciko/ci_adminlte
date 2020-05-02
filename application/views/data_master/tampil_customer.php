<section class="content-header">
	<h1>
		Data Master
	</h1>
</section>

<!-- Main content -->
<section class="content">
	
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('Customer/insert')?>"><i class="fa fa-plus"></i>Tambah data</a></li>
	</ol>
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Customer</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>No telpon</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<?php
								foreach ($customer as $data) {
							?>
								<tr>
									<td><?php echo $data->id_cust ?></td>
									<td><?php echo $data->nama_cust ?></td>
									<td><?php echo $data->alamat_cust ?></td>
									<td><?php echo $data->no_tlp_cust ?></td>
									<td>
										<a href="<?php echo base_url('Customer/edit/'.$data->id_cust);?>">
											<button type="button" class="btn btn-primary btn-xs">Edit</button>
										</a>
										<a href="<?php echo base_url('Customer/delete/'.$data->id_cust);?>">
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