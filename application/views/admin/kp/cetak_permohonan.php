<!DOCTYPE html>
<html>
<head>
	<title>Surat Permohonan KP</title>
	<link rel="stylesheet" id="css-main" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	<style type="text/css">
		table * {
            border: none;
        }
        body{
            font-size: 14px;
        	line-height: 1.2;
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
            <footer>
                <span style="background-color: #000000; color: white;">
                    TE-KP-004
                </span>
            </footer>
            <table width="100%">
                <tr>
                    <td style="width: 20%; text-align: center;">
                        <img src="<?php echo base_url('assets/media/logo-uns.png')?>" style="height: 130px;"/>
                    </td>
                    <td style="width: 80%;" align="center">
                        KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN<br />
                        UNIVERSITAS SEBELAS MARET<br />
                        FAKULTAS TEKNIK<br />
                        <h5><strong>PROGRAM STUDI TEKNIK ELEKTRO<strong></h5>
                        Jl. Ir. Sutami 36 A Kentingan Surakarta
                        <br /> tlp. 0271 647069 web: http://elektro.ft.uns.ac.id
                    </td>
                </tr>               
            </table>
            <hr style="border: 1px solid black;">
            <table style="width: 100%;">
                <tr>
                    <th style="width: 10%;">Nomor</th>
                    <td style="width: 3%;">:</td>
                    <td style="width: 67%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/UN27.08.06.7/PP/<?php date_default_timezone_set('Asia/Jakarta');echo date("Y"); ?></td>
                    <td style="width: 20%;"><?php date_default_timezone_set('Asia/Jakarta');echo date("d M Y"); ?></td>
                </tr>
                <tr>
                    <th>Lampiran</th>
                    <td>:</td>
                    <td>Proposal KP</td>
                    <td></td>
                </tr>
                <tr>
                    <th>Hal</th>
                    <td>:</td>
                    <td>Permohonan Kerja Praktek</td>
                    <td></td>
                </tr>
            </table>
             <br>
            <p style="max-width: 50%">Yth. <strong><?php echo $data->pic?> <br>
             <?php echo $data->perusahaan_nama?> <br>
             <?php echo $data->perusahaan_almt?></strong></p>
            <p style="text-align: justify;" >Dengan hormat,<br>
              Dengan surat ini kami bermaksud mengajukan permohonan kepada Bapak/Ibu untuk menerima mahasiswa kami kerja praktek / magang padaperusahaan yang Bapak/Ibu pimpin. Adapun nama mahasiswa tersebut adalah sebagai berikut:
            </p>
            <table style="width: 100%;">
                <tr>
                    <td style="width: 5%;"></td>
                    <td style="width: 10%;">NAMA</td>
                    <td style="width: 3%;">:</td>
                    <td style="width: 82%;"><strong><?php echo $data->nama_mhs?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>NIM</td>
                    <td>:</td>
                    <td><strong><?php echo $data->nim?></strong></td>
                </tr>
            </table>
            <br>
            <p style="text-align: justify;">Untuk pelaksanaan kerja praktek tersebut di atas dimohonkan  mulai tanggal <b><?php echo date("d-m-Y", strtotime($data->rencana_mulai_kp))?></b> sampai <b><?php echo date("d-m-Y", strtotime($data->rencana_selesai_kp))?></b> atau dalam waktu yang lain sesuai dengan kebijakan perusahaan Bapak/Ibu.</p>
            <p>Untuk surat balasan mohon dialamatkan kepada: </p>
            <p style="text-align: center;"><b> Kepala Program Studi Teknik Elektro<br>Fakultas Teknik Universitas Sebelas Maret<br>Jl. Ir. Sutami 36A Surakarta 57126 Telp. 0271-647069</b></p>
            <p>Atas perhatian dan kerjasamanya kami ucapkan terima kasih.</p>
            <table style="width: 100%">
                <tr>
                    <td style="width: 60%;">Mengetahui, <br> Kepala Program Studi <br><br><br><br><br> 
                        <b>Feri Adriyanto, S.Si., M.Si., Ph.D.</b><br><b>NIP. 196801161999031001</b></td>
                    <td style="width: 40%;"><br>Koordinator Kerja Praktek<br><br><br><br><br>
                    <b>Jaka Sulistya Budi</b><br><b>NIP. 196710191999031001</b></td>
                </tr>
            </table>
            </div>
        </div>
    </div>
</body>
</html>