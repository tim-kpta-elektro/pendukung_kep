<!DOCTYPE html>
<html>
<head>
    <title>Form Konsultasi KP</title>
    <link rel="stylesheet" id="css-main" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <style type="text/css">
        
        table.table1 * {
          border: none;
          line-height: 1.1;
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

        .table2 table.table2, th, td {
          border: 1px solid black;
        }

        .table2 th, td {
          text-align: center;
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

        .page-break {
            page-break-after: always;
        }

        footer {
          position: fixed; 
          bottom: 0cm; 
          left: 2.5cm; 
          right: 0cm;
          height: 2cm;

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
    <footer>
     <p><strong>Catatan :</strong><br>
        1. Lembar pantauan ditandatangani dosen pembimbing selama penyusunan proposal & laporan akhir.<br>
        2. Lembar konsultasi ditanda tangani pembimbing lapangan dan distempel selama kegiatan di lapangan.</p>
        <span style="background-color: #000000; color: white;">
            TE-KP-002
        </span>
    </footer>

    <div class="container">
        <div class="row">
           <div class="col">
            <p style="text-align: center; font-size: 18px;"><strong>LEMBAR KONSULTASI KERJA PRAKTEK</strong></p>
               <table class="table1" style="width: 100%">    
                    <tr>
                        <td style="width: 35%;">Nama Mahasiswa</td>
                        <td style="width: 3%;">:</td>
                        <td style="width: 62%;"><strong><?php echo $data->nama_mhs?></strong></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><strong><?php echo $data->nim?></strong></td>
                    </tr>
                    <tr>
                        <td>Dosen Pembimbing</td>
                        <td>:</td>
                        <td><strong><?php echo $data->nama_dosen?> / <?php echo $data->nip?></strong></td>
                    </tr>
                    <tr>
                        <td>Pembimbing Lapangan</td>
                        <td>:</td>
                        <td style="vertical-align: text-center;">______________________</td>
                    </tr>
                    <tr>
                        <td>Tempat Kerja Praktek (KP)</td>
                        <td>:</td>
                        <td><strong><?php echo $data->perusahaan_nama?></strong></td>
                    </tr>
                    <tr>
                        <td>Alamat Tempat KP</td>
                        <td>:</td>
                        <td><strong><?php echo $data->perusahaan_almt?></strong></td>
                    </tr>
                    <tr>
                        <td>Tanggal Kerja Praktek (KP)</td>
                        <td>:</td>
                        <td><strong><?php echo $data->tgl_mulai_kp?> sd. <?php echo $data->tgl_selesai_kp?> </strong></td>
                    </tr>
                </table>
                <br>
                <table class="table2">
                  <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 20%;" >Tanggal</th>
                    <th style="width: 65%;" >Uraian Kegiatan</th>
                    <th style="width: 10%;">Paraf Pembb.</th>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                </table>      
           </div>     
        </div>
    </div>
    <div class="page-break"></div>
    <div class="container">
        <div class="row">
           <div class="col">
               <table class="table2">
                  <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 20%;" >Tanggal</th>
                    <th style="width: 65%;" >Uraian Kegiatan</th>
                    <th style="width: 10%;">Paraf Pembb.</th>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                </table>      
           </div>     
        </div>
    </div>
</body>
</html>