@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Tambah Vaksin Baru</h1>
</div>

<form action="/vaksin" method="POST" class="w-50">
	@csrf
	<div class="mb-3">
	  <label class="form-label">Nama Vaksin</label>
	  <input type="text" class="form-control" name="nama">
	</div>
	<div class="mb-3">
	  <label class="form-label">Keterangan</label>
	  <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection