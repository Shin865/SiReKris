@extends('layouts.admin.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
            <!-- Page pre-title -->
            <div class="page-pretitle">
                List Laporan
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
                <form action="/laporan" method="GET" autocomplete="off">
                    <div class="row">
                        <div class="col-3">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                                        <path d="M16 3l0 4"></path>
                                        <path d="M8 3l0 4"></path>
                                        <path d="M4 11l16 0"></path>
                                        <path d="M8 15h2v2h-2z"></path>
                                     </svg>
                                </span>
                                <input type="text" id="dari" value="{{ Request('dari') }}" class="form-control" name="dari" placeholder="Dari">
                              </div>
                        </div>
                        <div class="col-3">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                                        <path d="M16 3l0 4"></path>
                                        <path d="M8 3l0 4"></path>
                                        <path d="M4 11l16 0"></path>
                                        <path d="M8 15h2v2h-2z"></path>
                                     </svg>
                                </span>
                                <input type="text" id="sampai" value="{{ Request('sampai') }}" class="form-control" name="sampai" placeholder="Sampai">
                              </div>
                        </div>
                    <div class="col-3">
                        <div class="input-icon mb-3">
                            <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                 </svg>
                            </span>
                            <input type="text" id="bencana" value="{{ Request('bencana') }}" class="form-control" name="bencana" placeholder="Jenis Bencana">
                          </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                    <path d="M21 21l-6 -6"></path>
                                 </svg>
                                 Cari  
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </form>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Laporan</th>
                            <th>Penanggung Jawab</th>
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
                        @foreach ($laporan as $item)
                            @php
                                $path = Storage::url('uploads/laporan/'.$item->foto);
                            @endphp
                            <tr>
                                <td>{{ $loop->iteration + $laporan->firstItem()-1 }}</td>
                                <td>{{ $item->kode_lapor }}</td>
                                <td>{{ $item->penanggung }}</td>
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
                                  <form action="/laporan/cetaklaporan" target="_blank" method="POST">
                                    @csrf
                                    <input type="hidden" name="kode_lapor" value="{{ $item->kode_lapor }}">
                                    <button type="submit" name="exportword" class="btn btn-primary btn-sm">
                                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M6 9h12v-4a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v4"></path>
                                        <path d="M6 9v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2v-10"></path>
                                        <path d="M12 15v3"></path>
                                        <path d="M9 12h6"></path>
                                      </svg>
                                    </button>
                                    </form>
                                  </div>
                                </td>
                            </tr>
                        @endforeach
                </table>
                {{ $laporan->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
  </div>
@endsection
@push('myscript')
<script>
    $(function() {
        $("#dari, #sampai").datepicker({ 
        autoclose: true, 
        todayHighlight: true,
        format: 'yyyy-mm-dd'
        });
    });
</script>
@endpush