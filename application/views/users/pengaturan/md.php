<!-- Main content -->
<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">
        <?php
        echo $this->session->flashdata('msg');
        ?>
        <!-- Dashboard content -->
        <div class="row">
            <div class="col-md-12">
                <!-- Basic datatable -->
                <div class="panel panel-danger">
                    <div class="panel-heading text-left">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b class="">&nbsp; PROFIL MADRASAH</b><br><?php echo $md->madrasah; ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <fieldset class="content-group">
                            <form class="form-horizontal" action="" method="post">
                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right">Nama Kepala Madrasah</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-user"></i></span>
                                            <input type="hidden" name="id" class="form-control" placeholder="Masukkan Nama Lengkap dan Gelar" value="<?php echo $md->id; ?>">
                                            <input type="text" name="nm_kepala" class="form-control" placeholder="Masukkan Nama Lengkap dan Gelar" value="<?php echo $md->nm_kepala; ?>">
                                        </div>
                                    </div>

                                    <label class="control-label col-lg-2 text-right">NIP</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-folder"></i></span>
                                            <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP" value="<?php echo $md->nip; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right">Jabatan</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <input type="text" name="jabatan" class="form-control" placeholder="Masukkan Jabatan" value="<?php echo $md->jabatan; ?>" required>
                                        </div>
                                    </div>
                                    <label class="control-label col-lg-2 text-right">Nama Madrasah</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <input type="text" name="madrasah" class="form-control" placeholder="Masukkan Nama Madrasah" value="<?php echo $md->madrasah; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right">NPSN</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <input type="text" name="npsn" class="form-control" placeholder="Masukkan NPSN" value="<?php echo $md->npsn; ?>" required>
                                        </div>
                                    </div>

                                    <label class="control-label col-lg-2 text-right">NSM</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <input type="text" name="nsm" class="form-control" placeholder="Masukkan NSM" value="<?php echo $md->nsm; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right">Tahun Pelajaran</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <input type="text" name="tapel" class="form-control" placeholder="Masukkan Tahun Pelajaran" value="<?php echo $md->tapel; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right">KOP PERTAMA</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <input type="text" name="kop_1" class="form-control" placeholder="Masukkan KOP Pertama" value="<?php echo $md->kop_1; ?>" required>
                                        </div>
                                    </div>

                                    <label class="control-label col-lg-2 text-right">KOP KEDUA</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <input type="text" name="kop_2" class="form-control" placeholder="Masukkan KOP Kedua" value="<?php echo $md->kop_2; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right">Telepon & Email</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <textarea name="telp" class="form-control" placeholder="Masukkan Telepon dan Email"><?php echo $md->telp; ?></textarea>
                                        </div>
                                    </div>
                                    <label class="control-label col-lg-2 text-right">Alamat Madrasah</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap"><?php echo $md->alamat; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <a href="users/bagian" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b>KEMBALI</b></a>
                                    <button type="submit" name="btnupdate" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;<b>SIMPAN DATA</b></button>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
            <!-- /basic datatable -->
        </div>
        <!-- /dashboard content -->