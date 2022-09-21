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
    <title><?php echo date('d_m_Y'); ?>_<?php echo $sql->no_surat; ?></title>
    <base href="<?php echo base_url(); ?>" />
</head>
<style type="text/css">
    @page {
        margin-top: 1cm;
        margin-left: 1.5cm;
        margin-right: 1.5cm;
        margin-bottom: 0.1cm;
    }

    .kop {
        font-size: 14pt;
        font-weight: bold;
        text-transform: uppercase;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        margin-bottom: -7px;
    }

    .alamat_1 {
        font-size: 11pt;
        margin-bottom: -28px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
    }

    .isi {
        font-size: 12pt;
        margin-top: 10px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: left;
        padding-left: 10px;
    }

    .isi_paragraf {
        font-size: 13pt;
        margin-top: 10px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: left;
    }

    .ttd-kiri {
        font-size: 9pt;
        margin-left: 50px;
    }

    .ttd-kanan {
        font-size: 13pt;
        margin-left: 20px;
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;
    }

    .detail {
        font-size: 10pt;
        font-weight: bold;
        padding-top: -15px;
        padding-bottom: -12px;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    table {
        font-family: Arial, Helvetica, sans-serif, arial, sans-serif;
        font-size: 14px;
        color: #333333;
        border-width: none;
        border-collapse: collapse;
        width: 100%;
    }

    th {
        padding-bottom: 8px;
        padding-top: 8px;
        border-color: #666666;
        background-color: #dedede;
        text-align: center;
    }

    tr {
        text-align: left;
        border-top: 0.5px #666666 solid;
        border-bottom: 0.5px #666666 solid;
        border-left: 0.5px #666666 solid;
        border-right: 0.5px #666666 solid;
    }
</style>

<body onload="window.print()">
    <table>
        <tr>
            <td width="120">
                <img src="foto/kemenag.png" alt="logo1" width="100" style="padding-left: 10px;">
            </td>
            <td>
                <p class="kop" style="margin-top: 10px;"><?php echo $md->kop_1; ?></p>
                <p class="kop"><?php echo $md->kop_2; ?></p>
                <p class="kop"><?php echo $md->madrasah; ?></p>
                <p class="alamat_1"><?php echo $md->alamat; ?></p><br>
                <p class="alamat_1"><?php echo $md->telp; ?></p><br><br>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h3 class="text-bold text-center">LEMBAR DISPOSISI</h3>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td colspan="4" class="text-center" style="padding:10px">PERHATIAN : Dilarang memisahkan sehelai surat pun yang digabung dalam berkas ini</td>
        </tr>
        <tr>
            <td class="isi" width="25%">Nomor Surat</td>
            <td class="isi" width="40%">: <?php echo $sql->no_asal; ?></td>
            <td class="isi" width="12%" style="border-left: 1px black solid;">Status</td>
            <td class="isi" width="23%">: <?php echo $sql->status; ?></td>
        </tr>
        <tr>
            <td class="isi">Tanggal Surat</td>
            <td class="isi">: <?php echo format_indo($sql->tgl_no_asal) ?></td>
            <td class="isi" style="border-left: 1px black solid;">Sifat</td>
            <td class="isi">: <?php echo $sql->sifat; ?></td>
        </tr>
        <tr>
            <td class="isi">Lampiran</td>
            <td class="isi" colspan="3">: <?php echo $sql->lampiran; ?></td>
        </tr>
        <tr>
            <td class="isi">Diterima tanggal</td>
            <td class="isi" colspan="3">: <?php echo format_indo($sql->tgl_sm) ?></td>
        </tr>
        <tr>
            <td class="isi">No. Agenda</td>
            <td class="isi">: <?php echo $sql->no_surat; ?></td>
            <td class="isi" style="border-left: 1px black solid;">Klasifikasi</td>
            <td class="isi">: <?php echo $sql->penerima; ?> </td>
        </tr>
        <tr>
            <td class="isi">Dari</td>
            <td class="isi" colspan="3">: <?php echo $sql->pengirim; ?></td>
        </tr>
        <tr>
            <td class="isi">Perihal</td>
            <td class="isi" colspan="3">: <?php echo $sql->perihal; ?></td>
        </tr>
        <tr>
            <td class="isi">Diteruskan kepada</td>
            <td class="isi" colspan="3">: <?php echo $md->jabatan; ?></td>
        </tr>
        <tr>
            <td class="isi">Pada tanggal</td>
            <td class="isi" colspan="3">: <?php echo format_indo($sql->tgl_sm) ?></td>
        </tr>
    </table>
    <table border="1">
        <tr>
            <td width="50%" class="text-center">
                <h5>Disposisi kepala kepada</h5>
            </td>
            <td width="50%" class="text-center">
                <h5>Petunjuk</h5>
            </td>
        </tr>
        <tr>
            <td class="isi"><?php echo $sql->bagian; ?></td>
            <td class="isi"><?php echo $sql->segera; ?><br><?php echo $sql->biasa; ?></td>
        </tr>
        <tr>
            <td colspan="2" class="isi">
                Catatan:<br>
                <?php echo $sql->catatan; ?>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="isi" width="30%">Tanggal penyelesaian</td>
            <td class="isi">:</td>
            <td class="isi" width="70%"><?php echo format_indo($sql->tgl_sm) ?></td>
        </tr>
        <tr>
            <td class="isi" width="30%">Penerima</td>
            <td class="isi">:</td>
            <td class="isi"><?php echo $sql->disposisi; ?></td>
        </tr>
    </table>

</body>

</html>