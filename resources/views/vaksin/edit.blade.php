@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Edit Vaksin <span>{{ $vaksin->nama }}</span></h1>
</div>

<form action="{{ url('vaksin/'.$vaksin->id) }}" method="POST" class="w-50">
	@method('PUT')
	@csrf
	<div class="mb-3">
	  <label class="form-label">Nama Vaksin</label>
	  <input type="text" class="form-control" name="nama" value="{{ $vaksin->nama }}">
	</div>
	<div class="mb-3">
	  <label class="form-label">Keterangan</label>
	  <textarea name="keterangan" id="" cols="30" rows="10" class="form-control">{{ $vaksin->keterangan }}</textarea>
	</div>
	<button type="submit" class="btn btn-primary">Update</button>
  </form>
@endsection