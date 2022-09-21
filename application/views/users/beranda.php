<?php
$cek    = $user->row();
$id_user = $cek->id_user;
$nama    = $cek->nama_lengkap;
$level   = $cek->level;
$username   = $cek->username;

$tgl = date('m-Y');
?>
<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-12">
        <?php if ($user->row()->level == 'ktu') { ?>
          <div class="col-md-3">
            <div class="panel panel-warning">
              <div class="panel-heading text-center">
                <i class="icon-alarm icon-3x"></i>
                <h1><b>BELUM DIAJUKAN</b></h1>
              </div>
              <div class="panel-body">
                <h1 style="margin-top: 0px; margin-bottom: -10px;"><b>
                    <?php echo number_format($this->db->query("SELECT * FROM tbl_sm where dibaca='1'")->num_rows(), 0, ",", "."); ?> DATA
                  </b><a href="users/ktu" class="btn btn-sm btn-warning" style="float: right;">SELENGKAPNYA</a>
                </h1>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="panel panel-primary">
              <div class="panel-heading text-center">
                <i class="icon-cart icon-3x"></i>
                <h1><b>SEDANG DIAJUKAN</b></h1>
              </div>
              <div class="panel-body">
                <h1 style="margin-top: 0px; margin-bottom: -10px;"><b>
                    <?php echo number_format($this->db->query("SELECT * FROM tbl_sm where dibaca='2'")->num_rows(), 0, ",", "."); ?> DATA
                  </b><a href="users/ktu" class="btn btn-sm btn-primary" style="float: right;">SELENGKAPNYA</a>
                </h1>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="panel panel-success">
              <div class="panel-heading text-center">
                <i class="icon-books icon-3x"></i>
                <h1><b>SURAT TERDISPOSISI</b></h1>
              </div>
              <div class="panel-body">
                <h1 style="margin-top: 0px; margin-bottom: -10px;"><b>
                    <?php echo number_format($this->db->query("SELECT * FROM tbl_sm where dibaca='3'")->num_rows(), 0, ",", "."); ?> DATA
                  </b><a href="users/control" class="btn btn-sm btn-success" style="float: right;">SELENGKAPNYA</a>
                </h1>
              </div>
            </div>
          </div>
        <?php } elseif ($user->row()->level == 'kepala') { ?>
          <div class="col-md-3">
            <div class="panel panel-primary">
              <div class="panel-heading text-center">
                <i class="icon-cart icon-3x"></i>
                <h1><b>KONFIRMASI SURAT</b></h1>
              </div>
              <div class="panel-body">
                <h1 style="margin-top: 0px; margin-bottom: -10px;"><b>
                    <?php echo number_format($this->db->query("SELECT * FROM tbl_sm where dibaca='2'")->num_rows(), 0, ",", "."); ?> DATA
                  </b><a href="users/kepala" class="btn btn-sm btn-primary" style="float: right;">SELENGKAPNYA</a>
                </h1>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="panel panel-success">
              <div class="panel-heading text-center">
                <i class="icon-books icon-3x"></i>
                <h1><b>SURAT TERDISPOSISI</b></h1>
              </div>
              <div class="panel-body">
                <h1 style="margin-top: 0px; margin-bottom: -10px;"><b>
                    <?php echo number_format($this->db->query("SELECT * FROM tbl_sm where dibaca='3'")->num_rows(), 0, ",", "."); ?> DATA
                  </b><a href="users/control" class="btn btn-sm btn-success" style="float: right;">SELENGKAPNYA</a>
                </h1>
              </div>
            </div>
          </div>

        <?php } else { ?>
          <div class="col-md-3">
            <div class="panel panel-success">
              <div class="panel-heading text-center">
                <i class="icon-magazine icon-3x"></i>
                <h1><b>SURAT MASUK</b> </h1>
              </div>
              <div class="panel-body">
                <h1 style="margin-top: 0px; margin-bottom: -10px;"><b>
                    <?php echo number_format($this->db->query("SELECT * FROM tbl_sm")->num_rows(), 0, ",", ".");
                    ?> DATA
                  </b><a href="users/sm" class="btn btn-sm btn-success" style="float: right;">SELENGKAPNYA</a>
                </h1>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="panel panel-danger">
              <div class="panel-heading text-center">
                <i class="icon-design icon-3x"></i>
                <h1><b>SURAT KELUAR</b>
                </h1>
              </div>
              <div class="panel-body">
                <h1 style="margin-top: 0px; margin-bottom: -10px;"><b>
                    <?php echo number_format($this->db->query("SELECT * FROM tbl_sk")->num_rows(), 0, ",", ".");
                    ?> DATA</b>
                  <a href="users/sk" class="btn btn-sm btn-danger" style="float: right;">SELENGKAPNYA</a>
                </h1>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="panel panel-primary">
              <div class="panel-heading text-center">
                <i class="icon-books icon-3x"></i>
                <h1><b>SURAT KETERANGAN</b></h1>
              </div>
              <div class="panel-body">
                <h1 style="margin-top: 0px; margin-bottom: -10px;"><b>
                    <?php echo number_format($this->db->query("SELECT * FROM tbl_ska")->num_rows(), 0, ",", "."); ?> DATA
                  </b><a href="users/ska" class="btn btn-sm btn-primary" style="float: right;">SELENGKAPNYA</a>
                </h1>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="panel panel-warning">
              <div class="panel-heading text-center">
                <i class="icon-book3 icon-3x"></i>
                <h1><b>DIKLAT</b></h1>
              </div>
              <div class="panel-body">
                <h1 style="margin-top: 0px; margin-bottom: -10px;"><b>
                    <?php echo number_format($this->db->query("SELECT * FROM tbl_diklat")->num_rows(), 0, ",", "."); ?> DIKLAT
                  </b><a href="users/diklat" class="btn btn-sm btn-warning" style="float: right;">SELENGKAPNYA</a>
                </h1>
              </div>
            </div>
          </div>
        <?php } ?>
        <div class="col-md-12">
          <div class="alert alert-success" style="padding-bottom: 5px;">
            <h4 align="left" style="text-transform: uppercase;"> SELAMAT DATANG <b><?php echo ucwords($nama); ?></b> ANDA LOGIN SEBAGAI <strong><?php echo ucwords($username); ?></strong>
              </b>
            </h4>
          </div>
        </div>

        <!-- Basic datatable -->
        <!-- /dashboard content -->
        <script type="text/javascript">
          $(function() {
            function onClickHandler(date, obj) {
              var $calendar = obj.calendar;
              var $box = $calendar.parent().siblings('.box').show();
              var text = 'Anda memilih tanggal ';
              if (date[0] !== null) {
                text += date[0].format('DD MMMM YYYY');
              }
              if (date[0] !== null && date[1] !== null) {
                text += ' ~ ';
              } else if (date[0] === null && date[1] == null) {
                text += 'tidak ada';
              }
              if (date[1] !== null) {
                text += date[1].format('DD MMMM YYYY');
              }
              $box.text(text);
            }
            $('.calendar').pignoseCalendar({
              lang: 'ind',
              select: onClickHandler,
              theme: 'blue' // light, dark, blue
            });
          });
        </script>