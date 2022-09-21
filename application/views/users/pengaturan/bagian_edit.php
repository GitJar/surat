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
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b class="">&nbsp; EDIT TENAGA PENDIDIK & KEPENDIDIKAN</b><br><?php echo $md->madrasah; ?>
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
                      <input type="text" name="nama_bagian" class="form-control" value="<?php echo $query->nama_bagian; ?>" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">NIP</label>
                  <div class="col-lg-9">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-folder"></i></span>
                      <input type="text" name="nip" class="form-control" value="<?php echo $query->nip; ?>" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Pangkat/Golongan</label>
                  <div class="col-lg-9">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="icon-list"></i></span>
                      <input type="text" name="pangkat" class="form-control" value="<?php echo $query->pangkat; ?>" required>
                    </div>
                  </div>
                </div>
                <hr>
                <a href="users/bagian" class="btn btn-danger"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b>KEMBALI</b></a>
                <button type="submit" name="btnupdate" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;<b>UPDATE</b></button>
              </form>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
    <!-- /dashboard content -->