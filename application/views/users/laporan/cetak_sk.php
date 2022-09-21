<?php
$cek    = $user->row();
$nama   = $cek->nama_lengkap;
$email  = $cek->email;
$level  = $cek->level;
if ($level == "s_admin") {
  $level = "Super Admin";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title><?php echo date('d_m_Y'); ?>_Rekap_Laporan_Surat_Keluar</title>
  <base href="<?php echo base_url(); ?>" />
</head>
<style type="text/css">
  @page {
    margin-top: 0.5cm;
    /*margin-bottom: 0.1em;*/
    margin-left: 1cm;
    margin-right: 1cm;
    margin-bottom: 0.1cm;
  }

  .name-school {
    font-size: 15pt;
    font-weight: bold;
    text-transform: uppercase;
  }

  .alamat {
    font-size: 11pt;
    margin-top: -15px;
    margin-bottom: -10px;
  }

  .alamat2 {
    font-size: 9pt;
  }

  .ttd-kiri {
    font-size: 9pt;
    margin-left: 50px;
  }

  .ttd-kanan {
    font-size: 9pt;
    margin-left: 250px;
    text-align: left;
  }

  .detail {
    font-size: 10pt;
    font-weight: bold;
    padding-top: -15px;
    padding-bottom: -12px;
  }

  body {
    font-family: sans-serif;
  }

  table {
    font-family: verdana, arial, sans-serif;
    font-size: 11px;
    color: #333333;
    border-width: none;
    /*border-color: #666666;*/
    border-collapse: collapse;
    width: 100%;
  }

  th {
    padding-bottom: 8px;
    padding-top: 8px;
    border-color: #666666;
    background-color: #dedede;
    /*border-bottom: solid;*/
    text-align: center;
  }

  td {
    padding-bottom: 8px;
    padding-top: 8px;
    padding-left: 8px;
    border-color: #666666;
    background-color: #ffffff;
    text-align: left;
  }

  hr {
    border: 1;
    height: 2px;
    /* Set the hr color */
    color: #333;
    /* old IE */
    background-color: #333;
    /* Modern Browsers */
  }

  .container {
    position: relative;
  }

  .topright {
    position: absolute;
    top: 0;
    right: 0;
    font-size: 18px;
    border-width: thin;
    padding: 5px;
  }

  .topright2 {
    position: absolute;
    top: 30px;
    right: 50px;
    font-size: 18px;
    border: 1px solid;
    padding: 5px;
    color: red;
  }
</style>

<body onload="window.print()">

  <table width="100%">
    <tr>
      <td width="120">
        <img src="foto/logo1.png" alt="logo1" width="80">
      </td>
      <td align="left">
        <p class="name-school"><?php echo $md->madrasah; ?></p>
        <p class="alamat"><b><?php echo $md->alamat; ?></b></p>
        <p class="alamat2"><?php echo $md->telp; ?></p>
      </td>
    </tr>
  </table>
  <hr>
  <h3 align="center">L A P O R A N <br> ARSIP DIGITAL SURAT KELUAR</h3>
  <p class="alamat2">Laporan tanggal: <b><u><?php echo $t_awal ?></u></b> s/d <b><u><?php echo $t_akhir ?></u></b></p>
  <table border="1" width="100%">
    <tr>
      <th width="1%" rowspan="2">No.</th>
      <th width="5%" rowspan="2">No. Urut</th>
      <th width="10%" rowspan="2">Tanggal Surat</th>
      <th width="20%" rowspan="2">Tujuan/Penerima</th>
      <th colspan="3">Surat</th>
      <th width="5%" rowspan="2">Kode Klasifikasi</th>
      <th width="19%" rowspan="2">Pelaksana</th>
    </tr>
    <tr>
      <th width="10%">Tanggal Surat</th>
      <th width="15%">No. Surat</th>
      <th width="20%">Perihal</th>
    </tr>
    <?php
    $no = 1;
    foreach ($sql->result() as $baris) { ?>
      <tr>
        <td>
          <center><?php echo $no; ?></center>
        </td>
        <td><?php echo $baris->id_surat; ?></td>
        <td><?php echo $baris->tgl_sk; ?></td>
        <td><?php echo $baris->tujuan; ?></td>
        <td><?php echo $baris->tgl_sk; ?></td>
        <td><?php echo $baris->no_surat; ?></td>
        <td><?php echo $baris->perihal; ?></td>
        <td><?php echo $baris->kode; ?></td>
        <td><?php echo $baris->pelaksana; ?></td>
      </tr>
    <?php
      $no++;
    } ?>
  </table>
  <table>
    <tr>
      <td width="50%">
        <p class="ttd-kiri">&nbsp;</p>
        <p class="ttd-kiri">Mengetahui,</p>
        <p class="ttd-kiri"><?php echo $md->jabatan; ?></p>
        <br><br><br>
        <p class="ttd-kiri"><b><?php echo $md->nm_kepala; ?></b></p>
      </td>
      <td width="50%">
        <p class="ttd-kanan"><?php echo format_indo(date('Y-m-d')); ?></p>
        <p class="ttd-kanan">&nbsp;</p>
        <p class="ttd-kanan">Petugas,</p>
        <br><br><br>
        <p class="ttd-kanan"><b><?php echo ucwords($nama); ?></b></p>
      </td>

    </tr>
  </table>


</body>

</html>