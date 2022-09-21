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
                                            <input type="text" class="form-control" value="<?php echo $querydiklat->id_sm; ?>" readonly>
                                        </div>
                                    </div>
                                    <label class="control-label col-lg-2 text-right">Pelaksana</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-user"></i></span>
                                            <input type="text" class="form-control" value="<?php echo $querydiklat->nama_bagian; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-lg-2 text-right">Jenis Diklat</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-list"></i></span>
                                            <textarea class="form-control" readonly><?php echo $querydiklat->jenis_diklat; ?></textarea>
                                        </div>
                                    </div>
                                    <label class="control-label col-lg-2 text-right">Lokasi/Tempat</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-home"></i></span>
                                            <textarea class="form-control" readonly><?php echo $querydiklat->lokasi; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="control-label col-lg-2 text-right">Tanggal</label>
                                        <div class="col-lg-2">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                                <input type="text" class="form-control" value="<?php echo $querydiklat->tgl_awal; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar"></i></span>
                                                <input type="text" class="form-control" value="<?php echo $querydiklat->tgl_akhir; ?>" readonly>
                                            </div>
                                        </div>
                                        <label class="control-label col-lg-2 text-right">Lamanya</label>
                                        <div class="col-lg-4">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-file-empty"></i></span>
                                                <input type="text" class="form-control" value="<?php echo $querydiklat->lama; ?> Hari" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label class="control-label col-lg-3"><b>Lampiran Piagam</b></label>
                                    <div class="col-lg-12">
                                        <table class="table table-xs table-bordered">
                                            <tr>
                                                <th width='5%'><b>No.</b></th>
                                                <th><b>Nama File Piagam</b></th>
                                                <th><b>Pemilik Piagam</b></th>
                                                <th><b>Ukuran</b></th>
                                                <th class="text-center"><b>Aksi</b></th>
                                            </tr>
                                            <?php
                                            $lampiran = $this->db->get_where('tbl_lampiran', "token_lampiran='$querydiklat->token_lampiran'");
                                            $no = 1;
                                            foreach ($lampiran->result() as $baris) { ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $baris->nama_berkas; ?></td>
                                                    <td><?php echo $querydiklat->nama_bagian; ?></td>
                                                    <td><?php echo substr($baris->ukuran / 1024, 0, 5); ?> MB</td>
                                                    <td class="text-center"><a href="lampiran/piagam/<?php echo $baris->nama_berkas; ?>" target="_blank" title="<?php echo substr($baris->ukuran / 1024, 0, 5); ?> MB" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-floppy-saved"></span></a></td>
                                                </tr>
                                            <?php
                                                $no++;
                                            } ?>
                                        </table>
                                    </div>
                                </div>
                                <a href="users/diklat" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b>KEMBALI</b></a>
                                <?php if ($user->row()->level == 'admin') { ?>
                                    <a href="users/diklat/e/<?php echo $querydiklat->id_diklat; ?>" class="btn btn-xs btn-primary"><i class="icon-pencil7"></i>&nbsp;<b> EDIT DATA</b></a>
                                <?php } ?>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>