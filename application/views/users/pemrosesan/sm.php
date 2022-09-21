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
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span><b class="">&nbsp; DAFTAR SURAT MASUK</b><br><?php echo $md->madrasah; ?>
              </div>
              <div class="col-md-6 text-right">
                <?php
                if ($user->row()->level == 'admin') { ?>
                  <p id="selectTingkatNaik" class="col-sm-4 pull-right text-right" style="margin-right:-10px;"></p>
                  <a href="users/sm/t" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><b>&nbsp; TAMBAH DATA</b></a>
                  <a href="users/control/" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span><b>&nbsp; HISTORY SURAT</b></a>
                <?php
                } ?>
              </div>
            </div>
          </div>
          <div class="panel-body" style="margin-top: -20px;">
            <table class="table table-xs table-hover table-striped table-bordered datatable-basic">
              <thead>
                <tr class="bg-info">
                  <th width="10%">No. Agenda</th>
                  <th>Tgl. Diterima</th>
                  <th>Instansi</th>
                  <th width="40%">Perihal</th>
                  <th>Tahun</th>
                  <th width="20%">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($sm->result() as $baris) {
                ?>
                  <tr>
                    <td class="text-center">
                      <?php
                      if ($baris->dibaca == 3) { ?>
                        <span class="badge badge-success"><i class="icon-checkmark4"></i> <?php echo $baris->no_surat; ?></span>
                      <?php } elseif ($baris->dibaca == 2) { ?>
                        <span class="badge badge-primary"><i class="icon-bell3"></i> <?php echo $baris->no_surat; ?></span>
                      <?php } elseif ($baris->dibaca == 1) { ?>
                        <span class="badge badge-warning"><i class="icon-spinner"></i> <?php echo $baris->no_surat; ?></span>
                      <?php } else { ?>
                        <span class="badge badge-danger"><i class="icon-cancel-circle2"></i> <?php echo $baris->no_surat; ?></span>
                      <?php } ?>
                    </td>
                    <td><?php echo $baris->tgl_sm; ?></td>
                    <td><?php echo $baris->pengirim; ?></td>
                    <td><?php echo $baris->perihal; ?></td>
                    <td><?php echo substr($baris->tgl_sm, 0, 4); ?></td>
                    <td class="text-left">
                      <a href="users/sm/d/<?php echo $baris->id_sm; ?>" class="btn btn-success btn-xs"><i class="icon-eye"></i></a>
                      <?php if ($baris->dibaca == 3) { ?>
                        <a href="users/sm/c/<?php echo $baris->id_sm; ?>" class="btn btn-xs btn-warning" target="_blank"><i class="icon-printer"></i></a>
                      <?php } ?>
                      <?php if ($user->row()->level == 'admin') { ?>
                        <?php if ($baris->dibaca == 0) { ?>
                          <a href="users/sm/e/<?php echo $baris->id_sm; ?>" class="btn btn-xs btn-primary"><i class="icon-pencil7"></i></a>
                          <a href="users/sm/h/<?php echo $baris->id_sm; ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-trash"></i></a>
                        <?php } ?>
                      <?php } ?>
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