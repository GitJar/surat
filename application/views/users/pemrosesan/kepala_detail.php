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
                                            <td colspan="2" class="text-bold"><span class="badge badge-success text-bold"><?php echo $query->sifat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Diteruskan kepada</td>
                                            <td colspan="2" class="text-bold"><?php echo $md->nm_kepala; ?><br><?php echo $md->jabatan; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td colspan="2" class="text-bold"><?php echo format_indo($query->tgl_ajuan) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <?php
                                        $lampiran = $this->db->get_where('tbl_lampiran', "token_lampiran='$query->token_lampiran'");
                                        $no = 1;
                                        foreach ($lampiran->result() as $baris) { ?>
                                    <div class="col-lg-12">
                                        <iframe src="lampiran/surat_masuk/<?php echo $baris->nama_berkas; ?>" type="application/pdf" class="col-lg-12"></iframe>
                                    </div>
                                <?php } ?> -->
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
                                <div class="form-group">
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-office"></i></span>
                                            <select class="form-control" name="bagian" id="bagian" required>
                                                <option value="">-- Pilih Disposisi Jabatan --</option>
                                                <option value="Arsip">Arsip</option>
                                                <option value="Kepala Madrasah">Kepala Madrasah</option>
                                                <option value="Kepala TU">Kepala TU</option>
                                                <option value="WAKA Sarana">WAKA Sarana</option>
                                                <option value="WAKA Kesiswaan">WAKA Kesiswaan</option>
                                                <option value="WAKA Humas">WAKA Humas</option>
                                                <option value="WAKA Kurikulum">WAKA Kurikulum</option>
                                                <option value="Bendahara">Bendahara</option>
                                                <option value="Kepala Perpustakaan">Kepala Perpustakaan</option>
                                                <option value="Kepala Lab. Komputer">Kepala Lab. Komputer</option>
                                                <option value="Kepala Lab.">Kepala Lab.</option>
                                                <option value="Pembina Ekstrakurikuler">Pembina Ekstrakurikuler</option>
                                                <option value="Tata Usaha">Tata Usaha</option>
                                                <option value="Guru">Guru</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-users"></i></span>
                                            <select class="form-control" name="disposisi[]" id="disposisi" multiple>
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
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-feed"></i></span>
                                            <select class="form-control" name="petunjuk1[]" id="petunjuk1" multiple>
                                                <option value="Tindak lanjuti">Tindak lanjuti</option>
                                                <option value="Setuju">Setuju</option>
                                                <option value="Tolak">Tolak</option>
                                                <option value="Teliti & pendapat">Teliti & pendapat</option>
                                                <option value="Untuk diketahui">Untuk diketahui</option>
                                                <option value="Selesaikan">Selesaikan</option>
                                                <option value="Sesuai catatan">Sesuai catatan</option>
                                                <option value="Untuk diperhatikan">Untuk diperhatikan</option>
                                                <option value="Edarkan">Edarkan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-bookmark"></i></span>
                                            <select class="form-control" name="petunjuk2[]" id="petunjuk2" multiple>
                                                <option value="Jawab">Jawab</option>
                                                <option value="Perbaiki">Perbaiki</option>
                                                <option value="Bicarakan dengan saya">Bicarakan dengan saya</option>
                                                <option value="Bicarakan bersama">Bicarakan bersama</option>
                                                <option value="Ingat">Ingat</option>
                                                <option value="Simpan">Simpan</option>
                                                <option value="Diarsipkan">Diarsipkan</option>
                                                <option value="Harap di hadiri/ di wakilkan">Harap di hadiri/ di wakilkan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-book"></i></span>
                                            <textarea class="form-control" name="catatan" id="catatan" placeholder="Berikan catatan untuk surat ini jika dibutuhkan"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <a href="users/kepala" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span>&nbsp;<b> KEMBALI</b></a>
                                <button type="submit" name="btndisposisi" id="submit-all" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span>&nbsp;<b>SIMPAN</b></button>
                            </form>
                        </fieldset>
                        <script>
                            $(document).ready(function() {
                                $("#disposisi").select2({
                                    placeholder: "Pelaksana GTK"
                                });

                                $("#bagian").select2({
                                    placeholder: "Disposisi Jabatan"
                                });

                                $("#petunjuk1").select2({
                                    placeholder: "Tindakan Segera/Kilat"
                                });

                                $("#petunjuk2").select2({
                                    placeholder: "Tindakan Biasa"
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <!-- /dashboard content -->