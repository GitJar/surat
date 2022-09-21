<script src="assets/js/select2.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script>
  $(function() {
    $("#tgl_awal").datepicker();
  });
  $(function() {
    $("#tgl_akhir").datepicker();
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
        <div class="panel panel-primary">
          <div class="panel-heading text-left">
            <div class="row">
              <div class="col-sm-6 text-left">
                <i class="icon-printer"></i><b>&nbsp; FILTER DATA LAPORAN SURAT MASUK</b><br>Arsip Surat Digital
              </div>
            </div>
          </div>
          <?php
          echo $this->session->flashdata('msg');
          ?>
          <div class="panel-body">
            <br>
            <br>
            <fieldset class="content-group">
              <form class="form-horizontal text-center" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">Tanggal Surat [Awal]</label>
                  <div class="col-lg-3">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="icon-calendar22"></i></div>
                      <input type="text" name="tgl1" class="form-control" id="tgl_awal" value="<?php echo date('Y-m-d'); ?>" maxlength="10" required>
                    </div>
                  </div>

                  <label class="control-label col-lg-2 text-right">Tanggal Surat [Akhir]</label>
                  <div class="col-lg-3">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="icon-calendar22"></i></div>
                      <input type="text" name="tgl2" class="form-control" id="tgl_akhir" value="<?php echo date('Y-m-d'); ?>" maxlength="10" required>
                    </div>
                  </div>
                  <button type="submit" name="data_lap" class="btn btn-danger text-right"><span class="glyphicon glyphicon-search"></span>&nbsp;<b> FILTER DATA</b></button>
                </div>
              </form>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
    <!-- /dashboard content -->