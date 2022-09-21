<script src="assets/js/select2.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
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
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b>&nbsp; TAMBAH SURAT KETERANGAN</b><br><?php echo $md->madrasah; ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <fieldset class="content-group">
                            <?php echo $this->session->flashdata('msg'); ?>
                            <div class="msg"></div>
                            <form class="form-horizontal" action="" method="post">
                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right">Pilih Nama Siswa</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-user"></i></span>
                                            <select class="form-control cari_siswa" name="id_siswa" id="id_siswa" required>
                                                <option value=""></option>
                                                <?php
                                                $this->db->order_by('nm_siswa', 'ASC');
                                                $siswa = $this->db->get('tbl_siswa')->result();
                                                foreach ($siswa as $baris) { ?>
                                                    <option value="<?php echo $baris->id; ?>"><?php echo $baris->nm_siswa; ?></option>
                                                <?php
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="control-label col-lg-2 text-right">No. Surat</label>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-spinner"></i></span>
                                            <input type="text" name="nomor_ska" id="nomor_ska" class="form-control" placeholder="Digit Nomor Awal" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-bookmark"></i></span>
                                            <input type="text" name="no_ska" id="no_ska" class="form-control" placeholder="Kode Belakang" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right"> Jenis Keterangan</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <select class="form-control cari_ket" name="jenis_ska" id="jenis_ska" required>
                                                <option value="">-- Pilih Jenis Keterangan --</option>
                                                <option value="1">Surat Keterangan Aktif</option>
                                                <option value="2">Surat Keterangan Baik</option>
                                                <option value="3">Surat Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label class="control-label col-lg-2 text-right">Tempat, Tanggal Surat</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                            <input type="text" name="tgl_ska" id="tgl_ska" class="form-control" placeholder="Contoh: Situbondo, 10 Januari 2021" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right">Isi Keterangan Surat</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-spinner"></i></span>
                                            <textarea type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Masukkan Keterangan Surat"></textarea>
                                        </div>
                                    </div>
                                    <label class="control-label col-lg-2 text-right"> Jenis Isi TTD</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <select class="form-control" name="ttd" id="ttd" required>
                                                <option value="">-- Pilih Isi TTD --</option>
                                                <option value="1">Kosong</option>
                                                <option value="2">Centang</option>
                                                <option value="3">TTD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <a href="users/ska" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b>KEMBALI</b></a>
                                <button type="submit" name="btnsimpan" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;<b>SIMPAN DATA</b></button>
                            </form>
                            <script>
                                $(document).ready(function() {
                                    $(".cari_ket").select2({
                                        placeholder: "Pilih Keterangan"
                                    });

                                    $(".cari_siswa").select2({
                                        placeholder: "Pilih Nama Siswa"
                                    });
                                });
                            </script>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <!-- /dashboard content -->