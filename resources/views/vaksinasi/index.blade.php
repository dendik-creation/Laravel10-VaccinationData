@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">List Data Vaksinasi</h1>
	<a href="mvaksinasi-create" class="shadow-sm p-2 bg-body rounded">
	<span data-feather="plus-square"style="width:36px;height:36px;color:black"></span>
	</a>
</div>
<div class="d-flex mb-3 mt-3 align-items-center justify-content-between">
    <div class="">
        <label for="" class="form-label">Cari Berdasarkan NIK</label>
        <form action="/mvaksinasi" method="GET">
            <input type="search" class="form-control" name="search" placeholder="Cari NIK" pattern="[1-9]{10}" title="Jumlah NIK berjumlah 10 Angka">
        </form>
    </div>
    <div class="text-center">
        <h6>Urut Berdasarkan</h6>
        <div class="">
            <a href="/mvaksinasi" class="text-decoration-none mx-2 btn btn-sm btn-success">
                <span data-feather="chevrons-up"></span>
                Terbaru
            </a>
            <a href="/mvaksinasi-terlama" class="text-decoration-none mx-2 btn btn-sm btn-success">
                <span data-feather="chevrons-down"></span>
                Terlama
            </a>
        </div>
    </div>
</div>
<table class="table table-striped text-center align-items-center">
	<th>#</th>
	<th>NIK</th>
	<th>Nama Penduduk</th>
	<th>Nama Vaksin</th>
	<th>Lokasi</th>
	<th>Vaksin Ke</th>
	<th>Status</th>
	<th colspan="2">Action</th>

	@php
		$count = 1;
	@endphp
	@foreach ($vaksinasiAll as $item)
	<tr>
		<td>{{ $count++ }}</td>
		<td>{{ $item->penduduk->nik }}</td>
		<td>{{ $item->penduduk->nama }}</td>
		<td>{{ $item->vaksin->nama }}</td>
		<td>{{ $item->lokasi->nama }}</td>
		<td>{{ $item->vaksin_ke }}</td>
		<td>
			@if ($item->vaksin_ke == 1)
				<span class="badge bg-danger">Very Bad</span>
			@endif
			@if ($item->vaksin_ke == 2)
				<span class="badge bg-warning">Bad</span>
			@endif
			@if ($item->vaksin_ke == 3)
				<span class="badge bg-success">Good</span>
			@endif
			@if ($item->vaksin_ke == 4)
				<span class="badge bg-info">Very Good</span>
			@endif
		</td>
		<td>
			<a href="{{ url('mvaksinasi-edit-'.$item->id) }}" class="btn btn-info text-white text-decoration-none btn btn-sm">
				Edit
			</a>
		</td>
		<td>
			<form action="{{ url('mvaksinasi/'.$item->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger btn btn-sm">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
<div class="d-flex justify-content-center">
	<div class="w-75">
		{{ $vaksinasiAll->links() }}
	</div>
</div>
@endsection
