@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">List Data Penduduk</h1>
	<a href="penduduk-create" class="shadow-sm p-2 bg-body rounded">
	<span data-feather="user-plus"style="width:36px;height:36px;color:black"></span>
	</a>
</div>
<table class="table table-striped">
	<th>#</th>
	<th>NIK</th>
	<th>Nama</th>
	<th>Gender</th>
	<th>Alamat</th>
	<th>Pekerjaan</th>
	<th>No Telp</th>
	<th colspan="2">Action</th>

	@php
		$count = 1;
	@endphp
	@foreach ($pendudukAll as $item)
	<tr>
		<td>{{ $count++ }}</td>
		<td>{{ $item->nik }}</td>
		<td>{{ $item->nama }}</td>
		<td>{{ $item->gender }}</td>
		<td>{{ $item->alamat }}</td>
		<td>{{ $item->pekerjaan }}</td>
		<td>{{ $item->no_telp }}</td>
		<td>
			<a href="{{ url('penduduk-edit-'.$item->id) }}" class="btn btn-info text-white text-decoration-none btn btn-sm">
				Edit
			</a>
		</td>
		<td>
			<form action="{{ url('penduduk/'.$item->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger btn btn-sm">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
@endsection