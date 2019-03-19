<div class="wrapper">
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="box-body">
                <section class="content">
                <?= validation_errors();?>
                <?= $this->session->flashdata('uraian_dakwaan');?>
                <a href="<?php echo base_url('kejaksaan/lihat_detail_jadwal/'.$this->uri->segment(3));?>" class="btn btn-info btn-sm"> 
                  <span class="glyphicon glyphicon-arrow-left"></span> Kembali
                </a><br><br>
                  <div class="row">
                    <div class="col-md-12">
                      <label for="exampleInputEmail1">Uraian Dakwaan</label>
                      <?= form_open('kejaksaan/ubah_uraian_dakwaan/'.$this->uri->segment(3));?>
                      <div class="box-body pad">
                        <input type="hidden" name="url" value="<?= $data->url;?>">
                        <input type="hidden" name="id_data" value="<?= $data->id_data;?>">
                        <textarea name="uraian_dakwaan" class="ckeditor"> <?= $data->uraian_dakwaan;?></textarea>
                         <script>
                        CKEDITOR.replace( 'uraian_dakwaan' );
                        </script>
                      </div>
                    </div>
                  <center><button class="btn btn-info btn-sm" type="submit">Update</button></center>
                  <?= form_close();?>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>



