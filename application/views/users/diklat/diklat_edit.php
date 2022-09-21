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
                <div class="panel panel-default">
                    <div class="panel-heading text-left">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b>&nbsp; EDIT DIKLAT</b><br><?php echo $md->madrasah; ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <fieldset class="content-group">
                            <?php echo $this->session->flashdata('msg'); ?>
                            <div class="msg"></div>
                            <form class="form-horizontal" action="" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right">Berdasarkan Surat</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-sort"></i></span>
                                            <select class="form-control" name="id_sm" id="id_sm" required>
                                                <option value="<?php echo $query->id_sm; ?>"><?php echo $query->id_sm; ?></option>
                                                <option value="">-- Pilih Berdasarkan Surat Masuk -- </option>
                                                <?php
                                                $this->db->order_by('no_surat', 'ASC');
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
                                            <select class="form-control" name="id_bagian" id="id_bagian" required>
                                                <option value="<?php echo $query->id_bagian; ?>"><?php echo $query->nama_bagian; ?></option>
                                                <option value="">-- Pilih Pelaksana -- </option>
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
                                            <textarea name="jenis_diklat" id="jenis_diklat" class="form-control" placeholder="Tambahkan Deskripsi Kegiatan Diklat" required><?php echo $query->jenis_diklat; ?></textarea>
                                        </div>
                                    </div>
                                    <label class="control-label col-lg-2 text-right">Lokasi/Tempat</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-home"></i></span>
                                            <textarea name="lokasi" id="lokasi" class="form-control" placeholder="Tambahkan Keterangan Lokasi/Tempat" required><?php echo $query->lokasi; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="control-label col-lg-2 text-right">Tanggal Awal</label>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                                <input type="text" name="tgl_awal" class="form-control daterange-single" id="tgl_awal" value="<?php echo $query->tgl_awal ?>" maxlength="10" required>
                                            </div>
                                        </div>
                                        <label class="control-label col-lg-2 text-right">Tanggal Akhir</label>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                                <input type="text" name="tgl_akhir" class="form-control daterange-single" id="tgl_akhir" value="<?php echo $query->tgl_akhir; ?>" maxlength="10" required>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <a href="users/diklat" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b>KEMBALI</b></a>
                                    <button type="submit" name="btnupdate" id="submit-all" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;<b>SIMPAN DATA</b></button>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
        <!-- /dashboard content -->