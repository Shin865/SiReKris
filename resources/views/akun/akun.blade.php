@extends('layouts.admin.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Akun
          </div>
          <h2 class="page-title">
            Data Akun
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
                  <div class="row mt-2">
                    <div class="col-12">
                      <form action="/akunlist" method="GET">
                        <div class="row">
                          <div class="col-9">
                            <div class="form-group">
                              <input type="text" name="nama_pela" id="nama_pela" class="form-control" placeholder="Nama Pelapor" value="{{ Request('nama_pela') }}">
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
                                <th>Nama Pangguna</th>
                                <th>Email</th>
                                <th>No.HP</th>
                                <th>Tanggal Daftar</th>
                            </tr>   
                        </thead>
                        <tbody>
                            @foreach ($akun as $item)
                            <tr>
                                <td>{{ $loop->iteration + $akun->firstItem()-1 }}</td>
                                <td>{{ $item->nama_pela }}</td>
                                <td>{{ $item->email_pela }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->tgl_daftar }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $akun->links('vendor.pagination.bootstrap-5') }}
                    </div>
                  </div>
                </div>
        </div>
    </div>
  </div>
@endsection