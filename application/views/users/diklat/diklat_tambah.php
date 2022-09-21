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
<link rel="stylesheet" type="text/css" href="assets/upload/dropzone.min.css">
<script type="text/javascript" src="assets/upload/dropzone.min.js"></script>
<style>
  .dropzone {
    margin-top: 10px;
    border: 2px dashed #0087F7;
  }
</style>

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
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b>&nbsp; TAMBAH SURAT MASUK</b><br><?php echo $md->madrasah; ?>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <fieldset class="content-group">
              <?php echo $this->session->flashdata('msg'); ?>
              <div class="msg"></div>
              <form class="form-horizontal" action="users/diklat" enctype="multipart/form-data" method="post">
                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">Berdasarkan Surat</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-sort"></i></span>
                      <select class="form-control cari_sm" name="id_sm" id="id_sm" required>
                        <option value=""></option>
                        <?php
                        $this->db->order_by('no_asal', 'ASC');
                        $bagian = $this->db->get('tbl_sm')->result();
                        foreach ($bagian as $baris) { ?>
                          <option value="<?php echo $baris->no_asal; ?>"><?php echo $baris->no_asal; ?></option>
                        <?php
                        } ?>
                      </select>
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Pelaksana</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-user"></i></span>
                      <select class="form-control cari_penerima" name="id_bagian" id="id_bagian" required>
                        <option value=""></option>
                        <?php
                        $this->db->order_by('nama_bagian', 'ASC');
                        $bagian = $this->db->get('tbl_bagian')->result();
                        foreach ($bagian as $baris) { ?>
                          <option value="<?php echo $baris->id_bagian; ?>"><?php echo $baris->nama_bagian; ?></option>
                        <?php
                        } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">Jenis Diklat</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-list"></i></span>
                      <textarea name="jenis_diklat" id="jenis_diklat" class="form-control" placeholder="Tambahkan Deskripsi Kegiatan Diklat" required></textarea>
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Lokasi/Tempat</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-home"></i></span>
                      <textarea name="lokasi" id="lokasi" class="form-control" placeholder="Tambahkan Keterangan Lokasi/Tempat" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-group">
                    <label class="control-label col-lg-2 text-right">Tanggal Awal</label>
                    <div class="col-lg-4">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                        <input type="text" name="tgl_awal" class="form-control daterange-single" id="tgl_awal" value="<?php echo date('Y-m-d'); ?>" maxlength="10" required>
                      </div>
                    </div>
                    <label class="control-label col-lg-2 text-right">Tanggal Akhir</label>
                    <div class="col-lg-4">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                        <input type="text" name="tgl_akhir" class="form-control daterange-single" id="tgl_akhir" value="<?php echo date('Y-m-d'); ?>" maxlength="10" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-lg-2"><b>Unggah Piagam</b></label>
                    <div class="col-lg-12">
                      <div class="dropzone" id="myDropzone">
                        <div class="dz-message">
                          <h3> KLIK/DROP FILE DISINI</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <a href="users/diklat" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b>KEMBALI</b></a>
                  <button type="submit" id="submit-all" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;<b>SIMPAN DATA</b></button>
              </form>
              <script>
                $(document).ready(function() {
                  $(".cari_sm").select2({
                    placeholder: "Cari Berdasarkan Surat"
                  });

                  $(".cari_penerima").select2({
                    placeholder: "Pilih Nama Pelaksana"
                  });
                });
              </script>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
    <!-- /dashboard content -->
    <script type="text/javascript">
      $('.msg').html('');
      Dropzone.options.myDropzone = {
        // Prevents Dropzone from uploading dropped files immediately
        url: "<?php echo base_url('users/diklat') ?>",
        paramName: "userfile",
        // acceptedFiles:"'file/doc','file/xls','file/xlsx','file/docx','file/pdf','file/txt',image/jpg,image/jpeg,image/png,image/bmp",
        autoProcessQueue: false,
        maxFilesize: 10, //MB
        parallelUploads: 10,
        maxFiles: 10,
        addRemoveLinks: true,
        dictCancelUploadConfirmation: "Yakin ingin membatalkan upload ini?",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        dictFileTooBig: "File yang Anda Upload terlalu besar {{filesize}} MB. Maksimal Upload {{maxFilesize}} MB",
        dictRemoveFile: "Hapus",

        init: function() {
          var submitButton = document.querySelector("#submit-all")
          myDropzone = this; // closure
          submitButton.addEventListener("click", function(e) {
            e.preventDefault();
            e.stopPropagation();
            myDropzone.processQueue(); // Tell Dropzone to process all queued files.
          });
          // You might want to show the submit button only when
          this.on("error", function(file, message) {
            alert(message);
            this.removeFile(file);
            errors = true;
          });

          // files are dropped here:
          this.on("addedfile", function(file) {
            // Show submit button here and/or inform user to click it.
            //  alert("Apakah anda yakin");
          });

          this.on("sending", function(data, xhr, formData) {
            formData.append("id_sm", jQuery("#id_sm").val());
            formData.append("id_bagian", jQuery("#id_bagian").val());
            formData.append("jenis_diklat", jQuery("#jenis_diklat").val());
            formData.append("lokasi", jQuery("#lokasi").val());
            formData.append("tgl_awal", jQuery("#tgl_awal").val());
            formData.append("tgl_akhir", jQuery("#tgl_akhir").val());
            // formData.append("no_surat", jQuery("#no_surat").val());
          });

          this.on("complete", function(file) {
            //Event ketika Memulai mengupload
            myDropzone.removeFile(file);
          });

          this.on("success", function(file, response) {
            //Event ketika Memulai mengupload
            // console.log(response);
            //           $(response).each(function (index, element) {
            //               if (element.status) {
            //               }
            //               else {

            $(".cari_sm").select2({
              placeholder: "Pilih nomor",
              allowClear: true
            });
            $(".cari_sm").val('').trigger('change');
            $('.form-horizontal')[0].reset();
            $('.msg').html('<div class="alert alert-success alert-dismissible" role="alert">' +
              '     <button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
              '       <span aria-hidden="true">&times;&nbsp; &nbsp;</span>' +
              '     </button>' +
              '     BERHASIL! SURAT KELUAR BERHASIL DISIMPAN' +
              '  </div>');
            $("#id_bagian").focus();

            alert('BERHASIL! SURAT KELUAR BERHASIL DISIMPAN');
            window.location = "<?php echo base_url(); ?>users/diklat/t";
            //     }
            // });

            myDropzone.removeFile(file);
          });
        }
      };
    </script>