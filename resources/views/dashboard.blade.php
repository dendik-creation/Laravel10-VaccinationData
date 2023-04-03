@extends('layouts.main')
@section('content')
<head>
    <style>
    .widthCustom{
        width: 15em;
        margin: 1em;
    }
    </style>
</head>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Dashboard</h1>
</div>
<div class="d-flex justify-content-around align-items-center h-100 flex-wrap">
    <div class="bg-dark text-white p-4 text-center rounded widthCustom">
        <span data-feather="database" style="width:80px;height:80px;"></span> <br>
        <span class="fw-bold mt-2 mb-2 fs-2">{{ $vaksin }}</span><br>
        <span class="fw-bold fs-6">Vaksin Terdaftar</span>
    </div>
    <div class="bg-dark text-white p-4 text-center rounded widthCustom">
        <span data-feather="activity" style="width:80px;height:80px;"></span> <br>
        <span class="fw-bold mt-2 mb-2 fs-2">{{ $vaksinasi }}</span><br>
        <span class="fw-bold fs-6">Vaksinasi Terlaksana</span>
    </div>
    <div class="bg-dark text-white p-4 text-center rounded widthCustom">
        <span data-feather="users" style="width:80px;height:80px;"></span> <br>
        <span class="fw-bold mt-2 mb-2 fs-2">{{ $penduduk }}</span><br>
        <span class="fw-bold fs-6">Penduduk Terdaftar</span>
    </div>
    <div class="bg-dark text-white p-4 text-center rounded widthCustom">
        <span data-feather="map-pin" style="width:80px;height:80px;"></span> <br>
        <span class="fw-bold mt-2 mb-2 fs-2">{{ $lokasi }}</span><br>
        <span class="fw-bold fs-6">Lokasi Ditambahkan</span>
    </div>
</div>
@endsection
