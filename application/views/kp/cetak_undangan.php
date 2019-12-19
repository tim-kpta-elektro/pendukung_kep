<!DOCTYPE html>
<html>
<head>
    <title>Surat Undangan Seminar KP</title>
    <link rel="stylesheet" id="css-main" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <style type="text/css">
        table * {
            border: none;
        }

        body{
            font-size: 14px;
            line-height: 1.3; 
        }

        footer {
          position: fixed; 
          bottom: 0cm; 
          left: 1cm; 
          right: 0cm;
          height: 1cm;

          /** Extra personal styles **/
          /*background-color: #03a9f4;*/
          text-align: justify;
          font-size: 9pt;
          line-height: 1;
          color: black;
          text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <table width="100%">
                    <tr>
                        <td style="width: 20%; text-align: center;">
                            <img src="<?php echo base_url('assets/media/logo-uns.png');?>" style="height: 130px;"/>
                        </td>
                        <td style="width: 80%;" align="center">
                            KEMENTRIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI<br />
                            UNIVERSITAS SEBELAS MARET<br />
                            FAKULTAS TEKNIK<br />
                            <h5><strong>PROGRAM STUDI TEKNIK ELEKTRO<strong></h5>
                            Jl. Ir. Sutami 36 A Kentingan Surakarta
                            <br /> tlp. 0271 647069 web: http://elektro.ft.uns.ac.id
                        </td>
                    </tr>               
                </table>
                <hr style="border: 1px solid black;">
                <footer>
                    <span style="background-color: #000000; color: white;">
                        TE-KP-009
                    </span>
                </footer>
                <table class="lamp" style="width: 100%;">
                    <tr>
                        <th style="width: 10%;">Nomor</th>
                        <td style="width: 3%;">:</td>
                        <td style="width: 67%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/UN27.08.06.7/PP/<?php date_default_timezone_set('Asia/Jakarta');echo date("Y"); ?></td>
                        <td style="width: 20%;"><?php date_default_timezone_set('Asia/Jakarta');echo date("d M Y"); ?></td>
                    </tr>
                    <tr>
                        <th>Lampiran</th>
                        <td>:</td>
                        <td>Laporan KP</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Hal</th>
                        <td>:</td>
                        <td>Seminar Kerja Praktek</td>
                        <td></td>
                    </tr>
                </table>
                 <br>
                <p style="max-width: 50%">Kepada Yth. <strong><br>
                    &nbsp; <?php echo $data->nama_dosen?>
                 </strong></p>
                <p style="text-align: justify;" >Dengan hormat,<br>
                  Kami mengharap kehadiran Bapak dalam Seminar Kerja Praktek atas nama mahasiswa,
                </p>
                <table style="width: 100%;">
                    <tr>
                        <td style="width: 5%;"></td>
                        <td style="width: 25%;">Nama</td>
                        <td style="width: 3%;">:</td>
                        <td style="width: 67%;"><strong><?php echo $data->nama_mhs?></strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NIM</td>
                        <td>:</td>
                        <td><strong><?php echo $data->nim?></strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Judul Laporan KP</td>
                        <td>:</td>
                        <td><strong><?php echo $data->judul_seminar?></strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pembimbing</td>
                        <td>:</td>
                        <td><strong><?php echo $data->nama_dosen?> / <?php echo $data->nip?></strong></td>
                    </tr>
                </table>
                <br>
                <p style="text-align: justify;">Seminar Kerja Praktek akan diselenggarakan pada :</p>
                <table style="width: 100%;">
                    <tr>
                        <td style="width: 5%;"></td>
                        <td style="width: 25%;">Hari, tanggal</td>
                        <td style="width: 3%;">:</td>
                        <td style="width: 67%;"><strong><?php echo $dayList[date("D", strtotime($data->tanggal_seminar))]?>, <?php echo date("d-m-Y", strtotime($data->tanggal_seminar))?></strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Tempat</td>
                        <td>:</td>
                        <td><strong><?php echo $data->nama_ruang?></strong></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Waktu</td>
                        <td>:</td>
                        <td><strong><?php echo $data->jam_mulai?> s/d <?php echo $data->jam_selesai?></strong></td>
                    </tr>
                </table>
                <br>
                <p style="text-align: justify;">Demikian undangan ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih.</p>
                <table style="width: 100%">
                    <tr>
                        <td style="width: 60%;"></td>
                        <td style="width: 40%;"><br>Koordinator Kerja Praktek<br><br><br><br>
                        <b>Jaka Sulistya Budi</b><br><b>NIP. 196710191999031001</b></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>