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
                    @if (Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::get('error'))
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
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-calendar-event" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M16 3l0 4"></path>
                                            <path d="M8 3l0 4"></path>
                                            <path d="M4 11l16 0"></path>
                                            <path d="M8 15h2v2h-2z"></path>
                                        </svg>
                                    </span>
                                    <input type="text" id="dari" value="{{ Request('dari') }}" class="form-control"
                                        name="dari" placeholder="Dari">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-icon mb-3">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-calendar-event" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                                            </path>
                                            <path d="M16 3l0 4"></path>
                                            <path d="M8 3l0 4"></path>
                                            <path d="M4 11l16 0"></path>
                                            <path d="M8 15h2v2h-2z"></path>
                                        </svg>
                                    </span>
                                    <input type="text" id="sampai" value="{{ Request('sampai') }}"
                                        class="form-control" name="sampai" placeholder="Sampai">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-icon mb-3">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-alert-circle">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                            <path d="M12 8v4" />
                                            <path d="M12 16h.01" />
                                        </svg>
                                    </span>
                                    <input type="text" id="bencana" value="{{ Request('bencana') }}"
                                        class="form-control" name="bencana" placeholder="Jenis Bencana">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
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
                                        $path = Storage::url('uploads/laporan/' . $item->foto);
                                    @endphp
                                    <tr>
                                        <td>{{ $loop->iteration + $laporan->firstItem() - 1 }}</td>
                                        <td>{{ $item->kode_lapor }}</td>
                                        <td>{{ $item->penanggung }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->bencana }}</td>
                                        <td>{{ $item->no_hp }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>
                                            @if (empty($item->foto))
                                                <img src="{{ asset('assets/img/nophoto.png') }}" class="avatar"
                                                    alt="">
                                            @else
                                                <img src="{{ url($path) }}" class="avatar" alt="">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status == '0')
                                                <span class="badge bg-warning" style="color:white">Pending</span>
                                            @elseif($item->status == '1')
                                                <span class="badge bg-success" style="color:white">Disetujui</span>
                                            @else
                                                <span class="badge bg-danger" style="color:white">Ditolak</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status == '0')
                                                <a href="#" class="btn btn-primary approve"
                                                    kode_lapor="{{ $item->kode_lapor }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-external-link" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6">
                                                        </path>
                                                        <path d="M11 13l9 -9"></path>
                                                        <path d="M15 4h5v5"></path>
                                                    </svg>
                                                    Aksi
                                                </a>
                                            @else
                                                <a href="/aksi/{{ $item->kode_lapor }}/batalkan" class="btn btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler icon-tabler-x" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="#ffffff" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                                        <line x1="18" y1="6" x2="6"
                                                            y2="18"></line>
                                                        <line x1="6" y1="6" x2="18"
                                                            y2="18"></line>
                                                    </svg>
                                                    Batalkan
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                        {{ $laporan->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-blur fade" id="modal-aksi" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Aksi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/aksi/approve" method="POST">
                            @csrf
                            <input type="hidden" id="kode_aksi_form" name="kode_aksi_form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <select name="status" id="status" class="form-select">
                                            <option value="1">Disetujui</option>
                                            <option value="2">Ditolak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary w-100">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-send" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M10 14l11 -11"></path>
                                                <path
                                                    d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5">
                                                </path>
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
    @endsection
    @push('myscript')
        <script>
            $(function() {
                $('.approve').click(function(e) {
                    e.preventDefault();
                    var kode_lapor = $(this).attr('kode_lapor');
                    $('#kode_aksi_form').val(kode_lapor);
                    $('#modal-aksi').modal('show');
                });

                $("#dari, #sampai").datepicker({
                    autoclose: true,
                    todayHighlight: true,
                    format: 'yyyy-mm-dd'
                });

            });
        </script>
    @endpush
