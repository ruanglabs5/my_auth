<section class="content">
	<div class="row">
		<div class="col-lg-12">
		 <div class="box">
				<div class="box-header">
					<?= $this->session->flashdata('msgbox');?>
					<nav class="navbar navbar-light" style="background-color:#e3f2fd;">
						<h3 align="center"><i class="fa fa-envelope" aria-hidden="true"></i> RIWAYAT BALAS </h3><br>
					</nav>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>No</th>
								<th>Nama Tersangka</th>
								<th>File Bon</th>
								<th>Tanggal Balas</th>
								<th>Dibalas Kepada</th>
								<th>Level</th>
								<th>Keterangan</th>
								<th>Aksi</th>
							</tr>
							</thead>
							<tbody>
							<?php 
				 
							$no = 1;
							foreach ($data as $key => $value) : ?>
							<tr>
								<td><?= $no++;?></td>
								<td><?= $value->nama_tersangka;?></td>
								<td>
									<a href="<?= base_url('lapas/unduh_riwayat/'.$value->file_pengajuan_bon);?>" onclick="return confirm('Mau download ?')" class="btn btn-primary btn-xs">
										<i class="glyphicon glyphicon-download-alt"></i> 
									</a> <?= $value->file_pengajuan_bon;?>
								</td>
								<td>
									<i class="fa fa-calendar" aria-hidden="true"></i> <?= date('d-m-Y', strtotime($value->tanggal_balas_bon)); ?></td>
								<td><?= $value->username;?></td>
								<td><?= $value->level;?></td>
								<td><?= $value->keterangan;?></td>
								<td>
									<a href="<?php echo base_url('lapas/hapus_bon_balas/'.$value->id_bon_balasan);?>" onclick="return confirm('Mau Hapus riwayat balas bon ?')"  class="btn btn-danger btn-xs"> 
										<i class="fa fa-trash" aria-hidden="true"></i> Hapus
									</a>
									<a href="<?php echo base_url('lapas/edit/'.base64_encode($value->id_bon_balasan));?>" class="btn btn-warning btn-xs"> 
										<i class="fa fa-edit" aria-hidden="true"></i> Edit
									</a>
								</td>   
							</tr>
							<?php endforeach;?> 
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><!-- /.col -->
	</div><!-- /.row -->
</section>
