<script src="assets/js/select2.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script>
  $(function() {
    $("#tgl_ns").datepicker();
  });
  $(function() {
    $("#tgl_id_surat").datepicker();
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
<?php
$this->db->order_by('id_sk', 'DESC');
$this->db->limit(1);
$cek_ns = $this->db->get('tbl_sk');
// if ($cek_ns->num_rows() == 0) {
//   $no_surat       = "SK/" . date('Y') . "/MAN2/001";
// } else {
//   $noUrut          = substr($cek_ns->row()->no_surat, 14, 15);
//   $noUrut++;
//   $no_surat        = "SK/" . date('Y') . "/MAN2/" . sprintf("%03s", $noUrut);
// }
// if ($cek_ns->num_rows() == 0) {
//   $no_surat       = "001";
// } else {
//   $noUrut          = substr($cek_ns->row()->id_surat, 0, 3);
//   $noUrut++;
//   $no_surat        = sprintf("%03s", $noUrut);
// }
// 
?>

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
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b>&nbsp; TAMBAH SURAT KELUAR</b><br><?php echo $md->madrasah; ?>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <fieldset class="content-group">
              <?php
              echo $this->session->flashdata('msg');
              ?>
              <div class="msg"></div>
              <form class="form-horizontal" action="users/sk" enctype="multipart/form-data" method="post">
                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">No. Urut</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-database"></i></span>
                      <!-- <input type="text" name="nsx" id="nsx" class="form-control" placeholder="" value="<?php echo $no_surat; ?>" required readonly> -->
                      <input type="text" name="ns" id="ns" class="form-control" placeholder="No. Agenda" required>
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Tanggal Surat</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-calendar"></i></span>
                      <input type="text" name="tgl_sk" class="form-control daterange-single" id="tgl_sk" value="<?php echo date('Y-m-d'); ?>" maxlength="10" required placeholder="Masukkan Tanggal">
                      <input type="hidden" name="tgl_id_surat" class="form-control daterange-single" id="tgl_id_surat" value="<?php echo date('Y-m-d'); ?>" maxlength="10" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">Nomor</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-list"></i></span>
                      <input type="text" name="no_surat" id="no_surat" class="form-control" placeholder="Masukkan Nomor Surat">
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Kode</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-spinner"></i></span>
                      <input type="text" name="status" id="status" class="form-control" placeholder="Masukkan Kode">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">Perihal/Hal</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-bookmark"></i></span>
                      <input type="text" name="perihal" id="perihal" class="form-control" placeholder="Masukkan Perihal/Hal">
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Tujuan/Penerima</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-books"></i></span>
                      <input type="text" name="tujuan" id="tujuan" class="form-control" placeholder="Masukkan Tujuan Lembaga atau Lainnya">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2 text-right">Pelaksana</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-database"></i></span>
                      <select class="form-control" name="pelaksana" id="pelaksana">
                        <option value="">-- Pilih Pelaksana --</option>
                        <option value="Arsip">Arsip</option>
                        <?php
                        $this->db->order_by('nama_bagian', 'ASC');
                        $bagian = $this->db->get('tbl_bagian')->result();
                        foreach ($bagian as $baris) { ?>
                          <option value="<?php echo $baris->nama_bagian; ?>"><?php echo $baris->nama_bagian; ?></option>
                        <?php
                        } ?>
                      </select>
                    </div>
                  </div>
                  <label class="control-label col-lg-2 text-right">Bagian</label>
                  <div class="col-lg-4">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-folder"></i></span>
                      <select class="form-control" name="bagian" id="bagian">
                        <option value="">-- Pilih Bagian --</option>
                        <option value="Arsip">Arsip</option>
                        <option value="Kepala Madrasah">Kepala Madrasah</option>
                        <option value="Kepala TU">Kepala TU</option>
                        <option value="WAKA Sarana">WAKA Sarana</option>
                        <option value="WAKA Kesiswaan">WAKA Kesiswaan</option>
                        <option value="WAKA Humas">WAKA Humas</option>
                        <option value="WAKA Kurikulum">WAKA Kurikulum</option>
                        <option value="Bendahara">Bendahara</option>
                        <option value="Kepala Perpustakaan">Kepala Perpustakaan</option>
                        <option value="Kepala LabKom">Kepala LabKom</option>
                        <option value="Kepala LAB">Kepala LAB</option>
                        <option value="Pembina Ekstrakurikuler">Pembina Ekstrakurikuler</option>
                        <option value="Tata Usaha">Tata Usaha</option>
                        <option value="Guru">Guru</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-3"><b>Lampiran</b></label>
                  <div class="col-lg-12">
                    <div class="dropzone" id="myDropzone">
                      <div class="dz-message">
                        <h3> Klik atau Drop Lampiran disini</h3>
                      </div>
                    </div>
                    <i style="color:red">*Lampiran wajib diisi</i>
                  </div>
                </div>

                <hr>
                <a href="users/sk" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b>KEMBALI</b></a>
                <button type="submit" id="submit-all" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;<b>SIMPAN DATA</b></button>
              </form>
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
        url: "<?php echo base_url('users/sk') ?>",
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
            formData.append("ns", jQuery("#ns").val());
            formData.append("tgl_id_surat", jQuery("#tgl_id_surat").val());
            formData.append("tgl_ns", jQuery("#tgl_ns").val());
            formData.append("tgl_sk", jQuery("#tgl_sk").val());
            formData.append("no_surat", jQuery("#no_surat").val());
            formData.append("status", jQuery("#status").val());
            formData.append("perihal", jQuery("#perihal").val());
            formData.append("tujuan", jQuery("#tujuan").val());
            formData.append("pelaksana", jQuery("#pelaksana").val());
            formData.append("bagian", jQuery("#bagian").val());
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

            $(".cari_ns").select2({
              placeholder: "Pilih nomor",
              allowClear: true
            });
            $(".cari_ns").val('').trigger('change');
            $('.form-horizontal')[0].reset();
            $('.msg').html('<div class="alert alert-success alert-dismissible" role="alert">' +
              '     <button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
              '       <span aria-hidden="true">&times;&nbsp; &nbsp;</span>' +
              '     </button>' +
              '     BERHASIL! SURAT KELUAR BERHASIL DISIMPAN' +
              '  </div>');
            $("#penerima").focus();

            alert('BERHASIL! SURAT KELUAR BERHASIL DISIMPAN');
            window.location = "<?php echo base_url(); ?>users/sk/t";
            //     }
            // });

            myDropzone.removeFile(file);
          });

        }
      };
    </script>