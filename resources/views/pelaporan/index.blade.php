@extends('layouts.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Pelaporan
          </div>
          <h2 class="page-title">
            Data Laporan
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                     @if(Session::get('success'))
                     <div class="alert alert-success">
                      {{ Session::get('success') }}
                    </div>
                    @endif
                    @if(Session::get('error'))
                      <div class="alert alert-danger">
                        {{ Session::get('error') }}
                      </div>
                    @endif
                  </div>
                </div>
                    <div class="row">
                      <div class="col-12">
                        <a href="#" class="btn btn-primary" id="btnTambahpelaporan">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 5l0 14"></path>
                            <path d="M5 12l14 0"></path>
                         </svg>
                          Tambah Pelaporan
                        </a>
                      </div>
                    </div>
                  <div class="row mt-2">
                    <div class="col-12">
                      <form action="/pelaporan" method="GET">
                        <div class="row">
                          <div class="col-6">
                            <div class="form-group">
                              <input type="text" name="bencana" id="bencana" class="form-control" placeholder="Cari Jenis Bencana" value="{{ Request('bencana') }}">
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                              <select name="status" id="status" class="form-select">
                                <option value="">Pilih Status</option>
                                <option value="0" {{ Request('status') == '0' ? 'selected' : "" }}>Pending</option>
                                <option value="1" {{ Request('status') == '1' ? 'selected' : "" }}>Disetujui</option>
                                <option value="2" {{ Request('status') == '2' ? 'selected' : "" }}>Ditolak</option>
                            </select>
                            </div>
                          </div>
                          <div class="col-2">
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                  <path d="M21 21l-6 -6"></path>
                               </svg>
                               Cari
                              </button>
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-12">
                      <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Laporan</th>
                                <th>Penanggung Jawab</th>
                                <th>Nama Pelapor</th>
                                <th>Alamat</th>
                                <th>Bencana</th>
                                <th>No.HP</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>   
                        </thead>
                        <tbody>
                            @foreach ($pelaporan as $item)
                            @php
                                $path = Storage::url('uploads/laporan/'.$item->foto);
                            @endphp
                            <tr>
                                <td>{{ $loop->iteration + $pelaporan->firstItem()-1 }}</td>
                                <td>{{ $item->kode_lapor }}</td>
                                <td>{{ $item->penanggung }}</td>
                                <td>{{ $item->nama_pela }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->bencana }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>
                                    @if ( empty($item->foto) )
                                        <img src="{{ asset('assets/img/nophoto.png') }}" class="avatar" alt="">
                                    @else
                                        <img src="{{ url($path) }}" class="avatar" alt="">
                                    @endif
                                </td>
                                <td>
                                    @if ($item->status == "0")
                                        <span class="badge bg-warning" style="color:white">Pending</span>
                                    @elseif($item->status == "1")
                                        <span class="badge bg-success" style="color:white">Disetujui</span>
                                    @else
                                        <span class="badge bg-danger" style="color:white">Ditolak</span>
                                    @endif
                                </td>
                                <td>
                                  <div class="d-flex">
                                    @if($item->status == "0" || $item->status == "2")
                                    <div>
                                  <a href="#" class="edit btn btn-info btn-sm mr-3" kode_lapor="{{ $item->kode_lapor }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                    <path d="M16 5l3 3"></path>
                                 </svg>
                                  </a>
                                    </div>
                                  <div>
                                  <form action="/pelaporan/{{ $item->kode_lapor }}/delete" method="POST" style="margin-left:5px">
                                  @csrf
                                  <a class="btn btn-danger btn-sm delete-confirm"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 7l16 0"></path>
                                    <path d="M10 11l0 6"></path>
                                    <path d="M14 11l0 6"></path>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                 </svg>
                                  </a>
                                  </form>
                                  </div>
                                  @else
                                  <form action="/laporan/cetaklaporan" id="formlaporan" target="_blank" method="POST">
                                    @csrf
                                    <input type="hidden" name="kode_lapor" value="{{ $item->kode_lapor }}">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M6 9h12v-4a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v4"></path>
                                        <path d="M6 9v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2v-10"></path>
                                        <path d="M12 15v3"></path>
                                        <path d="M9 12h6"></path>
                                      </svg>
                                    </button>
                                    </form>
                                    @endif
                                  </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $pelaporan->links('vendor.pagination.bootstrap-5') }}
                    </div>
                  </div>
                </div>
        </div>
    </div>
  </div>
  <div class="modal modal-blur fade" id="modal-inputpelaporan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Pelaporan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/pelaporan/store" method="POST" id="formPelaporan" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="input-icon mb-3">
                  <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                      <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg>
                  </span>
                  <input type="text" id="penanggung" value="" name="penanggung" class="form-control" placeholder="Penanggung Jawab">
                </div>
              </div>
            </div>
    <div class="row">
      <div class="col-12">
        <div class="input-icon mb-3">
          <span class="input-icon-addon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-accessible" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
              <path d="M10 16.5l2 -3l2 3m-2 -3v-2l3 -1m-6 0l3 1"></path>
              <circle cx="12" cy="7.5" r=".5" fill="currentColor"></circle>
           </svg>
          </span>
          <input type="text" id="alamat" value="" class="form-control" name="alamat" placeholder="Alamat">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="input-icon mb-3">
          <span class="input-icon-addon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-accessible" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
              <path d="M10 16.5l2 -3l2 3m-2 -3v-2l3 -1m-6 0l3 1"></path>
              <circle cx="12" cy="7.5" r=".5" fill="currentColor"></circle>
           </svg>
          </span>
          <input type="text" id="bencana" value="" class="form-control" name="bencana" placeholder="Bencana">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="input-icon mb-3">
          <span class="input-icon-addon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
              <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
              <path d="M9 12a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"></path>
           </svg>
          </span>
          <input type="text" id="no_hp" value="" class="form-control" name="no_hp" placeholder="No.HP">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <textarea id="deskripsi" value="" class="form-control" name="deskripsi" placeholder="Deskripsi Bencana"></textarea>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12">
        <input type="date" name="tanggal" class="form-control">
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-12">
        <input type="file" name="foto" class="form-control">
      </div>
    </div>
  <div class="row mt-2">
    <div class="col-12">
      <div class="form-group">
        <button class="btn btn-primary w-100">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M10 14l11 -11"></path>
            <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5"></path>
         </svg>
         Simpan
        </button>
      </div>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>

  <div class="modal modal-blur fade" id="modal-editpelaporan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Data Laporan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="loadeditform">
          
        </div>
      </div>
    </div>
  </div>
@endsection

@push('myscript')
<script>
  $(function(){
    $("#no_hp").mask("0000000000000");
    $("#btnTambahpelaporan").click(function(){
      $("#modal-inputpelaporan").modal("show");
    });

    $(".edit").click(function(){
      var kode_lapor = $(this).attr('kode_lapor');
      $.ajax({
        type: 'POST',
        url: '/pelaporan/edit',
        cache:false,
        data: {
          _token: '{{ csrf_token(); }}',
          kode_lapor: kode_lapor
        },
        success: function(respond){
          $("#loadeditform").html(respond);
        }
      });
      $("#modal-editpelaporan").modal("show");
    });

    $(".delete-confirm").click(function(e){
      var form = $(this).closest("form");
      e.preventDefault();
      Swal.fire({
        title: 'Yakin ?',
        text: "Apakah Anda Yakin Ingin Menghapus Data Ini",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
      }).then((result) => {
        if (result.isConfirmed) {
          form.submit();
          Swal.fire(
            'Deleted!',
            'Data Berhasil Di Hapus',
            'success'
          )
        }
      })
    });
    $("#formPelaporan").submit(function(){
      var penanggung = $("#penanggung").val();
      var alamat = $("#alamat").val();
      var bencana = $("#bencana").val();
      var no_hp = $("#no_hp").val();
      var deskripsi = $("#deskripsi").val();
      var tanggal = $("#tanggal").val();
      if(penanggung == "" || alamat == "" || no_hp == "" || deskripsi == "" || tanggal == "") {
          Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Semua field harus diisi',
            showConfirmButton: false,
            timer: 1500
          });
        return false;
      }
    });
  });
</script>
@endpush