@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Edit Vaksinasi Dari <span>{{ $vaksinasi->penduduk->nama }}</span></h1>
</div>

<form action="{{ url('mvaksinasi/'.$vaksinasi->id) }}" method="POST" class="w-50">
    @method('PUT')
	@csrf
	<div class="mb-3">
	  <label class="form-label">Nama Penduduk</label>
	  <select name="penduduk_id" id="" class="form-select">
		<option selected disabled>Select Penduduk</option>
		@foreach ($penduduk as $item)
			<option value="{{ $item->id }}">{{ $item->nama }}</option>
		@endforeach
	  </select>
	</div>
	<div class="mb-3">
		<label class="form-label">Nama Vaksin</label>
		<select name="vaksin_id" id="" class="form-select">
		  <option selected disabled>Select Vaksin</option>
		  @foreach ($vaksin as $item)
			  <option value="{{ $item->id }}">{{ $item->nama }}</option>
		  @endforeach
		</select>
	  </div>
	<div class="mb-3">
		<label class="form-label">Lokasi</label>
		<select name="lokasi_id" id="" class="form-select">
		  <option selected disabled>Select Lokasi</option>
		  @foreach ($lokasi as $item)
			  <option value="{{ $item->id }}">{{ $item->nama }}</option>
		  @endforeach
		</select>
	  </div>
	<button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
