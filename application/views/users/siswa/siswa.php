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
                <div class="panel panel-default">
                    <div class="panel-heading text-left">
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b class="">&nbsp; DAFTAR SISWA</b><br><?php echo $md->madrasah; ?>
                            </div>
                            <div class="col-md-6 text-right">
                                <?php
                                if ($user->row()->level <> 's_admin') { ?>
                                    <a href="users/siswa/t" class="btn btn-xs btn-success" style="margin-top: 5px;"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><b>&nbsp; TAMBAH DATA</b></a>
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
                                    <th>NIM</th>
                                    <th>NISN</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tempat, Tanggal Lahir</th>
                                    <th>Kelas</th>
                                    <th class="text-center" width="170px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($siswa->result() as $baris) {
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no . '.'; ?></td>
                                        <td><?php echo $baris->nim; ?></td>
                                        <td><?php echo $baris->nisn; ?></td>
                                        <td><?php echo $baris->nm_siswa; ?></td>
                                        <td><?php echo $baris->ttl; ?></td>
                                        <td><?php echo $baris->kelas; ?> <?php echo $baris->jurusan; ?></td>
                                        <!-- <td><?php echo $baris->nm_ort; ?></td> -->
                                        <td class="text-center">
                                            <a href="users/siswa/d/<?php echo $baris->id; ?>" class="btn btn-success btn-xs"><i class="icon-eye"></i></a>
                                            <?php
                                            if ($user->row()->level <> 's_admin') { ?>
                                                <a href="users/siswa/e/<?php echo $baris->id; ?>" class="btn btn-xs btn-primary"><i class="icon-pencil7"></i></a>
                                                <a href="users/siswa/h/<?php echo $baris->id; ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
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