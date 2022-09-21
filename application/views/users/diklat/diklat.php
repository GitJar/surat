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
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b class="">&nbsp; DAFTAR DIKLAT</b><br><?php echo $md->madrasah; ?>
              </div>
              <div class="col-md-6 text-right">
                <?php
                if ($user->row()->level == 'admin') { ?>
                  <a href="users/diklat/t" class="btn btn-xs btn-success" style="margin-top: 5px;"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><b>&nbsp; TAMBAH DATA</b></a>
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
                  <th>Nama Pelaksana</th>
                  <th>Jenis Diklat</th>
                  <th>Tempat</th>
                  <th colspan="2" class="text-center">Tanggal</th>
                  <th>Hari</th>
                  <th class="text-center" width="140px">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($diklat->result() as $baris) {
                ?>
                  <tr>
                    <td class="text-center"><?php echo $no; ?></td>
                    <td><?php echo $baris->nama_bagian; ?></td>
                    <td><?php echo $baris->jenis_diklat; ?></td>
                    <td><?php echo $baris->lokasi; ?></td>
                    <td><?php echo $baris->tgl_awal; ?></td>
                    <td><?php echo $baris->tgl_akhir; ?></td>
                    <td><?php echo $baris->lama; ?> Hari</td>
                    <td class="text-center">
                      <a href="users/diklat/d/<?php echo $baris->id_diklat; ?>" class="btn btn-success btn-xs"><i class="icon-eye"></i></a>
                      <?php
                      if ($user->row()->level == 'admin') { ?>
                        <a href="users/diklat/e/<?php echo $baris->id_diklat; ?>" class="btn btn-xs btn-primary"><i class="icon-pencil7"></i></a>
                        <a href="users/diklat/h/<?php echo $baris->id_diklat; ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
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