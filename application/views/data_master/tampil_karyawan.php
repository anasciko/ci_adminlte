<section class="content-header">
	<h1>
		Data Master
	</h1>
</section>

<!-- Main content -->
<section class="content">
	
	<ol class="breadcrumb">
		<li><a href="<?php echo base_url('Karyawan/insert')?>"><i class="fa fa-plus"></i>Tambah data</a></li>
	</ol>
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Karyawan</h3>
				</div>
				<!-- /.box-header -->
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Username</th>
								<th>Password</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach ($karyawan as $data) {
							?>
								<tr>
									<td><?php echo $data->id_kar ?></td>
									<td><?php echo $data->nama_kar ?></td>
									<td><?php echo $data->alamat_kar ?></td>
									<td><?php echo $data->username ?></td>
									<td><?php echo $data->password ?></td>
									<td>
										<a href="<?php echo base_url('Karyawan/edit/'.$data->id_kar);?>">
											<button type="button" class="btn btn-primary btn-xs">Edit</button>
										</a>
										<a href="<?php echo base_url('Karyawan/delete/'.$data->id_kar);?>">
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