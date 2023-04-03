@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Edit Lokasi <span>{{ $lokasi->nama }}</span></h1>
</div>

<form action="{{ url('lokasi/'.$lokasi->id) }}" method="POST" class="w-50">
	@method('PUT')
	@csrf
	<div class="mb-3">
	  <label class="form-label">Nama Vaksin</label>
	  <input type="text" class="form-control" name="nama" value="{{ $lokasi->nama }}">
	</div>
	<div class="mb-3">
	  <label class="form-label">Keterangan</label>
	  <textarea name="alamat_lokasi" id="" cols="30" rows="10" class="form-control">{{ $lokasi->alamat_lokasi }}</textarea>
	</div>
	<button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection