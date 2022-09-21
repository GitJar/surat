<script src="assets/js/select2.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script>
  $(function() {
    $("#tgl_ns").datepicker();
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
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b class="">&nbsp; DETAIL SURAT MASUK</b><br><?php echo $md->madrasah; ?>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <fieldset class="content-group">
              <?php
              echo $this->session->flashdata('msg');
              ?>
              <div class="msg"></div>
              <form class="form-horizontal" action="" enctype="multipart/form-data" method="post">
                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">No. Urut</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-sort"></i></span>
                      <input type="text" name="no_asal" id="no_asal" class="form-control" value="<?php echo $query->no_surat; ?>" placeholder="" required readonly>
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Tanggal Surat</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-calendar"></i></span>
                      <input type="text" name="tgl_no_asal" class="form-control daterange-single" id="tgl_no_asal" value="<?php echo $query->tgl_no_asal; ?>" maxlength="10" required placeholder="Masukkan Tanggal" readonly>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">Nomor</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-list"></i></span>
                      <input type="text" name="pengirim" id="pengirim" class="form-control" value="<?php echo $query->no_asal; ?>" readonly>
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Instansi Pengirim</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-home"></i></span>
                      <input type="text" name="penerima" id="penerima" class="form-control" value="<?php echo $query->pengirim; ?>" readonly>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">Perihal/Hal</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-bookmark"></i></span>
                      <input type="text" class="form-control" value="<?php echo $query->perihal; ?>" readonly>
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Diterima Tanggal</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-calendar"></i></span>
                      <input type="text" class="form-control" value="<?php echo $query->tgl_sm; ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">Klasifikasi & Lampiran</label>
                  <div class="col-lg-2">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-spinner"></i></span>
                      <input type="text" name="penerima" id="penerima" class="form-control" value="<?php echo $query->penerima; ?>" readonly>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-book"></i></span>
                      <select class="form-control" name="lampiran" id="lampiran" disabled>
                        <option value="<?php echo $query->lampiran; ?>"><?php echo $query->lampiran; ?></option>
                      </select>
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Status & Sifat</label>
                  <div class="col-lg-2">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-lock"></i></span>
                      <select class="form-control" name="status" id="status" disabled>
                        <option value="<?php echo $query->status; ?>"><?php echo $query->status; ?></option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-move"></i></span>
                      <select class="form-control" name="sifat" id="sifat" disabled>
                        <option value="<?php echo $query->sifat; ?>"><?php echo $query->sifat; ?></option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3"><b>Lampiran</b></label>
                  <div class="col-lg-12 col-sm-12" style="overflow-x:auto;">
                    <table class="table table-xs table-responsive table-striped table-bordered" style="width: 100%;">
                      <tr>
                        <th width='5%'><b>No. Agenda</b></th>
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
                          <td class="text-center">
                            <a href="https://docs.google.com/viewerg/viewer?url=ALAMAT-WEBSITE/lampiran/surat_masuk/<?php echo $baris->nama_berkas; ?>" target="_blank" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-eye-open"></span><b>&nbsp; Preview File</b></a>
                          </td>
                          </td>
                        </tr>
                      <?php
                        $no++;
                      } ?>
                    </table>
                  </div>
                </div>
                <hr>
                <a href="users/sm" class="btn btn-xs btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b> KEMBALI</b></a>
              </form>

            </fieldset>


          </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->