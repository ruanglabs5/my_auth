<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header"><br>
					<div class="col-md-12">
					<?= $this->session->flashdata('msgbox');?>
					<p>
						<a href="<?= base_url('surat/surat_polisi');?>" class="btn btn-warning btn-xs">
							 <i class="fa fa-long-arrow-left" aria-hidden="true"></i>  Kembali
						</a><br>
					</p>
					<div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 align="center" style="color: black">
                                <i class="fa fa-envelope" aria-hidden="true"></i> DETAIL SURAT
                            </h3><br>
                        </div>
                    	<div class="panel-body">
							<?php foreach ($data as $key => $value) :?>
							<table  width="400px">
								<tbody>
									<tr>
										<td><i class="fa fa-user-o" aria-hidden="true"></i> Dikirim Oleh</td>
										<td width="10px">:</td>
										<td width="250px"><?= $value->username?></td>
									</tr>
									<tr>
										<td><i class="fa fa-address-book-o" aria-hidden="true"></i> Level</td>
										<td width="10px">:</td>
										<td width="250px"><?= $value->level?></td>
									</tr>
									<tr>
										<td> <i class="fa fa-calendar" aria-hidden="true"></i>  Tanggal Dikirim </td>
										<td width="10px">:</td>
										<td width="250px"><?= date('d-m-Y', strtotime($value->tanggal_posting)); ?></td>
									</tr>
								</tbody>
							</table>
							<br>
							<table class="table table-bordered">
								<thead class="thead-dark">
									<tr bgcolor="#8e8d8d">
										<th class="col-sm-5" style="color: white"><i class="fa fa-file-text" aria-hidden="true"></i> Nama File</th>
										<th class="col-sm-7" style="color: white"><i class="fa fa-book" aria-hidden="true"></i> Lampiran</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Nama Tersangka</td>
										<td><?= $value->nama_tersangka ;?></td>
									</tr>
									
									<tr>
										<td>Pasal</td>
										<td><?= $value->pasal ;?></td>
									</tr>

									<tr>
										<td>No Sprindik</td>
										<td><?= $value->no_sprindik ;?></td>
									</tr>

									<tr>
										<td>No LP</td>
										<td><?= $value->no_lp ;?></td>
									</tr>

									<tr>
										<td>Spdp</td>
										<td>
											<div class="form-group">
													<label for="exampleInputEmail1">Spdp</label>
													<p>
														<a href="<?= base_url('unduh/unduh_surat_polisi/'.$value->spdp);?>" onclick="return confirm('Mau download ?')" class="btn btn-primary btn-xs">
															<i class="glyphicon glyphicon-download-alt"></i> 
														</a> <?= $value->spdp ;?>
													</p>
											</div>
										</td>
									</tr>

									<tr>
										<td>Penggeledahan</td>
										<td>
											 <div class="form-group">
													<label for="exampleInputEmail1">Ijin Geledah </label>
													<p><a href="<?= base_url('unduh/unduh_surat_polisi/'.$value->ijin_geledah);?>" onclick="return confirm('Mau download ?')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-download-alt"></i> </a> 
														<?= $value->ijin_geledah;?></p>
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Setuju geledah </label>
													<p><a href="<?= base_url('unduh/unduh_surat_polisi/'.$value->setuju_geledah);?>" onclick="return confirm('Mau download ?')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-download-alt"></i> </a>
														<?= $value->setuju_geledah;?></p>  
												</div>
										</td>
									</tr>

									<tr>
										<td>Tap Sita</td>
										<td>
											<div class="form-group">
														<label for="exampleInputEmail1">Khusus</label>
														<p><a href="<?= base_url('unduh/unduh_surat_polisi/'.$value->khusus);?>" onclick="return confirm('Mau download ?')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-download-alt"></i></a>
														<?=$value->khusus;?></p>
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Biasa</label>
														<p><a href="<?= base_url('unduh/unduh_surat_polisi/'.$value->biasa);?>" onclick="return confirm('Mau download ?')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-download-alt"></i></a> <?= $value->biasa;?></p>
													</div>
													<div class="form-group">
														<label for="exampleInputEmail1">Narkotika</label>
														<p><a href="<?= base_url('unduh/unduh_surat_polisi/'.$value->narkotika);?>" onclick="return confirm('Mau download ?')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-download-alt"></i></a> <?= $value->narkotika;?></p>
													</div>
										</td>
									</tr>

									<tr>
										<td>Perpanjangan</td>
										<td>
											<div class="form-group">
													<label for="exampleInputEmail1">Kejaksaan</label>
													<p><a href="<?= base_url('unduh/unduh_surat_polisi/'.$value->kejaksaan);?>" onclick="return confirm('Mau download ?')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-download-alt"></i> </a>
														<?= $value->kejaksaan;?></p>
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Pengadilan</label>
													<p><a href="<?= base_url('unduh/unduh_surat_polisi/'.$value->pengadilan);?>" onclick="return confirm('Mau download ?')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-download-alt"></i> </a>
														<?= $value->pengadilan;?></p>  
												</div>
										</td>
									</tr>

									<tr>
										<td>Pengiriman Berkas</td>
										<td>
											<div class="form-group">
													<label for="exampleInputEmail1">P-18</label>
													<p><a href="<?= base_url('unduh/unduh_surat_polisi/'.$value->p_18);?>" onclick="return confirm('Mau download ?')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-download-alt"></i> </a>
														<?= $value->p_18;?></p>
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">P-21</label>
													<p><a href="<?= base_url('unduh/unduh_surat_polisi/'.$value->p_21);?>" onclick="return confirm('Mau download ?')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-download-alt"></i> </a>
														<?= $value->p_21;?></p>  
												</div>
										</td>
									</tr>

									<tr>
										<td>Pelimpahan</td>
										<td>
											<div class="form-group">
													<label for="exampleInputEmail1">Pelimpahan</label>
													<p><a href="<?= base_url('unduh/unduh_surat_polisi/'.$value->pelimpahan);?>" onclick="return confirm('Mau download ?')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-download-alt"></i> </a> 
														<?= $value->pelimpahan;?></p>  
											</div>
										</td>
									</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


