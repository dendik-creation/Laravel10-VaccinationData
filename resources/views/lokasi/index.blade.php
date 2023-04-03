@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">List Data Lokasi</h1>
	<a href="lokasi-create" class="shadow-sm p-2 bg-body rounded">
	<span data-feather="plus-square"style="width:36px;height:36px;color:black"></span>
	</a>
</div>
<table class="table table-striped">
	<th>#</th>
	<th>Nama Lokasi</th>
	<th>Alamat Lokasi</th>
	<th colspan="2">Action</th>

	@php
		$count = 1;
	@endphp
	@foreach ($lokasiAll as $item)
	<tr>
		<td>{{ $count++ }}</td>
		<td>{{ $item->nama }}</td>
		<td class="text-start">{{ $item->alamat_lokasi }}</td>
		<td>
			<a href="{{ url('lokasi-edit-'.$item->id) }}" class="btn btn-info text-white text-decoration-none btn btn-sm">
				Edit
			</a>
		</td>
		<td>
			<form action="{{ url('lokasi/'.$item->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger btn btn-sm">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
@endsection
