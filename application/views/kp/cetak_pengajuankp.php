<!DOCTYPE html>
<html>
<head>
  <title>Pengajuan Seminar KP</title>
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
          height: 25px;
      }

      .table2 tr:nth-child(even){background-color: #f2f2f2}

      .table2 th {
        background-color: #3c73a3;
        color: white;
      }

      body{
        font-size: 14px;
        line-height: 1.5;
      }

      footer {
        position: fixed; 
        bottom: 0cm; 
        left: 2.5cm; 
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
        <table style="width: 100%" class="table">
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
                TE-KP-008
            </span>
        </footer>
            <p style="text-align: center; font-size: 18px;"><strong>Formulir Pendaftaran Kerja Praktek</strong></p>
            <table class="table2" style="width: 100%">
              <tr>
                <th>1. Data Mahasiswa</th>
              </tr>
            </table>
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
                    <td>IPK (Indeks Prestasi Komulatif)</td>
                    <td>:</td>
                    <td><strong><?php echo $data->ipk?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Capaian SKS</td>
                    <td>:</td>
                    <td><strong><?php echo $data->sks?></strong></td>
                </tr>
            </table>
            <br>
            <table class="table2" style="width: 100%">
              <tr>
                <th>2. Data Perusahaan</th>
              </tr>
            </table>
            <table class="table1" style="width: 100%">    
                <tr>
                    <td style="width: 5%;"></td>
                    <td style="width: 40%;">Nama Perusahaan/Institusi</td>
                    <td style="width: 3%;">:</td>
                    <td style="width: 52%;"><strong><?php echo $data->perusahaan_nama?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Alamat Perusahaan/Institusi</td>
                    <td>:</td>
                    <td><strong><?php echo $data->perusahaan_almt?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jenis Usaha Perusahaan/Institusi</td>
                    <td>:</td>
                    <td><strong><?php echo $data->perusahaan_jenis?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>PIC</td>
                    <td>:</td>
                    <td><strong><?php echo $data->pic?></strong></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Waktu KP</td>
                    <td>:</td>
                    <td><strong><?php echo $data->tgl_mulai_kp?> s/d <?php echo $data->tgl_selesai_kp?></strong></td>
                </tr>
            </table>
            <br>
            <table class="table2" style="width: 100%">
              <tr>
                <th>3. Persyaratan yang harus dilampirkan</th>
              </tr>
            </table>
            <p>
              <ol type="1">
                <li>Fotocopy KRS terakhir</li>
                <li>Fotocopy KHS Kumulatif</li>
              </ol>
            </p>
            <br>
            <table style="width: 100%">
                <tr>
                    <td style="width: 60%;"><br>Menyetujui<br>Koordinator Kerja Praktek,<br><br><br><b>Jaka Sulistya Budi</b><br><b>NIP. 196710191999031001</b></td>
                    <td style="width: 40%;">Surakarta, <?php echo $data->tgl_ajuan?><br>Yang mengajukan<br><br><br><br><b>Yudhi Prabowo Kusuma</b><br><b>NIM. I0716034</b></td>
                </tr>
            </table> 
         </div>     
      </div>
  </div>
</body>
</html>