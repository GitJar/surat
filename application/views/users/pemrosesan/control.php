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
                                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b class="">&nbsp; HISTORY SURAT MASUK</b><br><?php echo $md->madrasah; ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" style="margin-top: -20px;">
                        <table class="table table-xs table-hover table-striped table-bordered datatable-basic">
                            <thead>
                                <tr class="bg-info">
                                    <th>No.</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    <th>Tgl. Diterima</th>
                                    <th>Instansi</th>
                                    <th width="40%">Perihal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($control->result() as $baris) {
                                ?>
                                    <tr>
                                        <td><?php echo $baris->no_surat; ?></td>
                                        <td class="text-center">
                                            <?php
                                            if ($baris->bagian == "Arsip") { ?>
                                                <button class="btn btn-sm btn-danger"><i class="icon-cancel-circle2"></i>&nbsp; <b>Diarsip&nbsp;&nbsp;</b></buttom>
                                                <?php } else { ?>
                                                    <button class="btn btn-sm btn-success"><i class="icon-checkmark4"></i>&nbsp; <b>Disposisi</b></button>
                                                <?php } ?>
                                        </td>
                                        <td class="text-center">
                                            <a href="users/control/d/<?php echo $baris->id_sm; ?>" class="btn btn-info btn-sm"><i class="icon-eye"></i>&nbsp;&nbsp;<span class="small text-white">&nbsp;<b>DETAIL</b></span></a>
                                        </td>
                                        <td><?php echo $baris->tgl_sm; ?></td>
                                        <td><?php echo $baris->pengirim; ?></td>
                                        <td><?php echo $baris->perihal; ?></td>
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