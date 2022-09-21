<script src="assets/js/select2.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script>
  $(function() {
    $("#tgl_sm").datepicker();
  });
  $(function() {
    $("#tgl_no_asal").datepicker();
  });
</script>
<script type="text/javascript" src="assets/js/core/app.js"></script>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading text-left">
            <div class="row">
              <div class="col-sm-6 text-left">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b class="">&nbsp; EDIT SURAT MASUK</b><br><?php echo $md->madrasah; ?>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <fieldset class="content-group">
              <?php
              echo $this->session->flashdata('msg');
              ?>
              <div class="msg"></div>
              <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">No. Agenda</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-sort"></i></span>
                      <input type="text" name="ns" id="ns" class="form-control" value="<?php echo $query->no_surat; ?>">
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Tanggal Surat</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-calendar"></i></span>
                      <input type="text" name="tgl_no_asal" class="form-control daterange-single" id="tgl_no_asal" value="<?php echo $query->tgl_no_asal; ?>" maxlength="10" required placeholder="Masukkan Tanggal">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">Nomor Surat Masuk</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-list"></i></span>
                      <input type="text" name="no_asal" id="no_asal" class="form-control" value="<?php echo $query->no_asal; ?>" placeholder="" required>
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Instansi Pengirim</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-home"></i></span>
                      <input type="text" name="pengirim" class="form-control" id="pengirim" value="<?php echo $query->pengirim; ?>">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">Perihal/Hal</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-bookmark"></i></span>
                      <input type="text" name="perihal" id="perihal" class="form-control" value="<?php echo $query->perihal; ?>">
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Diterima Tanggal</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-calendar2"></i></span>
                      <input type="text" name="tgl_sm" id="tgl_sm" class="form-control daterange-single" value="<?php echo $query->tgl_sm; ?>" placeholder="">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">Klasifikasi & Lampiran</label>
                  <div class="col-lg-2">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-spinner"></i></span>
                      <input type="text" name="penerima" id="penerima" class="form-control" value="<?php echo $query->penerima; ?>" required>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-book"></i></span>
                      <select class="form-control" name="lampiran" id="lampiran">
                        <option value="<?php echo $query->lampiran; ?>"><?php echo $query->lampiran; ?></option>
                        <option value="">--Lampiran--</option>
                        <option value="-">0 Lampiran</option>
                        <option value="1 Lampiran">1 Lampiran</option>
                        <option value="2 Lampiran">2 Lampiran</option>
                        <option value="3 Lampiran">3 Lampiran</option>
                        <option value="4 Lampiran">4 Lampiran</option>
                        <option value="5 Lampiran">5 Lampiran</option>
                      </select>
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Status & Sifat</label>
                  <div class="col-lg-2">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-lock"></i></span>
                      <select class="form-control" name="status" id="status">
                        <option value="<?php echo $query->status; ?>"><?php echo $query->status; ?></option>
                        <option value="">--Status--</option>
                        <option value="Asli">Asli</option>
                        <option value="Tembusan">Tembusan</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-move"></i></span>
                      <select class="form-control" name="sifat" id="sifat">
                        <option value="<?php echo $query->sifat; ?>"><?php echo $query->sifat; ?></option>
                        <option value="">--Sifat--</option>
                        <option value="Sangat Segera">Sangat Segera</option>
                        <option value="Segera">Segera</option>
                        <option value="Kilat">Kilat</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3"><b>Lampiran</b></label>
                  <div class="col-lg-12">
                    <table class="table table-xs table-bordered">
                      <tr>
                        <th width='5%'><b>No.</b></th>
                        <th><b>Nama Berkas</b></th>
                        <th width='15%'><b>Tanggal Berkas</b></th>
                        <th width='10%'><b>Ukuran</b></th>
                        <th width='5%' td class="text-center"><b>Aksi</b></th>
                      </tr>
                      <?php
                      $lampiran = $this->db->get_where('tbl_lampiran', "token_lampiran='$query->token_lampiran'");
                      $no = 1;
                      foreach ($lampiran->result() as $baris) { ?>
                        <tr>
                          <td><?php echo $query->no_surat; ?></td>
                          <td><?php echo $baris->nama_berkas; ?></td>
                          <td><?php echo $query->tgl_sm; ?></td>
                          <td><?php echo substr($baris->ukuran / 1024, 0, 5); ?> MB</td>
                          <td td class="text-center"><a href="lampiran/surat_masuk/<?php echo $baris->nama_berkas; ?>" target="_blank" title="<?php echo substr($baris->ukuran / 1024, 0, 5); ?> MB" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-floppy-saved"></span></a></td>
                        </tr>
                      <?php
                        $no++;
                      } ?>
                    </table>
                  </div>
                </div>
                <script>
                  $(document).ready(function() {
                    $(".cari_penerima").select2({
                      placeholder: "Pilih Penerima"
                    });
                  });
                </script>
                <hr>
                <a href="users/sm" class="btn btn-danger"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b>KEMBALI</b></a>
                <button type="submit" name="btnupdate" id="submit-all" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;<b>UPDATE</b></button>
              </form>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /dashboard content -->