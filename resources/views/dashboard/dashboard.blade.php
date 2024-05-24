@extends('layouts.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Overview
          </div>
          <h2 class="page-title">
            Peta Wilayah 
          <!--{{ date('d-m-Y',strtotime(date('Y-m-d'))) }}-->
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
        <div class="row">
  <div class="row">
    <div id="map"></div>
  </div>
        </div>
    </div>
  </div>
  <style>
    #map { 
        height: 500px;
        width: 100%;
    }

</style>
  
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
@endsection
@push('myscript')
    <script>
        var map = L.map('map').setView([-7.513614, 110.514918], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var marker = L.marker([-7.513614, 110.514918]).addTo(map);
    </script>
@endpush