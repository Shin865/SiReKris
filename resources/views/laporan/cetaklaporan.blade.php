<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cetak Laporan</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>
  @page 
  {
    size: A4 
    }

    #title{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 18px;
        font-weight: bold;
    }
    .foto{
        width: 40px;
        height: 30px;
    }
</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4">
    <div>
        <header>
          <div class="row">
            <div id="img" class="col-md-3">
              <img id="logo" src="https://getasanbersinar.files.wordpress.com/2016/02/logo-kabupaten-semarang-jawa-tengah.png" width="140" height="160" />
            </div>
            <div id="text-header" class="col-md-9">
              <h3 class="kablogo">PEMERINTAH KABUPATEN SEMARANG</h3>
              <h1 class="keclogo"><strong>KECAMATAN BERGAS</strong></h1>
              <h6 class="alamatlogo">Jl. Soekarno-Hatta, No. 68, Telepon/Faximile (0298) 523024</h6>
              <h5 class="kodeposlogo"><strong>BERGAS 50552</strong></h5>
            </div>
          </div>
        </header>
      
        <div class="container">
          <hr class="garis1"/>
          <div id="alamat" class="row">
            <div id="lampiran" class="col-md-6">
              Nomor	: 005 / <br />
              Lampiran	: - <br />
              Perihal	: Undangan
            </div>
            <div id="tgl-srt" class="col-md-6">
              <p id="tls">Bergas, 30 April 2018</p>
              
              <p class="alamat-tujuan">Kepada Yth. :<br />
              Kepala Desa</p>
                
                <p class="alamat-tujuan">se - Kecamatan Bergas
              </p>
            </div>
          </div>
          <div id="pembuka" class="row">&emsp; Dengan ini bahwa saya :</div>
          <div id="tempat-tgl">
            <table>
              <tr>
                <td>Penanggung Jawab</td>
                <td>:</td>
                <td>{{ $laporan->penanggung }}</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $laporan->alamat }}</td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{ $laporan->tanggal }}</td>
              </tr>
            </table>
          </div>
          <div id="penutup">Izin menyampaikan laporan kerusakan yang diakibatkan oleh {{ $laporan->bencana }} dengan deskripsi sebagai berikut :
            <br>
            {{ $laporan->deskripsi }}
          </div>
          <div id="ttd" class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <p id="camat"><strong>PENANGGUNG JAWAB</strong></p>
              <div id="nama-camat"><strong><u>{{ $laporan->penanggung }}</u></strong><br />
            Pembina Tk. I<br />
            NIP. 196703221995031001</div>
          </div>
            </div>
      </div>
      </div>

</body>

</html>