<script src="assets/js/select2.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script>
    $(function() {
        $("#tgl_ns").datepicker();
    });
    $(function() {
        $("#tgl_no_asal").datepicker();
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
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b class="">&nbsp; DETAIL SURAT MASUK</b><br><?php echo $md->madrasah; ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <fieldset class="content-group">
                            <?php
                            echo $this->session->flashdata('msg');
                            ?>
                            <div class="msg"></div>
                            <form class="form-horizontal" action="" enctype="multipart/form-data" method="post">
                                <table class="table table-xs table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">No. Agenda<h4 class="text-bold"><?php echo $query->no_surat; ?></h4>
                                            </th>
                                            <th scope="col" class="text-center">Tanggal Masuk <h4 class="text-bold"><?php echo $query->tgl_no_asal; ?></h4>
                                            </th>
                                            <th scope="col" class="text-center">Kode<h4 class="text-bold"><?php echo $query->penerima; ?></h4>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nomor Surat</td>
                                            <td colspan="2" class="text-bold"><?php echo $query->no_asal; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Surat</td>
                                            <td colspan="2" class="text-bold"><?php echo format_indo($query->tgl_no_asal) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Lampiran</td>
                                            <td colspan="2" class="text-bold"><?php echo $query->lampiran; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Diterima Tanggal</td>
                                            <td colspan="2" class="text-bold"><?php echo format_indo($query->tgl_sm) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dari</td>
                                            <td colspan="2" class="text-bold"><?php echo $query->pengirim; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Perihal</td>
                                            <td colspan="2" class="text-bold"><?php echo $query->perihal; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td colspan="2" class="text-bold"><?php echo $query->status; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Sifat</td>
                                            <td colspan="2" class="text-bold"><span class="badge badge-success text-bold"><?php echo $query->sifat; ?></span></td>
                                        </tr>
                                        <tr>
                                            <td>Diteruskan kepada</td>
                                            <td colspan="2" class="text-bold"><?php echo $md->nm_kepala; ?><br><?php echo $md->jabatan; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td colspan="2" class="text-bold"><?php echo format_indo($query->tgl_ajuan) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Disposisi</td>
                                            <td colspan="2" class="text-bold">
                                                <?php if ($query->bagian == "Arsip") { ?>
                                                    <span class="badge badge-danger text-bold"><?php echo $query->bagian; ?></span>
                                                <?php } else {
                                                    echo $query->bagian;
                                                } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Penerima</td>
                                            <td colspan="2" class="text-bold"><?php echo $query->disposisi; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tindakan Segera</td>
                                            <td colspan="2" class="text-bold"><?php echo $query->segera ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tindakan Biasa</td>
                                            <td colspan="2" class="text-bold"><?php echo $query->biasa ?></td>
                                        </tr>
                                        <tr>
                                            <td>Catatan Kepala</td>
                                            <td colspan="2" class="text-bold"><?php echo $query->catatan ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Penyelesaian</td>
                                            <td colspan="2" class="text-bold"><?php echo format_indo(substr($query->tgl_disposisi, 0, 10)) ?><br><?php echo substr($query->tgl_disposisi, 11, 18) ?> WIB</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <div class="form-group">
                                    <div class="col-lg-12 col-sm-12" style="overflow-x:auto;">
                                        <table class="table table-xs table-responsive table-striped table-bordered" style="width: 100%;">
                                            <tr>
                                                <th><b>Preview File</b></th>
                                                <th><b>Nama FIle</b></th>
                                                <th><b>Download File</b></th>
                                            </tr>
                                            <?php
                                            $lampiran = $this->db->get_where('tbl_lampiran', "token_lampiran='$query->token_lampiran'");
                                            $no = 1;
                                            foreach ($lampiran->result() as $baris) { ?>
                                                <tr>
                                                    <td><a href="https://docs.google.com/viewerg/viewer?url=ALAMAT-WEBSITE/lampiran/surat_masuk/<?php echo $baris->nama_berkas; ?>" target="_blank" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-eye-open"></span><b>&nbsp; Preview File</b></a></td>
                                                    <td><?php echo $baris->nama_berkas; ?></td>
                                                    <td><a href="lampiran/surat_masuk/<?php echo $baris->nama_berkas; ?>" target="_blank" title="<?php echo substr($baris->ukuran / 1024, 0, 5); ?> KB" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-floppy-saved"></span><b>&nbsp; Unduh</b></a></td>
                                                </tr>
                                            <?php
                                                $no++;
                                            } ?>
                                        </table>
                                    </div>
                                </div>
                                <hr>
                                <a href="users/control" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b> KEMBALI</b></a>
                            </form>
                        </fieldset>
                        <script>
                            $(document).ready(function() {
                                $("#disposisi").select2({
                                    placeholder: "Pilih Pelaksana GTK"
                                });

                                $("#bagian").select2({
                                    placeholder: "Pilih Disposisi Jabatan"
                                });

                                $("#petunjuk1").select2({
                                    placeholder: "Pilih Tindakan Segera/Kilat"
                                });

                                $("#petunjuk2").select2({
                                    placeholder: "Pilih Tindakan Biasa"
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!-- /dashboard content -->