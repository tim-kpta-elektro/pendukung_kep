<!DOCTYPE html>
<html>
<head>
  <title>Pendaftaran Tugas Akhir</title>
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

      table.table2 {
        border-collapse: collapse;
        width: 100%;
      }

      /*.table2 table.table2, th, td {
        border: 1px solid black;
      }*/

      .table2 th, td {
        text-align: left;
        padding: 8px;
      }
      .table2 td {
          height: 15px;
          background-color: #bfbfbf;
          color: black;
      }

      /* .table2 tr:nth-child(even){background-color: #f2f2f2} */


      .matkul{
        padding-left: 30px; padding-right: 10px; height: 20px; width:100%;
      }

      .matkul tr td{
        border:0.5px solid grey;
      }

      body{
        font-size: 14px;
        line-height: 1;
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
            <p style="text-align: center; font-size: 18px;"><strong>FORMULIR PENDAFTARAN TUGAS AKHIR</strong></p>
            <table class="table2" style="width: 100%">
              <tr>
                <td>I. Data Mahasiswa</td>
              </tr>
            </table>
            <table class="table1" style="width: 100%">    
                <tr>
                    <td style="width: 5%;"></td>
                    <td style="width: 40%;">Nama Mahasiswa</td>
                    <td style="width: 3%;">:</td>
                    <td style="width: 52%;"><?php echo $data->nama_mhs?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?php echo $data->nim?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Capaian SKS</td>
                    <td>:</td>
                    <td><?php echo $data->sks?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>IPK (Indeks Prestasi Komulatif)</td>
                    <td>:</td>
                    <td><?php echo $data->ipk?></td>
                </tr>
            </table>
            <br>
            <table class="table2" style="width: 100%">
              <tr>
                <td>II. Data Tugas Akhir</td>
              </tr>
            </table>
            <table class="table1" style="width: 100%">    
                <tr>
                    <td style="width: 5%;"></td>
                    <td style="width: 40%;">Bidang Peminatan</td>
                    <td style="width: 3%;">:</td>
                    <td style="width: 52%;"><?php echo $peminatan->nama_peminatan?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Judul Tugas Akhir</td>
                    <td>:</td>
                    <td><?php echo $ta->judul?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Mata Kuliah Pendukung</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </table>
            <table class="matkul" style="line-height:10px;">
            <?php $no="a"; ?>
            <?php foreach ($matkul as $row): ?>
            <tr>
                    <td style="width:5%;"><?php echo $no++ ?>)</td>
                    <td style="width:20%;"><?php echo $row->kode_matkul?></td>
                    <td style="width:50%;"><?php echo $row->nama_matkul?></td>
                    <td style="width:25%;"><?php echo number_format("$row->ip",2); ?> / <?php echo $row->huruf?></td>
            </tr>
            <?php endforeach; ?>
            </table>
            <br>
            <table class="table2" style="width: 100%">
              <tr>
                <td>III. Data Mahasiswa</td>
              </tr>
            </table>
            <table class="matkul">
            <tr>
                    <td style="width:5%;">1.</td>
                    <td style="width:65%;">Pembimbing Utama:<br>
                    <?php echo $pembimbing1->nama_dosen?><br>
                    <?php echo $pembimbing1->nip?></td>
                    <td style="width:30%;"></td>
            </tr>
            <tr>
                    <td style="width:5%;">2.</td>
                    <td style="width:65%;">Pembimbing Pendamping:<br>
                    <?php echo $pembimbing2->nama_dosen?><br>
                    <?php echo $pembimbing2->nip?></td>
                    <td style="width:30%;"></td>
            </tr>
            </table>
            <br>
            <table style="width: 100%; padding-left:20px;">
                <tr>
                    <td style="width: 55%;">Mengetahui<br>Koordinator TA<br><br><br><br><br><br>Muhammad Hamka Ibrahim St., M.Eng.<br>NIP. 1988122920161001</td>
                    <td style="width: 45%;">Surakarta, <?php echo date("d F Y", strtotime($ta->tgl_pengajuan))?><br>Yang mengajukan<br><br><br><br><br><br><?php echo $data->nama_mhs?><br>NIM. <?php echo $data->nim?></td>
                </tr>
            </table>
            <table style="width: 100%; padding-left:20px;">
                <tr>
                    <td style="width: 25%;"></td>
                    <td style="width: 75%;">Menyetujui<br>KBK <?php echo $peminatan->nama_peminatan?><br><br><br><br><br><br>Jaka Sulistya Budi<br>NIP. 196710191999031001</td>
                </tr>
            </table>
         </div>     
      </div>
  </div>
</body>
</html>