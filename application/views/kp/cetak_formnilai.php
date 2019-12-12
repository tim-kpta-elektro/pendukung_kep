<!DOCTYPE html>
<html>
<head>
  <title>Form Nilai KP</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style type="text/css">
      table.table * {
          border: none;
      }

      .table td {
          height: 25px;
          text-align: center;
      }

      table.table1 * {
          border: none;
      }

      .table1 td {
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
        text-align: left;
        /*padding: 8px;*/
      }
      .table2 td {
          height: 25px;
      }

      .table2 th {
        background-color: #f2f2f2;
        color: black;
      }

      table.table3 * {
        border: none;
      }

      .table3 td {
          text-align: left;
      }

      .page-break {
          page-break-after: always;
      }

      body{
        font-size: 14px;
        line-height: 1.2;
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
        <table width="100%" class="table">
            <tr>
                <td style="width: 20%; text-align: center;">
                    <img src="<?php echo base_url('assets/media/logo-uns.png')?>" style="height: 130px;"/>
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
                TE-KP-006
            </span>
        </footer>
            <p style="text-align: center; font-size: 18px;"><strong>LEMBAR PENILAIAN KERJA PRAKTEK</strong></p>
            <table class="table1" style="width: 100%">    
                <tr>
                    <td style="width: 10%;">Nama</td>
                    <td style="width: 3%;">:</td>
                    <td style="width: 87%;"><strong><?php echo $data->nama_mhs?></strong></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><strong><?php echo $data->nim?></strong></td>
                </tr>
            </table>
            <br>
            <p><strong>A. Nilai Perusahaan (bobot 60%)</strong></p>
            <table class="table2">
              <tr>
                <th style="width: 5%; text-align: center;">No</th>
                <th style="width: 75%; text-align: center;">Kriteria</th>
                <th style="width: 10%; text-align: center;">Nilai Angka</th>
                <th style="width: 10%; text-align: center;">Nilai Huruf</th>
              </tr>
              <tr>
                <td colspan="4" style="text-align: center;"><strong>Sikap Kerja :</strong></td>
              </tr>
              <tr>
                <td style="width: 5%;">1.</td>
                <td style="width: 75%;">Kerajinan dan Kedisiplinan</td>
                <td style="width: 10%;"> </td>
                <td style="width: 10%;"> </td>
              </tr>
              <tr>
                <td style="width: 5%;">2.</td>
                <td style="width: 75%;">Kerjasama</td>
                <td style="width: 10%;"> </td>
                <td style="width: 10%;"> </td>
              </tr>
              <tr>
                <td style="width: 5%;">3.</td>
                <td style="width: 75%;">Inisiatif</td>
                <td style="width: 10%;"> </td>
                <td style="width: 10%;"> </td>
              </tr>
              <tr>
                <td colspan="4" style="text-align: center;"><strong>Hasil Kerja :</strong></td>
              </tr>
              <tr>
                <td style="width: 5%;">4.</td>
                <td style="width: 75%;">Keterampilan</td>
                <td style="width: 10%;"> </td>
                <td style="width: 10%;"> </td>
              </tr>
              <tr>
                <td style="width: 5%;">5.</td>
                <td style="width: 75%;">Kerapian</td>
                <td style="width: 10%;"> </td>
                <td style="width: 10%;"> </td>
              </tr>
              <tr>
                <td style="width: 5%;"> </td>
                <td style="width: 75%;">Nilai Rata-rata</td>
                <td style="width: 10%;"> </td>
                <td style="width: 10%;"> </td>
              </tr>
            </table>
            <br>
            <p><strong>B. Nilai Seminar KP/Dosen (bobot 40%)</strong></p>
            <table class="table2">
              <tr>
                <td style="width: 5%;">1.</td>
                <td style="width: 75%;">Tata tulis, Penyampaian Makalah, Penguasaan Materi, Kemampuan Menjawab Pertanyaan</td>
                <td style="width: 10%;"> </td>
                <td style="width: 10%;"> </td>
              </tr>
            </table>
            <br>
            <table style="width: 100%" class="table3">
              <tr>
                <td colspan="2">Nilai Akhir</td>
                <td style="width: 10%;">______</td>
                <td style="width: 10%;">______</td>
              </tr>
            </table>
            <table style="width: 100%; font-size: 14px;" class="table3">
              <tr>
                <td colspan="8">Catatan:</td>
              </tr>
              <tr>
                <td style="width: 5%;">a.</td>
                <td style="width: 15%;">85 s/d 100</td>
                <td style="width: 2%;">:</td>
                <td style="width: 28%;">A</td>
                <td style="width: 5%;">d.</td>
                <td style="width: 15%;">70 s/d 74</td>
                <td style="width: 2%;">:</td>
                <td style="width: 28%;">B</td>
              </tr>
              <tr>
                <td style="width: 5%;">b.</td>
                <td style="width: 15%;">80 s/d 84</td>
                <td style="width: 2%;">:</td>
                <td style="width: 28%;">A-</td>
                <td style="width: 5%;">e.</td>
                <td style="width: 15%;">65 s/d 69</td>
                <td style="width: 2%;">:</td>
                <td style="width: 28%;">C+</td>
              </tr>
              <tr>
                <td style="width: 5%;">c.</td>
                <td style="width: 15%;">75 s/d 79</td>
                <td style="width: 2%;">:</td>
                <td style="width: 28%;">B+</td>
                <td style="width: 5%;">d.</td>
                <td style="width: 15%;">60 s/d 64</td>
                <td style="width: 2%;">:</td>
                <td style="width: 28%;">C</td>
              </tr>
            </table>
            <br>
            <table style="width: 100%" class="table3">
              <tr>
                  <td style="width: 50%; font-size: 14px;">Dosen Pembimbing KP<br><br><br><br><br><b><?php echo $data->nama_dosen?></b><br>NIP. <b><?php echo $data->nip?></b></td>
                  <td style="width: 50%; font-size: 14px;">Pembimbing Lapangan<br><br><br><br><br><br>____________________________</td>
              </tr>
            </table>      
         </div>     
      </div>
  </div>
</body>
</html>