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
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b>&nbsp; TAMBAH SISWA</b><br><?php echo $md->madrasah; ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <fieldset class="content-group">
                            <?php echo $this->session->flashdata('msg'); ?>
                            <div class="msg"></div>
                            <form class="form-horizontal" action="" method="post">
                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right">Nomor Induk Madrasah</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-home"></i></span>
                                            <input type="text" name="nim" id="nim" value="<?php echo $query->nim; ?>" class="form-control" placeholder="Masukkan Nomor Induk Madrasah (NIM)" readonly>
                                        </div>
                                    </div>
                                    <label class="control-label col-lg-2 text-right">NISN</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-bookmark"></i></span>
                                            <input type="text" name="nisn" id="nisn" value="<?php echo $query->nisn; ?>" class="form-control" placeholder="Masukkan Nomor Induk Sekolah Nasional (NISN)" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right"> Nama Lengkap</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <input type="text" name="nm_siswa" id="nm_siswa" value="<?php echo $query->nm_siswa; ?>" class="form-control" placeholder="Masukkan Nama Lengap" readonly>
                                        </div>
                                    </div>
                                    <label class="control-label col-lg-2 text-right">Tempat, Tanggal Lahir</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-spinner"></i></span>
                                            <input type="text" name="ttl" id="ttl" value="<?php echo $query->ttl; ?>" class="form-control" placeholder="Contoh: Situbondo, 10 Januari 1991" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right"> Kelas</label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <select class="form-control" name="kelas" id="kelas" readonly>
                                                <option value="<?php echo $query->kelas; ?>"><?php echo $query->kelas; ?></option>
                                                <option value="">Pilih Kelas</option>
                                                <option value="VII">VII</option>
                                                <option value="VIII">VIII</option>
                                                <option value="IX">IX</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-spinner"></i></span>
                                            <select class="form-control" name="jurusan" id="jurusan" readonly>
                                                <option value="<?php echo $query->jurusan; ?>"><?php echo $query->jurusan; ?></option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                                <option value="E">E</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                                <option value="I">I</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="control-label col-lg-2 text-right"> Nama Orang Tua</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <input type="text" name="nm_ort" id="nm_ort" value="<?php echo $query->nm_ort; ?>" class="form-control" placeholder="Masukkan Nama Orang Tua" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label class="control-label col-lg-2 text-right">Alamat</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-spinner"></i></span>
                                            <textarea type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap" readonly><?php echo $query->alamat; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <a href="users/siswa" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b>KEMBALI</b></a>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <!-- /dashboard content -->