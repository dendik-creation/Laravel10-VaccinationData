@extends('layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">List Data Vaksin</h1>
	<a href="vaksin-create" class="shadow-sm p-2 bg-body rounded">
	<span data-feather="plus-square"style="width:36px;height:36px;color:black"></span>
	</a>
</div>
<table class="table table-striped text-center align-items-center">
	<th>#</th>
	<th>Nama Vaksin</th>
	<th width="800">Keterangan</th>
	<th colspan="2">Action</th>

	@php
		$count = 1;
	@endphp
	@foreach ($vaksinAll as $item)
	<tr>
		<td>{{ $count++ }}</td>
		<td>{{ $item->nama }}</td>
		<td class="text-start">{{ $item->keterangan }}</td>
		<td>
			<a href="{{ url('vaksin-edit-'.$item->id) }}" class="btn btn-info text-white text-decoration-none btn btn-sm">
				Edit
			</a>
		</td>
		<td>
			<form action="{{ url('vaksin/'.$item->id) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger btn btn-sm">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
@endsection