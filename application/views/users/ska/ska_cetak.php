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
    <title><?php echo date('d_m_Y'); ?>_<?php echo $sql->nm_siswa; ?></title>
    <base href="<?php echo base_url(); ?>" />
</head>
<style type="text/css">
    @page {
        margin-top: 1cm;
        margin-left: 1.5cm;
        margin-right: 1.5cm;
        margin-bottom: 0.1cm;
    }

    .nmr_srt {
        font-family: 'James Fajardo';
        font-weight: normal;
        font-size: 30px;
        vertical-align: middle;
        padding: 0 2px;
    }

    .name-school1 {
        font-size: 14pt;
        font-weight: bold;
        text-transform: uppercase;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        margin-bottom: -7px;
    }

    .name-school {
        font-size: 12pt;
        font-weight: bold;
        text-transform: uppercase;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        margin-bottom: -5px;
    }

    .alamat {
        font-size: 12pt;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        margin-top: -15px;
    }

    .alamat_1 {
        font-size: 11pt;
        margin-bottom: -28px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
    }

    .alamat2 {
        font-size: 9pt;
    }

    .isi {
        font-size: 13pt;
        margin-top: 10px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: left;
        padding-left: 50px;
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

    td {
        text-align: left;
    }

    .hr_satu {
        border-width: 4px;
        color: black;
        margin-top: 0px;
    }

    .hr_dua {
        border-width: 1px;
        color: black;
        margin-top: -15px;
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
    <table>
        <tr>
            <td width="120">
                <img src="foto/logo1.png" alt="logo1" width="100">
            </td>
            <td align="left">
                <p class="name-school1"><?php echo $md->kop_1; ?></p>
                <p class="name-school"><?php echo $md->kop_2; ?></p>
                <p class="name-school"><?php echo $md->madrasah; ?></p>
                <p class="alamat_1"><?php echo $md->alamat; ?></p><br>
                <p class="alamat_1"><?php echo $md->telp; ?></p><br><br>
            </td>
        </tr>
    </table>
    <hr class="hr_satu">
    <hr class="hr_dua">
    <table>
        <tr>
            <h4 align="center" style="margin-bottom: -10px;"><b>SURAT KETERANGAN</b></h4>
            <p align="center">
                <span class="alamat">NOMOR : B-</span>
                <span class="nmr_srt"><?php echo $sql->nomor_ska ?></span>
                <span class="alamat">/<?php echo $sql->no_ska ?></span>
            </p>
        </tr>
    </table>
    <br>
    <br>
    <table border="0">
        <tr>
            <td colspan="2" class="isi_paragraf">Yang bertanda tangan di bawah ini :</td>
        </tr>
        <tr>
            <td class="isi" width="35%">Nama</td>
            <td class="isi">: <?php echo $md->nm_kepala; ?></td>
        </tr>
        <tr>
            <td class="isi">NIP</td>
            <td class="isi">: <?php echo $md->nip; ?></td>
        </tr>
        <tr>
            <td class="isi">Jabatan</td>
            <td class="isi">: <?php echo $md->jabatan; ?></td>
        </tr>
        <tr>
            <td class="isi">Sekolah</td>
            <td class="isi">: <?php echo $md->madrasah; ?></td>
        </tr>
        <tr>
            <td class="isi">NPSN / NSM</td>
            <td class="isi">: <?php echo $md->npsn; ?> / <?php echo $md->nsm; ?></td>
        </tr>
        <tr>
            <td class="isi">Alamat</td>
            <td class="isi">: <?php echo $md->alamat; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" class="isi_paragraf">Menerangkan dengan sebenar-benarnya bahwa :</td>
        </tr>
        <tr>
            <td class="isi">Nama</td>
            <td class="isi">: <?php echo $sql->nm_siswa; ?></td>
        </tr>
        <tr>
            <td class="isi">Tempat Tanggal Lahir</td>
            <td class="isi">: <?php echo $sql->ttl; ?></td>
        </tr>
        <tr>
            <td class="isi">NIM / NISN</td>
            <td class="isi">: <?php echo $sql->nim ?> / <?php echo $sql->nisn ?></td>
        </tr>
        <tr>
            <td class="isi">Kelas</td>
            <td class="isi">: <?php echo $sql->kelas ?> <?php echo $sql->jurusan ?></td>
        </tr>
        <tr>
            <td class="isi">Nama Orang Tua</td>
            <td class="isi">: <?php echo $sql->nm_ort; ?> </td>
        </tr>
        <tr>
            <td class="isi">Alamat</td>
            <td class="isi">: <?php echo $sql->alamat; ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" class="isi_paragraf">
                Yang bersangkutan benar-benar Peserta Didik <?php echo $md->madrasah; ?> Tahun Pelajaran <?php echo $md->tapel; ?>.
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" class="isi_paragraf">Demikian surat keterangan ini untuk dipergunakan  <?php if ($sql->jenis_ska <> '1') {
                    echo "$sql->keterangan"; } else echo "sebagaimana mestinya."?></td>
        </tr>
    </table>
    <br>
    <br>

    <?php if ($sql->ttd == '1') { ?>
        <table>
            <tr>
                <td width="50%">
                    <p class="ttd-kiri">&nbsp;</p>
                </td>
                <td width="50%">
                    <p class="ttd-kanan"><?php echo $sql->tgl_ska; ?></p>
                    <p class="ttd-kanan" style="margin-top: -15px;"><?php echo $md->jabatan; ?></p>
                    <br><br><br><br>
                    <p class="ttd-kanan"><?php echo $md->nm_kepala; ?></p>
                    <p class="ttd-kanan"><?php echo "NIP.".$md->nip; ?></p>
                </td>
            </tr>
        </table>
    <?php } elseif ($sql->ttd == '2') { ?>
        <table>
            <tr>
                <td width="50%">
                    <p class="ttd-kiri">&nbsp;</p>
                </td>
                <td width="50%">
                    <p class="ttd-kanan"><?php echo $sql->tgl_ska; ?></p>
                    <p class="ttd-kanan" style="margin-top: -15px;">Kepala Madrasah</p>
                    <br>
                    <p class="ttd-kanan">^</p>
                    <br>
                    <p class="ttd-kanan"><?php echo $md->nm_kepala; ?></p>
                    <p class="ttd-kanan"><?php echo "NIP.".$md->nip; ?></p>
                </td>
            </tr>
        </table>
    <?php  } elseif ($sql->ttd == '3') { ?>
        <table>
            <tr>
                <td width="50%">
                    <p class="ttd-kiri">&nbsp;</p>
                </td>
                <td width="50%">
                    <p class="ttd-kanan"><?php echo $sql->tgl_ska; ?></p>
                    <p class="ttd-kanan" style="margin-top: -15px;">Kepala Madrasah</p>
                    <p style="margin: -40px 0 -30px 0;"><img src="foto/kepala.png" alt="logo1" width="250"></p>
                    <p class="ttd-kanan"><?php echo $md->nm_kepala; ?></p>
                    <p class="ttd-kanan"><?php echo "NIP.".$md->nip; ?></p>
                </td>
            </tr>
        </table>
    <?php } ?>
</body>

</html>