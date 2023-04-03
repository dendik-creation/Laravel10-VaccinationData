@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Tambah Lokasi Baru</h1>
</div>

<form action="/lokasi" method="POST" class="w-50">
	@csrf
	<div class="mb-3">
	  <label class="form-label">Nama Lokasi</label>
	  <input type="text" class="form-control" name="nama">
	</div>
	<div class="mb-3">
	  <label class="form-label">Alamat Lokasi</label>
	  <textarea name="alamat_lokasi" id="" cols="30" rows="10" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection