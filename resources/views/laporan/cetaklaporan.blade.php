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
    .tabeldatakaryawan{
        margin-top: 10px;
    }
    .tabeldatakaryawan td{
        padding: 5px;
    }
    .tabelpresensi{
        width: 100%;
        margin-top: 10px;
        border-collapse: collapse
    }
    .tabelpresensi> tr, th{
        border: 2px solid black;
        padding: 5px;
        background-color: #c1c1c1;
    }
    .tabelpresensi td{
        border: 2px solid black;
        padding: 5px;
    }
    .foto{
        width: 200px;
        height: 200px;
    }
</style>
</head>

@php
  $path = Storage::url('uploads/laporan/'.$laporan->foto);
@endphp

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4">
  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-10mm">

   <table style="width: 100%">
    <tr>
        <td style="width: 10%">
            <img src="{{ asset('/tabler/static/cepogo.png')}}" alt="" width="80" height="80">
        </td>
        <td style="width: 75%; text-align: center">
            <p><strong>LAPORAN KERUSAKAN BENCANA</strong><br>
            <strong>KECAMATAN CEPOGO</strong><br>
            Tumang Krajan, RT.005/RW.014, Dusun III, Cepogo, Boyolali Regency, Central Java 57362</p>
        </td>
        <td style="width: 10%">
          <img src="{{ asset('/tabler/static/jateng.png')}}" alt="" width="80" height="80">
      </td>
    </tr>
   </table>
    <hr>
    <h4>Dengan adanya surat ini menyatakan  bahwa :</h4>
   <table class="tabeldatakaryawan">
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
        <td>No. HP</td>
        <td>:</td>
        <td>{{ $laporan->no_hp }}</td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td>{{ $laporan->tanggal}}</td>
    </tr>
  </table>
  <p>Izin menyampaikan laporan kerusakan yang diakibatkan oleh <b>{{ $laporan->bencana }}</b> dengan deskripsi sebagai berikut :</p>
    <table class="tabelpresensi">
          <tr>
                <td>{{ $laporan->deskripsi }}</td>
          </tr>
    </table>
    <p>Berikut foto/bukti terlampir : </p>
    <table style="width: 100%">
      <tr>
        <td style="text-align: center">
          @if ( empty($laporan->foto) )
        <img src="{{ asset('assets/img/nophoto.png') }}" class="foto" alt="">
        @else
        <img src="{{ url($path) }}" class="foto" alt="">
        @endif
        </td>
      </tr>
</table>
    <p>Demikian surat ini kami buat dengan sebenarnya, atas perhatian dan kerjasamanya kami ucapkan terima kasih.</p>
    <table width="100%" style="margin-top:100px">
        <tr>
            <td colspan="2" style="text-align: center">Cepogo, {{ date('d-m-Y',strtotime(date('Y-m-d'))) }}<br>
            <strong>{{ $laporan->penanggung }}</strong>
            <br><br><br><br><br>
            ............................................
            </td>
          <td colspan="2" style="text-align: center">Cepogo, {{ date('d-m-Y',strtotime(date('Y-m-d'))) }}<br>
          <strong>CAMAT CEPOGO</strong>
          <br><br><br><br><br>
          ............................................
          </td>
        </tr>
    </table>
  </section>

</body>

</html>