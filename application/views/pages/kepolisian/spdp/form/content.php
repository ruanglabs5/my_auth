<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header"><br>
					<?= $this->session->flashdata('msgbox');?>          
					<div class="col-md-12" style="text-align: center;">

						<div class="well">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-12">
									<h3 align="center"><i class="fa fa-envelope" aria-hidden="true"></i> FORM ENTRY </h3>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							
						<div class="col-md-4">
							<div class="dropdown">
								<div class="info-box bg-aqua"> 
									<span class="info-box-icon  dropdown-toggle" data-toggle="dropdown"  id="dropdownMenu1"><i class="fa fa-pencil-square-o fa-6" aria-hidden="true"></i></span>
									<div class="info-box-content dropdown-toggle" data-toggle="dropdown"  id="dropdownMenu1" >
										<span class="info-box-text"><h4 align="center" style="margin-top:  30px">SPDP</h4></span>
									</div>
									<ul class="dropdown-menu">
					                    <li>
					                    	<a href="#" data-toggle="modal" data-target="#exampleModal">
					                    	<i class="fa fa-edit"></i>  Input SPDP</a>
					                    </li>
										<li>
											<a href="#" data-toggle="dropdown">
												<i class="fa fa-envelope-open-o"></i> SPDP Masuk 
												<span class="label label-warning"></span>
											</a> 
										</li>
										 <li>
										 	<?= anchor('kepolisian/history', '<i class="fa fa-history"></i> History SPDP');?>
					                    </li>
				                  	</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="dropdown">
								<div class="info-box bg-green">
									<span class="info-box-icon  dropdown-toggle" data-toggle="dropdown"  id="dropdownMenu1">
										<i class="fa fa-exchange"></i>
									</span>
									<div class="info-box-content  dropdown-toggle" data-toggle="dropdown"  id="dropdownMenu1" >
									  <span class="info-box-text"  style="margin-top:  10px"> <h4>Perpanjangan <br> Penahanan</h4></span>
									</div>
									<ul class="dropdown-menu" role="menu">
										<li>
					                    	<a href="#" data-toggle="modal" data-target="#modal_perpanjangan_penahanan">
					                    	<i class="fa fa-edit"></i>  Input Perpanjangan Penahanan</a>
					                    </li>
										<li>
											<a href="#"   data-toggle="dropdown">
												<i class="fa fa-envelope-open-o"></i> Perpanjangan Penahanan Masuk 
												<span class="label label-warning"></span>
											</a> 
										</li>
										<li>
					                    	<a href="<?= base_url('kepolisian/history');?>"><i class="fa fa-history"></i>  History Perpanjangan Penahanan</a>
					                    </li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="dropdown">
								<div class="info-box bg-red">
									<span class="info-box-icon"><i class="fa fa-send"></i></span>
									<div class="info-box-content  dropdown-toggle" data-toggle="dropdown"  id="dropdownMenu1" >
									  <span class="info-box-text"  style="margin-top:  10px"> <h4>Pengiriman <br>Berkas Perkara</h4></span>
									</div>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="dropdown">
								<div class="info-box bg-purple">
									<span class="info-box-icon"><i class="fa fa-lock fa-6" aria-hidden="true"></i></span>
									<div class="info-box-content  dropdown-toggle" data-toggle="dropdown"  id="dropdownMenu1" >
									  <span class="info-box-text"><h4 align="center" style="margin-top:  30px">Sita Narkotika</h4></span>
									</div>
									<ul class="dropdown-menu">
					                    <li>
					                    	<a href="#" data-toggle="modal" data-target="#exampleModal">
					                    	<i class="fa fa-edit"></i>  Input SPDP</a>
					                    </li>
										<li>
											<a href="#" data-toggle="dropdown">
												<i class="fa fa-envelope-open-o"></i> SPDP Masuk 
												<span class="label label-warning"></span>
											</a> 
										</li>
										 <li>
										 	<?= anchor('kepolisian/history', '<i class="fa fa-history"></i> History SPDP');?>
					                    </li>
				                  	</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="dropdown">
								<div class="info-box bg-yellow ">
									<span class="info-box-icon"><i class="fa fa-user"></i></span>
									<div class="info-box-content  dropdown-toggle" data-toggle="dropdown"  id="dropdownMenu1" >
									  <span class="info-box-text"> <h4>Pengiriman <br>  tersangka & <br>  barang bukti</h4></span>
									</div>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="dropdown">
								<div class="info-box" style="background-color: rgb(130, 125, 122); color:white;">
									<span class="info-box-icon"><i class="fa fa-bullhorn"></i></span>
									<div class="info-box-content  dropdown-toggle" data-toggle="dropdown"  id="dropdownMenu1" >
									  <span class="info-box-text"> <h4>Pemberitahuan <br> Pengiriman Tersangka <br> & Barang Bukti</h4></span>
									</div>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</div>
							</div>
						</div>

<!-- 						<div class="col-md-4">
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle  bg-green" style="width: 320px; height: 120px" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								<i class="fa fa-pencil-square-o fa-6" aria-hidden="true"></i> <span class="badge bg-yellow" style="font-size: 14px;">1</span>  <h4>SPDP</h4>
								</button>

								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				                    <li>
				                    	<a href="#" data-toggle="modal" data-target="#exampleModal">
				                    	<i class="fa fa-edit"></i>  Input SPDP</a>
				                    </li>
									<li>
										<a href="#" data-toggle="dropdown">
											<i class="fa fa-envelope-open-o"></i> SPDP Masuk 
											<span class="label label-warning"></span>
										</a> 
									</li>
									 <li>
									 	<?= anchor('kepolisian/history', '<i class="fa fa-history"></i> History SPDP');?>
				                    </li>
			                  	</ul>
							</div>
						</div>

						<div class="col-md-4">
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle" style="width: 320px; height: 120px" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								Dropdown
								<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
						</div> -->
			           <!--  <div class="margin" align="center">
			                <div class="btn-group" style="margin-right: 10px;">
			                  	<button type="button" class="btn btn-default bg-blue" style="width: 320px; height: 120px" data-toggle="dropdown">
				                	<span class="badge bg-yellow" style="font-size: 14px;"></span>
					               	<i class="fa fa-edit fa-4"></i> <h4>SPDP</h4>
			                  	</button>
			                  	<ul class="dropdown-menu">
				                    <li>
				                    	<a href="#" data-toggle="modal" data-target="#exampleModal">
				                    	<i class="fa fa-edit"></i>  Input SPDP</a>
				                    </li>
									<li>
										<a href="#" data-toggle="dropdown">
											<i class="fa fa-envelope-open-o"></i> SPDP Masuk 
											<span class="label label-warning"></span>
										</a> 
									</li>
									 <li>
									 	<?= anchor('kepolisian/history', '<i class="fa fa-history"></i> History SPDP');?>
				                    </li>
			                  	</ul>
			                </div>

			                <div class="btn-group" style="margin-right: 10px; margin-bottom: 15px">
			                  	<button type="button" class="btn btn-default bg-green" style="width: 320px;  height: 120px;" data-toggle="dropdown">
				                	<span class="badge bg-yellow" style="font-size: 14px;"></span>
					            	<i class="fa fa-exchange"></i> <h4>Perpanjangan Penahanan</h4>
			                  	</button>
								<ul class="dropdown-menu" role="menu">
									 <li>
				                    	<a href="#" data-toggle="modal" data-target="#modal_perpanjangan_penahanan">
				                    	<i class="fa fa-edit"></i>  Input Perpanjangan Penahanan</a>
				                    </li>
									<li>
										<a href="#"   data-toggle="dropdown">
											<i class="fa fa-envelope-open-o"></i> Perpanjangan Penahanan Masuk 
											<span class="label label-warning"></span>
										</a> 
									</li>
									 <li>
				                    	<a href="<?= base_url('kepolisian/history');?>"><i class="fa fa-history"></i>  History Perpanjangan Penahanan</a>
				                    </li>
								</ul>
			                </div>

			                <div class="btn-group" style="margin-right: 10px;">
								<button type="button" class="btn btn-default bg-red" style="width: 320px; height: 120px;" data-toggle="dropdown">
								   <span class="badge bg-yellow"  style="font-size: 14px;"></span> 
								   <i class="fa fa-send"></i> <h4>Pengiriman Berkas Perkara</h4>
								</button>
			                  	<ul class="dropdown-menu" role="menu">
				                    <li>
				                    	<a href="#" data-toggle="modal" data-target="#exampleModal">
				                    	<i class="fa fa-edit"></i>  Input SPDP</a>
				                    </li>
									<li>
										<a href="#"   data-toggle="dropdown">
											<i class="fa fa-envelope-open-o"></i> SPDP Masuk 
											<span class="label label-warning"></span>
										</a> 
									</li>
			                  	</ul>
			                </div>

			                <div class="btn-group" style="margin-right: 10px;">
			                  	<button type="button" class="btn btn-default" style="width: 320px;  height: 120px; background-color: rgb(130, 125, 122); color:white;" data-toggle="dropdown">
				                   <span class="badge bg-yellow"></span> 
					               <i class="fa fa-medkit" aria-hidden="true"></i><h4> Sita Narkotika</h4>
			                  	</button>
			                  	<ul class="dropdown-menu" id="notifikasi" role="menu">
				                    <li>
				                    	<a href="#" data-toggle="modal" data-target="#exampleModal">
				                    	<i class="fa fa-edit"></i>  Input SPDP</a>
				                    </li>
									<li>
										<a href="#"   data-toggle="dropdown">
											<i class="fa fa-envelope-open-o"></i> SPDP Masuk 
											<span class="label label-warning"></span>
										</a> 
									</li>
			                  	</ul>
			                </div>

			                <div class="btn-group" style="margin-right: 10px;">
				                <button type="button" class="btn btn-default bg-purple" style="width: 320px;  height: 120px;" data-toggle="dropdown">
									<span class="badge bg-yellow"></span> 
						            <i class="fa fa-bullhorn"></i> <h4>Pemberitahuan Pengiriman Tersangka <br>& Barang Bukti</h4>
				                </button>
			                  	<ul class="dropdown-menu" id="notifikasi" role="menu">
				                    <li>
				                    	<a href="#" data-toggle="modal" data-target="#exampleModal">
				                    	<i class="fa fa-edit"></i>  Input SPDP</a>
				                    </li>
									<li>
										<a href="#"   data-toggle="dropdown">
											<i class="fa fa-envelope-open-o"></i> SPDP Masuk 
											<span class="label label-warning"></span>
										</a> 
									</li>
			                  	</ul>
			                </div>

			                <div class="btn-group" style="margin-right: 10px;">
								<button type="button" class="btn btn-default bg-aqua" style="width: 320px;  height: 120px;" data-toggle="dropdown">
								   <span class="badge bg-yellow"></span> 
								   <i class="fa fa-inbox"></i><h4> Pengiriman Tersangka & Barang Bukti</h4>
								</button>
			                  	<ul class="dropdown-menu" id="notifikasi" role="menu">
				                    <li>
				                    	<a href="#" data-toggle="modal" data-target="#exampleModal">
				                    	<i class="fa fa-edit"></i>  Input SPDP</a>
				                    </li>
									<li>
										<a href="#"  data-toggle="dropdown">
											<i class="fa fa-envelope-open-o"></i> SPDP Masuk 
											<span class="label label-warning"></span>
										</a> 
									</li>
			                  	</ul>
			           		</div>
			           	</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h3 class="modal-title" id="exampleModalLabel">Form Input SPDP</h3>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<div class="modal-body">
      		<?php $submit = array('id' => 'submit');?>
			<?php echo form_open_multipart('', $submit);?>		
				<div class="form-group has_nama_tsk">
					<label class="control-label" for="inputError">Nama Tersangka <smal style="color:red">*</smal></label>
					<input type="text" name="nama_tersangka" class="form-control" placeholder="Nama Tersangka">
					<span id="nama_tersangka" class="help-block"></span>
				</div>
				<div class="form-group has_rujukan">
					<label class="control-label" for="inputError">Rujukan <smal style="color:red">*</smal></label>
					<textarea class="editor" id="full-featured" name="rujukan"  style="height: 200px;"></textarea>
					<span id="rujukan" class="help-block"></span>
				</div>

				<div class="form-group has_file">
					<label class="control-label" for="inputError"> Attachment <smal style="color:red">*</smal></label>
					<div class="input-group">
						<input type="text" id="file_path11" class="form-control" placeholder="Choose File">
						<span class="input-group-btn">
							<button class="btn btn-success" type="button" id="file_browser11">
							<i class="fa fa-upload"></i> Browse</button>
						</span>
					</div>
					<input type="file" class="hidden" id="file11" name="file">
					<span id="file" class="help-block"></span>
				</div>

				<div class="form-group">
					<button class="btn btn-primary btn-block btn-submit">Submit</button>
				</div>
      		</div>
	      	<div class="modal-footer">
	        	<!-- <button type="reset" class="btn btn-warning" id="reset">Reset</button> -->
	        	<button type="button" class="btn btn-danger" id="close" data-dismiss="modal">Close</button>
	      	</div>
	      	<?= form_close();?>
    	</div>
  	</div>
</div>


<div class="modal fade" id="modal_perpanjangan_penahanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h3 class="modal-title" id="exampleModalLabel">Form Input Perpanjangan Penahanan</h3>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<div class="modal-body">
      		<?php $submit_perpanjangan_penahanan = array('id' => 'submit_perpanjangan_penahanan');?>
			<?php echo form_open_multipart('', $submit_perpanjangan_penahanan);?>		
				<div class="form-group has_perpanjangan_penahanan">
					<label class="control-label" for="inputError">Perpanjangan Penahanan <smal style="color:red">*</smal></label>
					<input type="text" name="perpanjangan_penahanan" class="form-control" placeholder="Perpanjangan Penahanan">
					<span id="perpanjangan_penahanan" class="help-block"></span>
				</div>
				<div class="form-group has_rujukan">
					<label class="control-label" for="inputError">Rujukan <smal style="color:red">*</smal></label>
					<textarea class="editor" id="perpanjangan" name="perpanjangan_penahanan"  style="height: 200px;"></textarea>
					<span id="rujukan" class="help-block"></span>
				</div>
				<div class="form-group has_file_perpanjangan_penahanan">
					<label class="control-label" for="inputError"> Attachment <smal style="color:red">*</smal></label>
					<div class="input-group">
						<input type="text" id="file_path2" class="form-control" placeholder="Choose File">
						<span class="input-group-btn">
							<button class="btn btn-success" type="button" id="file_browser2">
							<i class="fa fa-upload"></i> Browse</button>
						</span>
					</div>
					<input type="file" class="hidden" id="file2" name="file_perpanjangan_penahanan">
					<span id="file_perpanjangan_penahanan" class="help-block"></span>
				</div>

				<div class="form-group">
					<button class="btn btn-primary btn-block btn-submit">Submit</button>
				</div>
      		</div>
	      	<div class="modal-footer">
	        	<!-- <button type="reset" class="btn btn-warning" id="reset">Reset</button> -->
	        	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	      	</div>
	      	<?= form_close();?>
    	</div>
  	</div>
</div>