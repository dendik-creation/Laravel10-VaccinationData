@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Edit Vaksin <span>{{ $penduduk->nama }}</span></h1>
</div>

<form action="{{ url('penduduk/'.$penduduk->id) }}" method="POST" class="w-50">
	@method('PUT')
	@csrf
	<div class="mb-3">
	  <label class="form-label">NIK</label>
	  <input type="text" class="form-control" name="nik" value="{{ $penduduk->nik }}">
	</div>
	<div class="mb-3">
	  <label class="form-label">Nama</label>
	  <input type="text" class="form-control" name="nama" value="{{ $penduduk->nama }}">
	</div>
	<div class="mb-3">
	  <label class="form-label">Gender</label>
	  <select name="gender" id="" class="form-select">
		<option value="Laki-laki">Laki-laki</option>
		<option value="Perempuan">Perempuan</option>
	  </select>
	</div>
	<div class="mb-3">
		<label class="form-label">Alamat</label>
		<textarea name="alamat" id="" cols="30" rows="10" class="form-control">{{ $penduduk->alamat }}</textarea>
	</div>
	<div class="mb-3">
	  <label class="form-label">Pekerjaan</label>
	  <input type="text" class="form-control" name="pekerjaan" value="{{ $penduduk->pekerjaan }}">
	</div>
	<div class="mb-3">
	  <label class="form-label">No Telp</label>
	  <input type="text" class="form-control" name="no_telp" value="{{ $penduduk->no_telp }}">
	</div>
	<button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection