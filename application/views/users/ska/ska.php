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
                <div class="panel panel-success">
                    <div class="panel-heading text-left">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b class="">&nbsp; DAFTAR SURAT KETERANGAN</b><br><?php echo $md->madrasah; ?>
                            </div>
                            <div class="col-md-6 text-right">
                                <?php
                                if ($user->row()->level <> 's_admin') { ?>
                                    <a href="users/ska/t" class="btn btn-xs btn-default" style="margin-top: 5px;"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><b>&nbsp; TAMBAH DATA</b></a>
                                <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" style="margin-top: -20px;">
                        <table class="table table-xs table-hover table-striped table-bordered datatable-basic">
                            <thead>
                                <tr class="bg-info">
                                    <th width="10">No.</th>
                                    <th>No. Surat</th>
                                    <th>Tanggal</th>
                                    <th>Nama Siswa</th>
                                    <th>Jenis SKA</th>
                                    <th class="text-center" width="170px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($ska->result() as $baris) {
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $baris->nomor_ska; ?></td>
                                        <td><?php echo $baris->no_ska; ?></td>
                                        <td><?php echo $baris->tgl_ska; ?></td>
                                        <td><?php echo $baris->nm_siswa; ?></td>
                                        <td>
                                            <?php if ($baris->jenis_ska == '1') {
                                                echo "Keterangan Aktif";
                                            } elseif ($baris->jenis_ska == '2') {
                                                echo "Keterangan Baik";
                                            } else {
                                                echo "Keterangan Lainnya";
                                            } ?>

                                        </td>
                                        <td class="text-center">
                                            <a href="users/ska/c/<?php echo $baris->id_ska; ?>" class="btn btn-xs btn-success" target="_blank"><i class="icon-printer"></i></a>
                                            <?php
                                            if ($user->row()->level != 's_admin') { ?>
                                                <a href="users/ska/e/<?php echo $baris->id_ska; ?>" class="btn btn-xs btn-primary"><i class="icon-pencil7"></i></a>
                                                <a href="users/ska/h/<?php echo $baris->id_ska; ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
                                            <?php
                                            } ?>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /basic datatable -->
            </div>
        </div>
        <!-- /dashboard content -->