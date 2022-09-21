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
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b>&nbsp; TAMBAH TENAGA PENDIDIK & KEPENDIDIKAN</b><br><?php echo $md->madrasah; ?>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <fieldset class="content-group">
              <?php
              echo $this->session->flashdata('msg');
              ?>
              <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-lg-3">Nama Lengkap</label>
                  <div class="col-lg-9">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-user"></i></span>
                      <input type="text" name="nama_bagian" class="form-control" placeholder="Masukkan Nama Lengkap dan Gelar" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">NIP</label>
                  <div class="col-lg-9">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-folder"></i></span>
                      <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP Pegawai atau Guru" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Pangkat/Golongan</label>
                  <div class="col-lg-9">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-list"></i></span>
                      <input type="text" name="pangkat" class="form-control" placeholder="Masukkan Pangkat/Golongan" required>
                    </div>
                  </div>
                </div>
                <a href="users/bagian" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b>KEMBALI</b></a>
                <button type="submit" name="btnsimpan" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;<b>SIMPAN DATA</b></button>
              </form>
            </fieldset>
          </div>

        </div>
      </div>
    </div>
    <!-- /dashboard content -->