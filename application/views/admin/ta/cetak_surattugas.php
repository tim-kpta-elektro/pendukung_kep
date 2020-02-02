<!DOCTYPE html>
<html>
<head>
  <title>Surat Tugas Akhir</title>
  <link rel="stylesheet" id="css-main" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <style type="text/css">
      table.table * {
          border: none;
          line-height: 1.2;
      }

      .table td {
          height: 25px;
          text-align: center;
      }

      table.table1 * {
          border: none;
      }

      .table1 td {
          font-size: 14px;
          vertical-align: text-top;
          text-align: left;
          padding: 2px;
      }

      body{
        font-size: 15px;
        line-height: 1.2;
        font-family: "Times New Roman", Times, serif;
      }

  </style>
</head>
<body>
<div class="container">
    <div class="row">
       <div class="col">
        <table style="width: 100% margin:0; padding:0;" class="table">
            <tr>
                <td style="width: 10%; text-align: left;">
                    <img src="<?php echo base_url('assets/media/logo-uns-biru.png');?>" style="height: 100px;"/>
                </td>
                <td style="width: 90%; color: #4FA9BA;" align="center">
                   <p style="font-size: 16px; margin:0; padding:0;"> KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN<br />
                    UNIVERSITAS SEBELAS MARET<br />
                    FAKULTAS TEKNIK<br />
                    <strong>PROGRAM STUDI TEKNIK ELEKTRO</strong></p>
                    <p style="font-style: italic; margin:0; padding:0;">Jalan. Ir. Sutami nomor 36 A Kentingan Surakarta 57126
                    <br /> Telepon. 0271 647069 psw 438, faksimili: 0271 662118</p>
                </td>
            </tr>               
        </table>
        <hr style="border: 1px solid; color: #4FA9BA; ">
            <p style="text-align: center; font-size: 18px; margin:2px; padding-bottom:2px;"><strong>SURAT TUGAS</strong></p>
            <p style="text-align: center; font-size: 15px;"><strong>Nomor : <?php echo sprintf("%03d", $data->id_ta)?>/TA/TE/2019</strong></p><br>
            <p>Kepala Program Studi Teknik Elektro Fakultas Teknik Universitas Sebelas Maret memberikan tugas kepada:</p>
            <table class="table1" style="width: 100%">    
                <tr>
                    <td style="width: 5%;"></td>
                    <td style="width: 40%;">Nama Mahasiswa</td>
                    <td style="width: 3%;">:</td>
                    <td style="width: 52%;"><strong><?php echo $data->nama_mhs?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>NIM</td>
                    <td>:</td>
                    <td><strong><?php echo $data->nim?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Bidang peminatan</td>
                    <td>:</td>
                    <td><strong><?php echo $data->nama_peminatan?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pembimbing Utama</td>
                    <td>:</td>
                    <td><strong><?php echo $pembimbing1->nama_dosen?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><strong>NIP. <?php echo $pembimbing1->nip?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Pembimbing Utama</td>
                    <td>:</td>
                    <td><strong><?php echo $pembimbing2->nama_dosen?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><strong>NIP. <?php echo $pembimbing2->nip?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Mata kuliah pendukung</td>
                    <td>:</td>
                    <td><strong>
                    <?php $no=1; ?>
                    <?php foreach ($matkul as $row): ?>
                        <?php echo $no++ ?>. <?php echo $row->nama_matkul ?><br>
                    <?php endforeach; ?>
                    </strong></td>
                </tr>
            </table>
            <br>
            <p style="text-align: justify;">untuk mengerjakan dan menyelesaikan Tugas Akhir dengan judul : </p>
            <p style="text-align: center;"><b><?php echo $data->judul?></b></p>
            <p style="text-align: justify;">Surat tugas ini dibuat untuk dilaksankan dengan sebaik-baiknya.</p>
            <br>
            <table style="width: 100%; padding-left:20px;">
                <tr>
                    <td style="width: 55%;"></td>
                    <td style="width: 45%;">Surakarta, <?php echo date("d F Y", strtotime($data->tgl_setuju))?><br>Kepala Program Studi<br><br><br><br><br><br>Feri Adriyanto, S.Si., M.Si., Ph.D. <br>NIP. 196801161999031001</td>
                </tr>
            </table>
            <br>
            <br>
            <br>
            <p style="margin:0; padding:0;">Tembusan:</p>
            <p>
              <ol type="1">
                <li>Mahasiswa ybs.</li>
                <li>Dosen Pembimbing TA</li>
                <li>Koordinator TA</li>
                <li>Arsip</li>
              </ol>
            </p>
         </div>     
      </div>
  </div>
</body>
</html>