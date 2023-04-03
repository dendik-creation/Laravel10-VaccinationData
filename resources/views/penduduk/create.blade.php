@extends('layouts.main')
@section('content')
<head>
    <style>
        .wCustom{
            width: 17em;
        }
        .wCustom2{
            width: 23em;
        }
    </style>
</head>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Tambah Penduduk Baru</h1>
</div>
<form action="/penduduk" method="POST" class="w-50">
	@csrf
    <div class="d-flex justify-content-between">
        <div class="wCustom">
            <div class="mb-3">
              <label class="form-label">NIK</label>
              <input type="text" class="form-control" name="nik" pattern="[1-9]{10}" title="Jumlah NIK harus 10 angka">
            </div>
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
              <label class="form-label">Gender</label>
              <select name="gender" id="" class="form-select">
                <option selected disabled>Select Gender</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
        </div>
        <div class="wCustom2">
            <div class="mb-3">
                <label class="form-label">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">No Telp</label>
                <input type="text" name="no_telp" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" id="" cols="30" class="form-control"></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary w-100">Submit</button>
  </form>
@endsection
